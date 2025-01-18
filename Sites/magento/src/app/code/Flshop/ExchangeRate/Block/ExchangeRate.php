<?php

namespace Flshop\ExchangeRate\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\HTTP\Client\Curl;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\CacheInterface;

class ExchangeRate extends Template
{
    /**
     * @var Curl
     */
    protected $curl;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var CacheInterface
     */
    protected $cache;

    /**
     * Cache Key Prefix
     *
     * @var string
     */
    protected $cacheKeyPrefix = 'exchange_rate_vietcombank_';

    /**
     * Vietcombank XML URL
     *
     * @var string
     */
    protected $xmlUrl = 'https://portal.vietcombank.com.vn/Usercontrols/TVPortal.TyGia/pXML.aspx?b=68';

    /**
     * Constructor
     *
     * @param Template\Context $context
     * @param Curl $curl
     * @param LoggerInterface $logger
     * @param CacheInterface $cache
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Curl $curl,
        LoggerInterface $logger,
        CacheInterface $cache,
        array $data = []
    ) {
        $this->curl = $curl;
        $this->logger = $logger;
        $this->cache = $cache;
        parent::__construct($context, $data);
    }

    /**
     * Get Exchange Rates from Vietcombank
     *
     * @return array
     */
    public function getExchangeRates()
    {
        $cacheKey = $this->cacheKeyPrefix . 'vietcombank_rates';
        $cachedData = $this->cache->load($cacheKey);

        if ($cachedData) {
            return unserialize($cachedData);
        }

        try {
            // Set User-Agent header (optional but good practice)
            $this->curl->setHeaders([
                'User-Agent' => 'FlshopExchangeRateModule/1.0 (https://magento.test)'
            ]);

            $this->curl->get($this->xmlUrl);
            $response = $this->curl->getBody();

            if (empty($response)) {
                throw new \Exception('Empty response from Vietcombank XML endpoint.');
            }

            // Parse XML response
            $xml = simplexml_load_string($response, "SimpleXMLElement", LIBXML_NOCDATA);

            if ($xml === false) {
                throw new \Exception('Failed to parse XML response.');
            }

            $exchangeRates = [];

            foreach ($xml->Exrate as $exrate) {
                $currencyCode = (string) $exrate['CurrencyCode'];
                $buy = (string) $exrate['Buy'];
                $transfer = (string) $exrate['Transfer'];
                $sell = (string) $exrate['Sell'];

                // Convert rates to float, handle possible '-' entries
                $exchangeRates[$currencyCode] = [
                    'buy' => $buy !== '-' ? floatval(str_replace(',', '', $buy)) : null,
                    'transfer' => $transfer !== '-' ? floatval(str_replace(',', '', $transfer)) : null,
                    'sell' => $sell !== '-' ? floatval(str_replace(',', '', $sell)) : null,
                ];
            }

            // Cache the data for 1 hour (3600 seconds)
            $this->cache->save(serialize($exchangeRates), $cacheKey, [], 3600);

            return $exchangeRates;
        } catch (\Exception $e) {
            // Log the error
            $this->logger->error('Vietcombank ExchangeRate API Error: ' . $e->getMessage());

            // Optionally, display a user-friendly message
            $this->setData('error_message', 'Unable to retrieve exchange rates at this time.');
        }

        return [];
    }

    /**
     * Get Specific Exchange Rate by Currency Code
     *
     * @param string $currencyCode
     * @return array|null
     */
    public function getExchangeRateByCurrency($currencyCode)
    {
        $rates = $this->getExchangeRates();
        $currencyCode = strtoupper($currencyCode);

        if (isset($rates[$currencyCode])) {
            return $rates[$currencyCode];
        }

        return null;
    }
}

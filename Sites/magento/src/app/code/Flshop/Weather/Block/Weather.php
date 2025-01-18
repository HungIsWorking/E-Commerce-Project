<?php

namespace Flshop\Weather\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\HTTP\Client\Curl;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\CacheInterface as CacheManager;
use Magento\Framework\Serialize\SerializerInterface;

class Weather extends Template
{
    protected $curl;
    protected $logger;
    protected $cacheManager;
    protected $serializer;

    const CACHE_TAG = 'flshop_weather_data';
    const CACHE_LIFETIME = 600; // 10 minutes

    public function __construct(
        Template\Context $context,
        Curl $curl,
        LoggerInterface $logger,
        CacheManager $cacheManager,
        SerializerInterface $serializer,
        array $data = []
    ) {
        $this->curl = $curl;
        $this->logger = $logger;
        $this->cacheManager = $cacheManager;
        $this->serializer = $serializer;
        parent::__construct($context, $data);
    }

    /**
     * @param string $city
     * @return array
     */
    public function getWeatherData($city = 'HaNoi')
    {
        $cacheKey = self::CACHE_TAG . '_' . strtolower(str_replace(' ', '_', $city));
        $cachedData = $this->cacheManager->load($cacheKey);

        if ($cachedData) {
            $weatherData = $this->serializer->unserialize($cachedData);
            return $weatherData;
        }

        $apiKey = '7a20a3a7199507e141cf626aa977dbdf';
        $apiUrl = 'https://api.openweathermap.org/data/2.5/weather?q=' . urlencode($city) . '&units=metric&appid=' . $apiKey;

        try {
            $this->curl->setHeaders([
                'User-Agent' => 'FlshopWeatherModule/1.0 (https://magento.test)'
            ]);

            $this->curl->get($apiUrl);
            $response = $this->curl->getBody();
            $weatherData = json_decode($response, true);

            if ($weatherData === null) {
                throw new \Exception('Failed to decode JSON response: ' . json_last_error_msg());
            }

            if (isset($weatherData['cod']) && $weatherData['cod'] == 200) {
                // Serialize and save to cache
                $serializedData = $this->serializer->serialize($weatherData);
                $this->cacheManager->save($serializedData, $cacheKey, [self::CACHE_TAG], self::CACHE_LIFETIME);
                return $weatherData;
            } else {
                $errorMessage = isset($weatherData['message']) ? $weatherData['message'] : 'Unknown error';
                throw new \Exception('API Error: ' . $errorMessage);
            }
        } catch (\Exception $e) {
            $this->logger->error('Weather API Error: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * @param array $cities
     * @return array
     */
    public function getMultipleWeatherData(array $cities)
    {
        $allWeatherData = [];

        foreach ($cities as $city) {
            $data = $this->getWeatherData($city);
            if (!empty($data)) {
                $allWeatherData[] = $data;
            }
        }

        return $allWeatherData;
    }
}

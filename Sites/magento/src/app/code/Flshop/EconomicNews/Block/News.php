<?php

namespace Flshop\EconomicNews\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\HTTP\Client\Curl;
use Psr\Log\LoggerInterface;
use Magento\Framework\Data\CollectionFactory;

class News extends Template
{
    protected $curl;
    protected $logger;
    protected $collectionFactory;

    public function __construct(
        Template\Context $context,
        Curl $curl,
        LoggerInterface $logger, // Inject Logger for error logging
        CollectionFactory $collectionFactory, // Inject CollectionFactory
        array $data = []
    ) {
        $this->curl = $curl;
        $this->logger = $logger;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * Fetch and process economic news from RSS feed
     *
     * @return \Magento\Framework\Data\Collection
     */
    public function getEconomicNewsCollection()
    {
        $rssUrl = 'https://vnexpress.net/rss/kinh-doanh.rss'; // VNExpress RSS feed URL

        try {
            // Set the User-Agent header with your actual website URL
            $this->curl->setHeaders([
                'User-Agent' => 'FlshopEconomicNews/1.0 (https://flshop.me)'
            ]);

            $this->curl->get($rssUrl);
            $response = $this->curl->getBody();

            // Load the XML response and parse it
            libxml_use_internal_errors(true); // Suppress XML parsing errors
            $xml = simplexml_load_string($response);
            if ($xml === false) {
                $errors = libxml_get_errors();
                $errorMessage = 'Failed to load XML: ';
                foreach ($errors as $error) {
                    $errorMessage .= $error->message . '; ';
                }
                libxml_clear_errors();
                throw new \Exception($errorMessage);
            }

            $newsData = [];
            foreach ($xml->channel->item as $item) {
                // Strip HTML tags from title and description
                $cleanTitle = strip_tags((string) $item->title);
                $cleanDescription = strip_tags((string) $item->description);
                $cleanLink = strip_tags((string) $item->link);
                $cleanPubDate = strip_tags((string) $item->pubDate);
                $cleanImage = isset($item->enclosure['url']) ? strip_tags((string) $item->enclosure['url']) : '';

                $newsData[] = [
                    'title' => $cleanTitle,
                    'description' => $cleanDescription,
                    'link' => $cleanLink,
                    'pubDate' => $cleanPubDate,
                    'image' => $cleanImage
                ];

                // Stop collecting if we've reached 200 items
                if (count($newsData) >= 400) {
                    break;
                }
            }

            // Create Collection from news data using CollectionFactory
            $collection = $this->collectionFactory->create();
            foreach ($newsData as $newsItem) {
                $collection->addItem(new \Magento\Framework\DataObject($newsItem));
            }

            return $collection;
        } catch (\Exception $e) {
            // Log the error instead of echoing
            $this->logger->error('EconomicNews Module Error: ' . $e->getMessage());
        }

        // Return an empty Collection in case of error
        return $this->collectionFactory->create();
    }

    /**
     * Get paginated economic news
     *
     * @return \Magento\Framework\Data\Collection
     */
    public function getPaginatedEconomicNews()
    {
        $collection = $this->getEconomicNewsCollection();

        // Define page size
        $pageSize = 21; // Number of items per page

        // Get current page from request, default to 1
        $currentPage = (int) $this->getRequest()->getParam('p') ?: 1;

        // Calculate total items and pages
        $totalItems = $collection->getSize();
        $totalPages = ceil($totalItems / $pageSize);

        // Ensure current page is within bounds
        if ($currentPage > $totalPages) {
            $currentPage = $totalPages;
        } elseif ($currentPage < 1) {
            $currentPage = 1;
        }

        // Calculate offset
        $offset = ($currentPage - 1) * $pageSize;

        // Slice the collection items
        $items = $collection->getItems();
        $pagedItems = array_slice($items, $offset, $pageSize);

        // Create a new collection for paged items
        $pagedCollection = $this->collectionFactory->create();
        foreach ($pagedItems as $item) {
            $pagedCollection->addItem($item);
        }

        // Prepare pagination data
        $paginationData = [
            'current_page' => $currentPage,
            'total_pages' => $totalPages,
            'page_size' => $pageSize,
            'total_items' => $totalItems
        ];

        // Set pagination data to the block for use in the template
        $this->setData('pagination', $paginationData);

        return $pagedCollection;
    }

    /**
     * Get pagination data
     *
     * @return array
     */
    public function getPaginationData()
    {
        return $this->getData('pagination');
    }

    /**
     * Get Pager HTML
     *
     * @return string
     */
    public function getPagerHtml()
    {
        return $this->getChildHtml('economic.news.pager');
    }

    /**
     * Generate URL for a specific page number
     *
     * @param int $page
     * @return string
     */
    public function getPagerUrl($page)
    {
        $params = $this->getRequest()->getParams();
        $params['p'] = $page;

        return $this->getUrl('*/*/*', ['_current' => true, '_use_rewrite' => true, '_query' => $params]);
    }
}

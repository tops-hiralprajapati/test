<?php

namespace Tops\NeweggApi\Api;

use Tops\NeweggApi\Api\BaseApi;

class FeedApi extends BaseApi
{
    // Endpoint URLs for feed-related actions
    protected $submitFeedUrl = "/datafeedmgmt/feeds/submitfeed";
    protected $getFeedStatusUrl = "/datafeedmgmt/feeds/status";
    protected $getFeedResultUrl = "/datafeedmgmt/feeds/result";

    /**
     * Submit a feed to the Newegg API.
     *
     * Sends a POST request to the `submitFeedUrl` to upload a feed file or data for processing.
     *
     * @param array $reqData The data to be sent with the request.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API request (success or error).
     * @author Hiral Prajapati <hiralprajapati@topsinfosolutions.com> | 29-11-2024
     * @link https://developer.newegg.com/newegg_marketplace_api/datafeed_management/submit_feed/
    */
    public function submitFeed($reqData = [], $params = [])
    {
        return $this->makeRequest($this->submitFeedUrl, 'POST', $reqData, $params);
    }

    /**
     * Retrieve the status of a submitted feed from the Newegg API.
     *
     * Sends a PUT request to the `getFeedStatusUrl` to check the processing status of a feed submission.
     *
     * @param array $reqData The data to be sent with the request.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API request (status information).
     * @author Hiral Prajapati <hiralprajapati@topsinfosolutions.com> | 29-11-2024
     * @link https://developer.newegg.com/newegg_marketplace_api/datafeed_management/get_feed_status/
    */
    public function getFeedStatus($reqData = [], $params = [])
    {
        return $this->makeRequest($this->getFeedStatusUrl, 'PUT', $reqData, $params);
    }

    /**
     * Retrieve the result of a processed feed from the Newegg API.
     *
     * Sends a GET request to the `getFeedResultUrl` to download or view the results of a feed submission.
     *
     * @param string $resultId The request number for the feed that needs to be checked.
     * @param array $reqData The data to be sent with the request.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API request (report results).
     * @author Hiral Prajapati <hiralprajapati@topsinfosolutions.com> | 29-11-2024
     * @link https://developer.newegg.com/newegg_marketplace_api/datafeed_management/get_feed_result/
    */
    public function getFeedResult($resultId, $reqData = [], $params = [])
    {
        $url = $this->getFeedResultUrl.'/'.$resultId;

        return $this->makeRequest($this->url, 'GET', $reqData, $params);
    }
}

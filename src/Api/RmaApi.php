<?php

namespace Tops\NeweggApi\Api;

use Tops\NeweggApi\Api\BaseApi;

class RmaApi extends BaseApi
{
    // Endpoint URLs for order-related actions
    protected $submitRmaUrl          = "/servicemgmt/rma/newrma";
    protected $processRmaUrl         = "/servicemgmt/rma/updaterma";

    /**
     * Submit RMA via the Newegg API.
     *
     * This function sends a POST request to the `submitRmaUrl` to request the cancellation of specified orders.
     *
     * @param string $orderNumber The order number for the order that needs to be canceled.
     * @param array $reqData An array containing the request payload, such as order numbers or filters.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API, including the status and data or error messages.
     * @author Suraj Gupta <surajgupta@topsinfosolutions.com> | 12-02-2025
     * @link https://api.newegg.com/marketplace/servicemgmt/rma/newrma
    */
    public function submitRma($reqData = [], $params = [])
    {
        return $this->makeRequest($this->submitRmaUrl, 'POST', $reqData, $params);
    }

    /**
     * Process RMA via the Newegg API.
     *
     * This function sends a POST request to the `processRmaUrl` to request the process rma of specified orders.
     * @param array $reqData An array containing the request payload.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API, including the status and data or error messages.
     * @author Suraj Gupta <surajgupta@topsinfosolutions.com> | 13-02-2025
     * @link https://api.newegg.com/marketplace/servicemgmt/rma/updaterma
    */
    public function processRma($reqData = [], $params = [])
    {
        return $this->makeRequest($this->processRmaUrl, 'POST', $reqData, $params);
    }
}

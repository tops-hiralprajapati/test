<?php

namespace Tops\NeweggApi\Api;

use Tops\NeweggApi\Api\BaseApi;

class ItemApi extends BaseApi
{
    // Endpoint URLs for report-related actions
    protected $getBatchInventoryUrl    = "/contentmgmt/item/international/inventorylist";
    protected $getBatchPriceUrl       = "/contentmgmt/item/international/Pricelist";

    /**
     * Get the item details and inventory from the API.
     * This function sends a POST request to the `getBatchInventoryUrl` with the provided request data and parameters.
     *
     * @param array $reqData The data to be sent with the request.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API request (success or error).
     * @author Suraj Gupta <surajgupta@topsinfosolutions.com> | 17-01-2025
     * @link https://developer.newegg.com/newegg_marketplace_api/item_management/get-batch-inventory/
    */
    public function getBatchInventory($reqData = [], $params = [])
    {
        return $this->makeRequest($this->getBatchInventoryUrl, 'POST', $reqData, $params);
    }

    /**
     * Get the list of item details and price from the API.
     *
     * This function sends a POST request to the `getBatchPriceUrl` with the provided request data and parameters.
     *
     * @param array $reqData The data to be sent with the request.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API request (status information).
     * @author Suraj Gupta <surajgupta@topsinfosolutions.com> | 16-01-2025
     * @link https://developer.newegg.com/newegg_marketplace_api/item_management/get-batch-price/
    */
    public function getBatchPrice($reqData = [], $params = [])
    {
        return $this->makeRequest($this->getBatchPriceUrl, 'POST', $reqData, $params);
    }
}

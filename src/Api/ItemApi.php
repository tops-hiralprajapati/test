<?php

namespace Tops\NeweggApi\Api;

use Tops\NeweggApi\Api\BaseApi;

class ItemApi extends BaseApi
{
    // Endpoint URLs for report-related actions
    protected $getItemInventoryUrl    = "/contentmgmt/item/international/inventory";
    protected $getItemPriceUrl        = "/contentmgmt/item/international/price";

    /**
     * Get the item details and inventory from the API.
     * This function sends a PUT request to the `getItemInventoryUrl` with the provided request data and parameters.
     *
     * @param array $reqData The data to be sent with the request.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API request (success or error).
     * @author Suraj Gupta <surajgupta@topsinfosolutions.com> | 13-01-2025
     * @link https://developer.newegg.com/newegg_marketplace_api/item_management/get_inventory/
    */
    public function getItemInventory($reqData = [], $params = [])
    {
        return $this->makeRequest($this->getItemInventoryUrl, 'PUT', $reqData, $params);
    }

    /**
     * Get the item details and price from the API.
     *
     * This function sends a PUT request to the `getItemPriceUrl` with the provided request data and parameters.
     *
     * @param array $reqData The data to be sent with the request.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API request (status information).
     * @author Suraj Gupta <surajgupta@topsinfosolutions.com> | 13-01-2025
     * @link https://developer.newegg.com/newegg_marketplace_api/item_management/get_price/
    */
    public function getItemPrice($reqData = [], $params = [])
    {
        return $this->makeRequest($this->getItemPriceUrl, 'PUT', $reqData, $params);
    }
}

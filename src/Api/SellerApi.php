<?php

namespace Tops\NeweggApi\Api;

use Tops\NeweggApi\Api\BaseApi;

class SellerApi extends BaseApi
{
    // Endpoint URLs for seller-related actions
    protected $resourceUrl  = "/sellermgmt/seller/accountstatus";

    /**
     * Get the seller account status.
     *
     * This function sends a GET request to the `resourceUrl` with the provided request data and optional parameters.
     *
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API, including the status and data or error messages.
     * @author Hiral Prajapati <hiralprajapati@topsinfosolutions.com> | 02-12-2024
     * @link https://developer.newegg.com/newegg_marketplace_api/seller_management/seller_status_check/
    */
    public function sellerStatusCheck($params = [])
    {
        return $this->makeRequest($this->resourceUrl 'GET', [], $params);
    }
}

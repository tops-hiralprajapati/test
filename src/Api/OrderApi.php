<?php

namespace Tops\NeweggApi\Api;

use Tops\NeweggApi\BaseApi;

class OrderApi extends BaseApi
{
    // Endpoint URLs for order-related actions
    protected $getOrderUrl     = "/ordermgmt/order/orderinfo";
    protected $orderCancelUrl  = "/ordermgmt/orderstatus/orders";

    /**
     * Retrieve a list of orders or specific order details from the Newegg API.
     *
     * This function sends a PUT request to the `getOrderUrl` with the provided request data and optional parameters.
     *
     * @param array $reqData An array containing the request payload, such as order numbers or filters.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API, including the status and data or error messages.
     * @author Hiral Prajapati <hiralprajapati@topsinfosolutions.com> | 29-11-2024
     * @link https://developer.newegg.com/newegg_marketplace_api/order_management/get_order_information/
    */
    public function getOrderList($reqData = [], $params = [])
    {
        //orderId
        return $this->makeRequest($this->getOrderUrl, 'PUT', $reqData, $params);
    }

    /**
     * Cancel an order via the Newegg API.
     *
     * This function sends a PUT request to the `orderCancelUrl` to request the cancellation of specified orders.
     *
     * @param array $reqData An array containing the request payload, such as order numbers or filters.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API, including the status and data or error messages.
     * @author Hiral Prajapati <hiralprajapati@topsinfosolutions.com> | 29-11-2024
     * @link https://developer.newegg.com/newegg_marketplace_api/order_management/cancel_status/
    */
    public function cancelOrder($reqData = [], $params = [])
    {
        return $this->makeRequest($this->orderCancelUrl, 'PUT', $reqData, $params);
    }
}

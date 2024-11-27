<?php

namespace Tops\NeweggApi;

use Illuminate\Support\Facades\Http;

class NeweggApi
{
    protected $apiUrl;
    protected $apiKey;
    protected $secretKey;

    public function __construct($params=[])
    {
        $this->apiUrl    = $params['api_endpoint'] ?? null;
        $this->apiKey    = $params['api_key'] ?? null;
        $this->secretKey = $params['secret_key'] ?? null;
        $this->sellerId  = $params['seller_id'] ?? null;
    }

    public function makeRequest($method, $xmlPayload)
    {
        try {

            $headers = [
                'Authorization' => $this->apiKey,
                'SecretKey'     => $this->secretKey,
                'Content-Type'  => 'application/xml',
                'Accept'        => 'application/xml',
            ];

            // Send POST request
            $response = Http::withHeaders($headers)
                            ->{$method}("{$this->apiUrl}?sellerid={$this->sellerId}", $xmlPayload);

            if ($response->successful()) {
                return [
                    'status' => 'success',
                    'data'   => $response->body(),
                ];
            }

            return [
                'status'      => 'error',
                'error'       => $response->body(),
                'status_code' => $response->status(),
            ];

        } catch (\Exception $e) {
            
            $statusCode = method_exists($e, 'getStatusCode') ? $e->getStatusCode() : 500;
            
            return [
                'status'      => 'error',
                'message'     => $e->getMessage(),
                'status_code' => $statusCode,
            ];
        }
    }
}

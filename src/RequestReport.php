<?php

namespace Tops\NeweggApi;

use Tops\NeweggApi\NeweggApi;

class RequestReport extends NeweggApi
{
    public function submitReport(string $xmlPayload)
    {
        return $this->makeRequest('post',$xmlPayload);
    }
}

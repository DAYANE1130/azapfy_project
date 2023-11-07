<?php

namespace App\Services;

use App\Models\ApiModel;

class ApiService
{
    protected $apiModel;

    public function __construct(ApiModel $apiModel)
    {
        $this->apiModel = $apiModel;
    }

    public function fetchAndGroupDataFromApi()
    {
        return $this->apiModel->getDataFromApi();
    }
}

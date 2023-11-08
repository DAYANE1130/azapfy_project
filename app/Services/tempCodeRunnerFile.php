<?php

namespace App\Services;

use App\Models\NotasRemetenteModel;

class NotasRemetenteService
{
    protected $apiModel;

    public function __construct(NotasRemetenteModel $apiModel)
    {
        $this->apiModel = $apiModel;
    }

    public function fetchAndGroupDataFromApi()
    {  
      $data = $this->apiModel->getDataFromApi();
      print_r($data);
        return $data ;
      
        
    }
}

$notasRemetenteService = new NotasRemetenteService(new NotasRemetenteModel());
$resultados = $notasRemetenteService->fetchAndGroupDataFromApi();
print_r($resultados);
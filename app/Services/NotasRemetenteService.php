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

    public function fetchAndGroupDataFromApi($nomeRemetente)
    {  
        $data = $this->apiModel->getDataFromApi();
        $notasAgrupadas = $this->apiModel->agruparNotasPorRemetente($data, $nomeRemetente);

        return $notasAgrupadas;
    }
}

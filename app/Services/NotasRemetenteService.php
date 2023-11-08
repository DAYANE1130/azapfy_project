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

    public function groupNotesBySender($nomeRemetente)
    {  
        $notasAgrupadas = $this->apiModel->groupNotesBySender( $nomeRemetente);

        return $notasAgrupadas;
    }
}

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
        $notas = $this->apiModel->getDataApi();
        $notasAgrupadas = [];
    
        foreach ($notas as $nota) {
         if ($nota['nome_remete'] == $nomeRemetente) {
                    $notasAgrupadas[] = $nota;
                }
            }
        return $notasAgrupadas;
    }


    public function calculateTotals($nomeRemetente)
    {
      $notasAgrupadas = $this->apiModel->getDataApi();
      $total = 0;

      foreach ($notasAgrupadas as $nota) {
        $valorNumero = floatval($nota['valor']);
          $total += $valorNumero ;
        
        }
        return $total;
        
    }
}

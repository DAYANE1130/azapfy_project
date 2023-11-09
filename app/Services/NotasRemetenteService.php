<?php

namespace App\Services;

use App\Models\NotasRemetenteModel;
use DateTime;


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
      $notasAgrupadas = $this->groupNotesBySender($nomeRemetente);
      $total = 0;
      foreach ($notasAgrupadas as $nota) {
        $valorNumero = floatval($nota['valor']);
          $total += $valorNumero ;
        
        }
        return $total;
        
    }

    public function calculateDelivered($nomeRemetente)
    {
      $notasAgrupadas = $this->groupNotesBySender($nomeRemetente);
      $total = 0 ;
      foreach ($notasAgrupadas as $nota) {
        $valorNumero = floatval($nota['valor']);
        if ($nota['status'] == 'COMPROVADO'){
           $total += $valorNumero ;
        }
        }
        return $total;
        
    }

    public function calculateNotDelivered($nomeRemetente)
    {
      $notasAgrupadas = $this->groupNotesBySender($nomeRemetente);
      $total = 0 ;
      foreach ($notasAgrupadas as $nota) {
        $valorNumero = floatval($nota['valor']);
        if ($nota['status'] == 'ABERTO'){
           $total += $valorNumero ;
        }
        }
        return $total;
        
    }

    public function calculateDelay($nomeRemetente)
{
    $notasAgrupadas = $this->groupNotesBySender($nomeRemetente);
    $total = 0;

    foreach ($notasAgrupadas as $nota) {
        $valorNumero = floatval($nota['valor']);
        if (array_key_exists('dt_emis', $nota) && array_key_exists('dt_entrega', $nota)) {
            $dtEmis = DateTime::createFromFormat('d/m/Y H:i:s', $nota['dt_emis']);
            $dtEntrega = DateTime::createFromFormat('d/m/Y H:i:s', $nota['dt_entrega']);

            $interval = $dtEmis->diff($dtEntrega);

            if ($interval->days * 24 + $interval->h > 48 || ($interval->days == 2 && $interval->i > 1)) {
                $total += $valorNumero;
            }
        }
    }

    return $total;
}


}


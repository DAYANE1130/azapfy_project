<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotasRemetenteModel extends Model
{
    use HasFactory;
}

// class ApiModel
// {
//     public function getDataFromApi()
//     {
//         $response = Http::get('https://exemplo.com/api/dados');
//         $notas = $response->json();

//         // Processar os dados aqui, agrupando por remetente
//         $notasAgrupadas = $this->agruparNotasPorRemetente($notas);

//         return $notasAgrupadas;
//     }

//     private function agruparNotasPorRemetente($notas)
//     {
//         // Lógica para agrupar as notas por remetente
//         // ...

//         return $notasAgrupadas;
//     }
// }


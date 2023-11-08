<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\Http;

// // class NotasRemetenteController extends Controller
// // {
// //     public function obterDadosDaAPI()
// //     {
// //         $response = Http::get('http://homologacao3.azapfy.com.br/api/ps/notas');
// //         $notas = $response->json();
// //         return $notas;
// //     }
// // }
// class NotasRemetenteModel extends Model
// {
//     public function getDataFromApi()
//         {
//             $response = Http::get('http://homologacao3.azapfy.com.br/api/ps/notas');
//             $notas = $response->json();
    
//             // Processar os dados aqui, agrupando por remetente
//           //  $notasAgrupadas = $this->agruparNotasPorRemetente($notas);
    
//             return $notas;
//         }
    
//         // private function agruparNotasPorRemetente($notas)
//         // {
//         //     // Lógica para agrupar as notas por remetente
//         //     // ...
    
//         //     return $notasAgrupadas;
//         // }
// }

// // class ApiModel
// // {
// //     public function getDataFromApi()
// //     {
// //         $response = Http::get('https://exemplo.com/api/dados');
// //         $notas = $response->json();

// //         // Processar os dados aqui, agrupando por remetente
// //         $notasAgrupadas = $this->agruparNotasPorRemetente($notas);

// //         return $notasAgrupadas;
// //     }

// //     private function agruparNotasPorRemetente($notas)
// //     {
// //         // Lógica para agrupar as notas por remetente
// //         // ...

// //         return $notasAgrupadas;
// //     }
// // }

//<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class NotasRemetenteModel extends Model
{
    public function groupNotesBySender($nomeRemetente)
    {
        $response = Http::get('http://homologacao3.azapfy.com.br/api/ps/notas');
        $notas = $response->json();
        $notasAgrupadas = [];
    
        foreach ($notas as $nota) {
         if ($nota['nome_remete'] == $nomeRemetente) {
                    $notasAgrupadas[] = $nota;
                }
            }
        return $notasAgrupadas;
        
    }

    // public function agruparNotasPorRemetente($notas, $nomeRemetente)
    // {
    //     $notasAgrupadas = [];

    //     foreach ($notas as $nota) {
    //         if ($nota['nome_remete'] == $nomeRemetente) {
    //             $notasAgrupadas[] = $nota;
    //         }
    //     }

    //     return $notasAgrupadas;
    // }
}

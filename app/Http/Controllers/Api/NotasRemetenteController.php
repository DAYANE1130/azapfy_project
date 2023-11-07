<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Adicionando a importação correta

class NotasRemetenteController extends Controller
{
    public function obterDadosDaAPI()
    {
        $response = Http::get('http://homologacao3.azapfy.com.br/api/ps/notas');
        $notas = $response->json();
        return $notas;
    }
}



// class ApiController extends Controller
// {
//     protected $apiService;

//     public function __construct(ApiService $apiService)
//     {
//         $this->apiService = $apiService;
//     }

//     public function getNotasAgrupadas()
//     {
//         $notasAgrupadas = $this->apiService->fetchAndGroupDataFromApi();

//         return response()->json([
//             'notas_agrupadas' => $notasAgrupadas
//         ], 200);
//     }
// }


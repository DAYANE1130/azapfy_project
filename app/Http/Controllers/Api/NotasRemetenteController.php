<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http; // Adicionando a importação correta

class NotasRemetenteController extends Controller
{
    public function obterDadosDaAPI()
    {
        $response = Http::get('http://homologacao3.azapfy.com.br/api/ps/notas');
        $notas = $response->json();

        return $notas;
        // return [];
    }
}

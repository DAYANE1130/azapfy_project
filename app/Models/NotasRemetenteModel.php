<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class NotasRemetenteModel extends Model
{
    public function getDataApi()
    {
        $response = Http::get('http://homologacao3.azapfy.com.br/api/ps/notas');

        if (!$response->successful()) {
            throw new \Exception('Não foi possível obter os dados da API externa.');
        }
        $notas = $response->json();
        return $notas;
        
    }

}

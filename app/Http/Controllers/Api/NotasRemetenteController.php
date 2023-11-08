<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\NotasRemetenteService;

class NotasRemetenteController extends Controller
{
    protected $apiService;

    public function __construct(NotasRemetenteService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function groupNotesBySender($nome_remetente)
{
    $notasAgrupadas = $this->apiService->groupNotesBySender($nome_remetente);

    return response()->json([
        'notas_agrupadas' => $notasAgrupadas
    ], 200);
}

}

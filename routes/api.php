<?php

use App\Http\Controllers\Api\NotasRemetenteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/notasRemetente/{nome_remetente}', [NotasRemetenteController::class, 'groupNotesBySender']);
Route::get('/notasRemetente/{nome_remetente}/calculateTotals', [NotasRemetenteController::class, 'calculateTotals']);
Route::get('/notasRemetente/{nome_remetente}/calculateDelivered', [NotasRemetenteController::class, 'calculateDelivered']);
// Route::get('/notasRemetente/{nome_remetente}/calcularNaoEntregue', [NotasRemetenteController::class, 'calcularNaoEntregue']);
// Route::get('/notasRemetente/{nome_remetente}/calcularAtraso', [NotasRemetenteController::class, 'calcularAtraso']);


Route::get('/', function () {
    return response()->json([
        'success' => true
    ]);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

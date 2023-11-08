<?php

use App\Http\Controllers\Api\NotasRemetenteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/notasRemetente/{nome_remetente}', [NotasRemetenteController::class, 'groupNotesBySender']);
Route::get('/notasRemetente/{nome_remetente}/calculateTotals', [NotasRemetenteController::class, 'calculateTotals']);
Route::get('/notasRemetente/{nome_remetente}/calculateDelivered', [NotasRemetenteController::class, 'calculateDelivered']);
Route::get('/notasRemetente/{nome_remetente}/calculateNotDelivered', [NotasRemetenteController::class, 'calculateNotDelivered']);
Route::get('/notasRemetente/{nome_remetente}/calculateDelay', [NotasRemetenteController::class, 'calculateDelay']);


Route::get('/', function () {
    return response()->json([
        'success' => true
    ]);
});



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\climaController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/cidade/{cidade}', function (string $cidade) {
    try {
        $clima = new climaController();
        $clima = $clima->verClima($cidade);
        return $clima;
    } catch (Exception $e) {
        return response()->json([
            'error' => 'Não foi possível infelizmente encontrar o clima da cidade informada.',
        ]);
    }
});

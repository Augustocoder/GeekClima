<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class climaController extends Controller
{
    public $id;
    public function puxarID($cidade)
    {
        return $this->id =  DB::table('cidades')
        ->where('cidade', '=', $cidade)
        ->get()
        ->first()
        ->id;
    }
    public function verClima($cidade)
    {
        $this->puxarID($cidade);
        $clima = file_get_contents('https://brasilapi.com.br/api/cptec/v1/clima/previsao/' . $this->id);
        $clima = json_decode($clima);
        return $clima;
    }
}

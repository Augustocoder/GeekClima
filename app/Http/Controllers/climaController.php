<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class climaController extends Controller
{
    public $id;
    public $cidade;

    public function puxarID($cidade)
    {
        $cidade = $this->cidade = $cidade;
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
        $getEmojiAtual = file_get_contents('https://wttr.in/' . $this->cidade . '?format=4');
        $getEmoji = explode(" ", $getEmojiAtual);
        $arrayWeather = [
            [
                "informacões" => json_decode($clima),
                "statusAtual" => $getEmoji[1],
                "temperatura" => $getEmoji[4],
                "vento" => $getEmoji[5],
            ],
        ];
        return $arrayWeather;
    }
}

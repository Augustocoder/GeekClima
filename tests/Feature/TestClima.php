<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestClima extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $request = file_put_contents("", '');
        $ch = curl_init();
        curl_setopt_array($ch,[
        CURLOPT_URL => 'https://www.4devs.com.br/ferramentas_online.php',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $request,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POSTFIELDS => 'acao=gerar_pessoa&sexo=I&pontuacao=S&idade=0&cep_estado=&txt_qtde=1&cep_cidade='
        ]);
        $response = curl_exec($ch);
        curl_close($ch);
        $cidade = json_decode($response,true);
        $generateCidade = $cidade[0]['cidade'];
        $response = $this->get('/{{$generateCidade}}');


        $response->assertStatus(200);
    }
}

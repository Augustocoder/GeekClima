<h1 align="center">
    🌥️ GeekClima 1.0 🌥️
</h1>
<div align="center">
    <img align="center" src="https://i0.wp.com/garotasnerds.com/wp-content/uploads/2018/05/arcoiris.gif" style="border-radius: 10px" height="300">
</div>

## Sobre o GeekClima
O GeekClima é um sistema que oferece uma API completa para consulta de previsões do tempo, utilizando dados do Centro de Previsão de Tempo e Estudos Climáticos (CPTEC). Através da integração com a CPTEC, o GeekClima garante previsões mais precisas e confiáveis para você.

## O que o GeekClima oferece:

-   **Precisão e Confiabilidade:** A integração com o CPTEC garante previsões do tempo precisas e confiáveis.
-   **Facilidade de Uso:** A API é simples de usar e integrar, tornando-a ideal para desenvolvedores de todos os níveis de experiência.
-   **Flexibilidade:** A API oferece diversas opções de consulta, permitindo que você personalize os dados de acordo com suas necessidades, caso tenha interesse espere sair novas atualizações do GeekClima ou consulte a documentação da CPTEC.
-   **Escalabilidade:** A API é escalável e pode ser utilizada em diversos tipos de projetos, desde pequenos websites até grandes aplicações empresariais.

## Requisitos

<div style="display:flex; flex-direction:column; font-weight:bold">
<a href="https://getcomposer.org/Composer-Setup.exe" style="font-size:16px; font-style:italic">Composer</a>
<a href="https://www.php.net/downloads.php" style="font-size:16px; font-style:italic">PHP</a>
<a href="https://dev.mysql.com/downloads/installer/" style="font-size:16px; font-style:italic">Banco de Dados</a>
</div>

## Instalação

```bash
    cd local_do_arquivo
```
```bash
    composer install
```
```bash
    php artisan serve // Inicia o servidor
```

## Configuração

Para que tudo esteja de perfeita forma, é necessário criar um arquivo .env, para isso, basta copiar o arquivo .env.example e renomear para .env, e alterar as informações de acordo com o seu banco de dados.

<span style="font-weight:bold">Não esqueça de importar o SQL no banco de dados, o arquivo se encontra na pasta "SQL"</span>

## Documentação da API

#### Retorna a previsão do tempo da cidade informada.

```http
  GET /cidade/${cidade}
```

| Parâmetro | Tipo     | Descrição                        |
| :-------- | :------- | :------------------------------- |
| `cidade`  | `string` | **Obrigatório**. Nome da cidade. |

### Exemplo:

```json
[
    {
        "informacões": {
            "cidade": "Altair",
            "estado": "SP",
            "atualizado_em": "2024-03-17",
            "clima": [
                {
                    "data": "2024-03-18",
                    "condicao": "pn",
                    "condicao_desc": "Parcialmente Nublado",
                    "min": 23,
                    "max": 35,
                    "indice_uv": 11
                }
            ]
        },
        "statusAtual": "☀️",
        "temperatura": "🌡️+24°C",
        "vento": "🌬️↖8km/h\n"
    }
]
```

## Suporte
Qualquer problemas ou algo do tipo, por favor, reportar que atualizo quanto antes!

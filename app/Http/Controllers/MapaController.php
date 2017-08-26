<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;

class MapaController extends Controller {

    public function __construct() {
        //Setando a posição de Poços de Caldas
        Mapper::map(-21.8093, -46.5835, ['zoom' => 13, 'center' => true, 'marker' => false]);
    }

    public function filtro($tipo = null) {
        //Separa os tipos de empresas
        switch ($tipo) {
            case "empresas":
                $this->porEmpresa(null);
                break;
            default :
                $this->criarMarcadores();
                break;
        }
        return view('index');
    }

    public function criarMarcadores() {
        $arq = file(base_path() . "/dados/latlon.csv");
        for ($i = 0; $i < sizeof($arq); $i++) {
            $data[] = str_getcsv($arq[$i], $delimiter = ',');
            if ($i == 0) {
                continue;
            }
            $lat = $data[$i][27];
            $lng = $data[$i][28];
            $cnpj = $data[$i][4];
            $fantasia = $data[$i][10] == "" ? $data[$i][15] : $data[$i][10];
            $fundacao = $data[$i][6];
            $telefone = $data[$i][20];
            $email = $data[$i][9];
            $area = $data[$i][24];
            $doc = $data[$i][26];

            $content = "<h6> $fantasia </h6></br>"
                    . "<b> CNPJ:</b> $cnpj</br>"
                    . "<b> Fundação: </b> $fundacao </br>";
            if ($telefone != "") {
                $content .= "<b>Telefone: </b> $telefone</br>";
            }
            $content .= "</br><button id = 'saibaMais' onClick = 'saibaMais()'> Saiba Mais </button>"
                       ."<div id='bloco' style='display: none'> "
                       ."<b> Email:</b> $email </br>"
                       . "<b> Area de Atuação: </b>  $area </br> "
                       . "</div>";

            Mapper::informationWindow($lat, $lng, $content);
        }
    }

    private function porEmpresa($empresas) {
        foreach ($empresas as $e) {
            Mapper::marker($e['lat'], $e['lng']);
        }
    }

    public function saibaMais($doc_) {
        $arq_ = file(base_path() . "/dados/latlon.csv");
        $empresa = [];
        //Procura empresa
        for ($i = 0; $i < sizeof($arq_); $i++) {
            $data[] = str_getcsv($arq_[$i], $delimiter = ',');
            if ($i == 0) {
                continue;
            }
            $doc = $data[$i][26];
            //echo "[$i]".$doc." - ".$doc_."</br>";
            if ($doc == $doc_) {
                //echo "entrou</br>";
                $nome = $data[$i][10] == "" ? $data[$i][15] : $data[$i][10];
                $endereco = $data[$i][11] . ", " . $data[$i][16] . " - " . $data[$i][1];
                $empresa = ['nome' => $nome, 'endereco' => $endereco,
                    'fundacao' => $data[$i][6], 'telefone' => $data[$i][20],
                    'email' => $data[$i][9], 'lat' => $data[$i][27], 'lng' => $data[$i][28],
                    'area' => $data[$i][24], 'cnpj' => $data[$i][4]];
                break;
            }
        }
        //echo "Achou</br>";
        //Marca empresas com a mesma area
        $arq = file(base_path() . "/dados/latlon.csv");
        for ($i = 0; $i < sizeof($arq); $i++) {
            $data[] = str_getcsv($arq[$i], $delimiter = ',');
            if ($i == 0) {
                continue;
            }

            $doc = $data[$i][26];
            echo "[$i]".$doc." - ".$doc_."</br>";
            echo "$arq[$i]<\br>";
            if ($doc_ == $doc) {
                echo "entrou</br>";
                Mapper::marker($empresa['lat'], $empresa['lng'], ['draggable' => false, 'icon' => 'https://support.xbox.com/Content/Images/live_status_active_icon.png']);
                continue;
            }
            $area = $data[$i][24];
            if ($area == $empresa['area']) {
                $lat = $data[$i][27];
                $lng = $data[$i][28];
                $cnpj = $data[$i][4];
                $fantasia = $data[$i][10] == "" ? $data[$i][15] : $data[$i][10];
                $fundacao = $data[$i][6];
                $telefone = $data[$i][20];
                $doc = $data[$i][26];

                $content = "<h4> $fantasia </h4></br>"
                        . "<b> CNPJ:</b> $cnpj</br>"
                        . "<b> Fundação: </b> $fundacao </br>";
                if ($telefone != "") {
                    $content .= "<b>Telefone: </b> $telefone</br>";
                }
                Mapper::informationWindow($lat, $lng, $content);
            }
        }
        return view('saibamais', $empresa);
    }

}

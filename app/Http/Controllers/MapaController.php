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
//        
//        foreach($arq as $line){
//            $data[] = str_getcsv($line, $delimiter = ';');
//        }
        for ($i = 0; $i < sizeof($arq); $i++) {
            $data[] = str_getcsv($arq[$i], $delimiter = ',');
            if ($i == 0) {
                continue;
            }
            $lat = $data[$i][27];
            $lng = $data[$i][28];
            $cnpj = $data[$i][4];
            $fantasia = $data[$i][10] == ""? $data[$i][15]: $data[$i][10];
            $fundacao = $data[$i][6];
            $telefone = $data[$i][20];
            $doc = $data[$i][26];
            
            $content = "<h6> $fantasia </h6></br>"
                      ."<b> CNPJ:</b> $cnpj</br>"
                      ."<b> Fundação: </b> $fundacao </br>";
            if($telefone != ""){
                $content .= "<b>Telefone: </b> $telefone</br>";
            }
            $content .= "</br><a href='/$doc'> Saiba Mais </a>";
            
            
            
            
            Mapper::informationWindow($lat, $lng, $content);
        }
    }

    private function porEmpresa($empresas) {
        foreach ($empresas as $e) {
            Mapper::marker($e['lat'], $e['lng']);
        }
    }

    public function teste() {
        //Mapper::marker(53.381128999999990000, -1.470085000000040000);
        //Mapper::marker(53.381128999999990000, -1.470085000000040000, ['symbol' => 'circle', 'scale' => 1000]);
        //Mapper::map(-21.4716, -46.3341);
        //Mapper::marker(-21.7883,-46.5625, ['markers' => ['symbol' => 'circle', 'scale' => 1000, 'animation' => 'DROP']]);
        Mapper::marker(-21.7883, -46.5625, ['icon' => 'https://d30fqisedfc4ds.cloudfront.net/rensupv1/images/rss-icon.png']);

        return view('map');
    }

}

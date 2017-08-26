<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use Collective\Html\HtmlFacade as Html;

class MapaController extends Controller {

    public function __construct() {
        //Setando a posição de Poços de Caldas
        Mapper::map(-21.7883, -46.5625, ['zoom' => 13, 'center' => true, 'marker' => false]);
        HTML::script('js/app.js');
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
        $arq = file(base_path()."/dados/latlon.csv");
//        
//        foreach($arq as $line){
//            $data[] = str_getcsv($line, $delimiter = ';');
//        }
        for($i=0; $i < sizeof($arq); $i++) {
            $data[] = str_getcsv($arq[$i], $delimiter = ';');
            if($i == 0) {
                continue;
            }
            Mapper::marker($data[$i][1], $data[$i][2], ['draggable' => true, 'eventRightClick' => "teste();"]);#(function(){alert('".$data[$i][0]."');})();
           # dd($data[$i]);
        }
        
        #dd($data);
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

<?php

namespace App\Http\Controllers;

use Charts;
use Mapper;

class MapaController extends Controller
{

    public function __construct()
    {
        //Setando a posição de Poços de Caldas
        Mapper::map(-21.8093, -46.5835, ['zoom' => 13, 'center' => true, 'marker' => false]);
    }

    public function filtro($tipo = null)
    {
        //Separa os tipos de empresas
        switch ($tipo) {
            case "empresas":
                $this->porEmpresa(null);
                break;
            default :
                $this->criarMarcadores();

                break;
        }
        $chartCapital = $this->graficoDeCapitalSocial();
        $chartBairros = $this->graficoDeBairros();
        $chartIdades = $this->graficoIdadeEmpresas();
        $chartEvolucao = $this->graficoEvolucaoNumeroEmpresas();
        $chartSetoresComercio = $this->graficoSetoresComercio();

        return view(
            'index',
            compact(
                'chartCapital',
                'chartBairros',
                'chartIdades',
                'chartEvolucao',
                'chartSetoresComercio'
            )
        );
    }

    public function criarMarcadores()
    {
        $arq = file(base_path()."/dados/latlon.csv");
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
            $fantasia = $data[$i][10] == "" ? $data[$i][15] : $data[$i][10];
            $fundacao = $data[$i][6];
            $telefone = $data[$i][20];
            $doc = $data[$i][26];

            $content = "<h6> $fantasia </h6></br>"
                ."<b> CNPJ:</b> $cnpj</br>"
                ."<b> Fundação: </b> $fundacao </br>";
            if ($telefone != "") {
                $content .= "<b>Telefone: </b> $telefone</br>";
            }
            $content .= "</br><a href='/$doc'> Saiba Mais </a>";


            Mapper::informationWindow($lat, $lng, $content);
        }
    }

    private function porEmpresa($empresas)
    {
        foreach ($empresas as $e) {
            Mapper::marker($e['lat'], $e['lng']);
        }
    }

    public function teste()
    {
        //Mapper::marker(53.381128999999990000, -1.470085000000040000);
        //Mapper::marker(53.381128999999990000, -1.470085000000040000, ['symbol' => 'circle', 'scale' => 1000]);
        //Mapper::map(-21.4716, -46.3341);
        //Mapper::marker(-21.7883,-46.5625, ['markers' => ['symbol' => 'circle', 'scale' => 1000, 'animation' => 'DROP']]);
        Mapper::marker(
            -21.7883,
            -46.5625,
            ['icon' => 'https://d30fqisedfc4ds.cloudfront.net/rensupv1/images/rss-icon.png']
        );

        return view('map');
    }

    private function graficoDeCapitalSocial()
    {
        return Charts::create('bar', 'highcharts')
            ->title('Frequencia de capital social declarada')
            ->labels(
                [
                    '0',
                    '0 - 5k',
                    '5k - 10k',
                    '10k - 20k',
                    '20k - 40k',
                    'mais de 40k',
                ]
            )
            ->elementLabel("Capital Inicial (%)")
            ->values([27.73, 12.16, 16.82, 13.60, 8.94, 15.92])
            ->colors(['#2ecc71']);
    }

    private function graficoDeBairros()
    {
        return Charts::create('pie', 'highcharts')
            ->title('Frequência de empresas nos 10 bairros com mais empresas')
            ->labels(
                [
                    'Parque Primavera',
                    'Vale das Antas',
                    'Vila Cruz',
                    'Dom Bosco',
                    'Jardim Quisisana',
                    'Jardim Country Club',
                    'Jardim dos Estados',
                    'Vila Cascata das Antas',
                    'Vila Nova',
                    'Centro',
                ]
            )
            ->values([8, 9, 9, 10, 10, 11, 12, 17, 24, 255]);
    }

    private function graficoIdadeEmpresas()
    {
        return Charts::create('bar', 'highcharts')
            ->title('Idades das Empresas')
            ->labels(
                [
                    '0 a 5 anos',
                    '6 a 10 anos',
                    '11 a 20 anos',
                    'mais de 20 anos',
                ]
            )
            ->values([29.16, 24.15, 20.04, 26.65])
            ->elementLabel("Percentual das Empresas")
            ->colors(['#8e44ad']);
    }

    private function graficoEvolucaoNumeroEmpresas()
    {
        return Charts::create('line', 'highcharts')
            ->title('Evolução no número de empresas')
            ->labels(
                [
                    1965,
                    1966,
                    1967,
                    1968,
                    1969,
                    1970,
                    1972,
                    1973,
                    1974,
                    1975,
                    1976,
                    1977,
                    1978,
                    1979,
                    1980,
                    1981,
                    1982,
                    1983,
                    1984,
                    1985,
                    1986,
                    1987,
                    1988,
                    1989,
                    1990,
                    1991,
                    1992,
                    1993,
                    1994,
                    1995,
                    1996,
                    1997,
                    1998,
                    1999,
                    2000,
                    2001,
                    2002,
                    2003,
                    2004,
                    2005,
                    2006,
                    2007,
                    2008,
                    2009,
                    2010,
                    2011,
                    2012,
                    2013,
                    2014,
                    2015,
                    2016,
                ]
            )
            ->values(
                [
                    1,
                    3,
                    1,
                    1,
                    2,
                    1,
                    2,
                    1,
                    4,
                    2,
                    2,
                    1,
                    1,
                    3,
                    1,
                    2,
                    5,
                    5,
                    1,
                    6,
                    7,
                    2,
                    8,
                    3,
                    8,
                    7,
                    9,
                    10,
                    8,
                    15,
                    15,
                    18,
                    10,
                    10,
                    8,
                    11,
                    10,
                    13,
                    13,
                    17,
                    16,
                    24,
                    19,
                    30,
                    36,
                    43,
                    33,
                    33,
                    24,
                    25,
                    28,
                ]
            );
    }

    private function graficoSetoresComercio()
    {
        return Charts::create('pie', 'highcharts')
            ->title('Principais setores no comércio')
            ->labels(
                [
                    "Comércio varejista de outros produtos não especificados anteriormente",
                    "Transporte rodoviário de carga, exceto produtos perigosos e mudanças, intermunicipal, interestadual e internacional",
                    "Comércio a varejo de peças e acessórios novos para veículos automotores",
                    "Bares e outros estabelecimentos especializados em servir bebidas",
                    "Restaurantes e similares",
                    "Comércio varejista de mercadorias em geral, com predominância de produtos alimentícios - minimercados, mercearias e armazéns",
                    "Lanchonetes, casas de chá, de sucos e similares",
                    "Comércio varejista de artigos do vestuário e acessórios",
                ]
            )
            ->values([6.976744, 7.692308, 9.302326, 10.196780, 15.026834, 15.384615, 17.173524, 37.745975]);
    }

}

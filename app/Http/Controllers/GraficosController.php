<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;

class GraficosController extends Controller {

    public function index1() {
        $chart = Charts::multi('bar', 'material')
                // Setup the chart settings
                ->title("Frequencia de capital social declarada")
                // A dimension of 0 means it will take 100% of the space
                ->dimensions(0, 400) // Width x Height
                // This defines a preset of colors already done:)
                ->template("material")
                // You could always set them manually
                // ->colors(['#2196F3', '#F44336', '#FFC107'])
                // Setup the diferent datasets (this is a multi chart)
                ->dataset('Element 1', [5, 20, 100])
                ->dataset('Element 2', [15, 30, 80])
                ->dataset('Element 3', [25, 10, 40])
                // Setup what the values mean
                ->labels(['One', 'Two', 'Three']);

        return view('grafico', ['chart' => $chart]);
    }

    public function index() {
        $chart = Charts::create('bar', 'material')
                ->title('Frequencia de capital social declarada')
                ->labels(['0  mil', '1-5 mil', '5-15 mil',
                           '15-25 mil', '25-35 mil','35-50 mil', 'mais de 50 mil'])
                ->elementLabel("Capital Inicial")
                ->values([220, 49, 89, 49, 25, 14, 66])
                ->dimensions(0, 400);
        return view('grafico', ['chart' => $chart]);
    }

}

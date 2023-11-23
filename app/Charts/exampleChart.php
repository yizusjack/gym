<?php

namespace App\Charts;

use App\Models\Score;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class exampleChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        
        $average = Score::
        selectRaw('gimnastas_id, AVG(difficulty_s) as averageD , AVG(execution_s) as averageE')
        ->where('approved', true)
        ->orderBy('gimnastas_id')
        ->groupBy('gimnastas_id')
        ->get();

        $gimnastas = Score::with('gimnastas')
        ->where('approved', true)
        ->orderBy('gimnastas_id')
        ->groupBy('gimnastas_id')
        ->get();

        $nombres = [];
        $difficulty = [];
        $execution = [];

        foreach($average as $avg){
            array_push($difficulty, $avg->averageD);
            array_push($execution, $avg->averageE);
        }

        foreach($gimnastas as $gimnasta){
            $cad = $gimnasta->gimnastas->nombre_g . ' ' . $gimnasta->gimnastas->apellido_g;
            array_push($nombres, $cad);
        }

        //dd($execution);
        
        $array = [40, 93, 35, 42, 80, 82];
        
        return $this->chart->lineChart()
            ->setTitle('Promedios de puntuaciones')
            ->setSubtitle('Dificultad vs ejecución')
            ->addData('Dificultad', $difficulty)
            ->addData('Ejecución', $execution)
            ->setXAxis($nombres);
    }
}

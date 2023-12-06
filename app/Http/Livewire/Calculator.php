<?php

namespace App\Http\Livewire;

use App\Models\Element;
use Livewire\Component;

class Calculator extends Component
{
    
    public $inputs;
    public $index;
    public $element;
    public $ar;

    //CR
    public $requirements;

    //Filters
    public $nameFilter;
    public $aliasFilter;
    public $valueFilter;

    //score
    public $dance;
    public $acro;
    public $dElements;
    public $aElements;
    public $cr;
    public $cv;
    public $dismount;
    public $finalScore;

    //show
    public $danceList;
    public $acroList;

    public $displayScore=false;
    
    public function mount(){
        $this->inputs = array();
        $this->inputs[0] = array('index'=>0);
        $this->index = 1;
        $this->element = [];
        $this->dance = array();
        $this->acro = array();
        $this->dElements = 0.0;
        $this->aElements = 0.0;
        $this->cv = 0.0;
        $this->cr = 0.0;
        $this->dismount = 0.0;
        $this->danceList = '';
        $this->acroList = '';
        $this->requirements = array();
        $this->finalScore = 0.0;
        //$this->displayScore = true;
    }

    public function addRow($index){
        $this->index = $index +1;
        array_push($this->inputs, array('index'=>0));
        //dd(array_keys($this->inputs));
        //$this->inputs[$index] = array();
    }

    public function removeRow($key){
        unset($this->inputs[$key]);
        unset($this->element[$key+1]);
    }

    public function addColumn($key){
        $this->inputs[$key]['index'] += 1;
        array_push($this->inputs[$key], $this->inputs[$key]['index']);
    }

    public function calculate(){
        //dd($this->requirements);
        foreach($this->requirements as $requirement){
            $this->cr += $requirement == '1' ? 0.5 : 0;
        }
        //dd($this->cr);
        $keys = array_keys($this->element);
		for($i = 0; $i < count($this->element); $i++) {
		    foreach($this->element[$keys[$i]] as $key => $value) {
                //dd(count($this->element[$keys[$i]]));
                switch ($value){
                    case(bool)preg_match('/[A-J]A[0-9]*/', $value):
                        array_push($this->acro, $value[0]);
                    break;
                    
                    case(bool)preg_match('/[A-E][DT][0-9]*/', $value):
                        array_push($this->dance, $value[0]);
                    break;

                    default:
                }

                if($key + 1 < count($this->element[$keys[$i]])){
                    //Direct acro connections

                    //A+D direct
                    if(preg_match('/[AB]A[0-9]*/', $value) && preg_match('/DA[0-9]*/', $this->element[$keys[$i]][$key + 1])){
                        $this->cv += 0.1;
                    }

                    //D+A direct
                    if(preg_match('/DA[0-9]*/', $value) && preg_match('/[AB]A[0-9]*/', $this->element[$keys[$i]][$key + 1])){
                        $this->cv += 0.1;
                    }

                    //C+C direct
                    if(preg_match('/CA[0-9]*/', $value) && preg_match('/CA[0-9]*/', $this->element[$keys[$i]][$key + 1])){
                        $this->cv += 0.1;
                    }

                    //A+E direct
                    if(preg_match('/[A-J]A[0-9]*/', $value) && preg_match('/[E-J]A[0-9]*/', $this->element[$keys[$i]][$key + 1])){
                        $this->cv += 0.2;
                    }

                    //E+A direct
                    if(preg_match('/[E-J]A[0-9]*/', $value) && preg_match('/[A-J]A[0-9]*/', $this->element[$keys[$i]][$key + 1])){
                        $this->cv += 0.2;
                    }

                    //C+D direct
                    if(preg_match('/[C-J]A[0-9]*/', $value) && preg_match('/DA[0-9]*/', $this->element[$keys[$i]][$key + 1])){
                        $this->cv += 0.2;
                    }

                    //D+C direct
                    if(preg_match('/DA[0-9]*/', $value) && preg_match('/[C-J]A[0-9]*/', $this->element[$keys[$i]][$key + 1])){
                        $this->cv += 0.2;
                    }

                    //Mixed connections
                    
                    //D+B mixed
                    if(preg_match('/DA[0-9]*/', $value) && preg_match('/BD[0-9]*/', $this->element[$keys[$i]][$key + 1])){
                        $this->cv += 0.1;
                    }

                    //E+A mixed
                    if(preg_match('/[E-J]A[0-9]*/', $value) && preg_match('/AD[0-9]*/', $this->element[$keys[$i]][$key + 1])){
                        $this->cv += 0.1;
                    }

                    //Turn connections

                    //D+B turn
                    if(preg_match('/[DE]T[0-9]*/', $value) && preg_match('/BT[0-9]*/', $this->element[$keys[$i]][$key + 1])){
                        $this->cv += 0.1;
                    }

                    //B+D turn
                    if(preg_match('/BT[0-9]*/', $value) && preg_match('/[DE]T[0-9]*/', $this->element[$keys[$i]][$key + 1])){
                        $this->cv += 0.1;
                    }
                }

                if($key + 2 < count($this->element[$keys[$i]])){

                    //dd('Indirecta');
                    //A+D indirect
                    if(preg_match('/[BC]A[0-9]*/', $value) && $this->element[$keys[$i]][$key + 1] == 'IN' && preg_match('/DA[0-9]*/', $this->element[$keys[$i]][$key + 2])){
                        $this->cv += 0.1;
                    }
    
                    //B+E indirect
                    if(preg_match('/BA[0-9]*/', $value) && $this->element[$keys[$i]][$key + 1] == 'IN' && preg_match('/[E-J]A[0-9]*/', $this->element[$keys[$i]][$key + 2])){
                        $this->cv += 0.1;
                    }
    
                    //C+E indirect
                    if(preg_match('/[C-J]A[0-9]*/', $value) && $this->element[$keys[$i]][$key + 1] == 'IN' && preg_match('/[E-J]A[0-9]*/', $this->element[$keys[$i]][$key + 2])){
                        $this->cv += 0.2;
                    }
    
                    if(preg_match('/[D-J]A[0-9]*/', $value) && $this->element[$keys[$i]][$key + 1] == 'IN' && preg_match('/DA[0-9]*/', $this->element[$keys[$i]][$key + 2])){
                        $this->cv += 0.2;
                    }
                }
    
                if($key + 3 < count($this->element[$keys[$i]])){
                    if(preg_match('/AA[0-9]*/', $value) &&  preg_match('/AA[0-9]*/', $this->element[$keys[$i]][$key + 1]) && $this->element[$keys[$i]][$key + 2] == 'IN' && preg_match('/DA[0-9]*/', $this->element[$keys[$i]][$key + 3])){
                        $this->cv += 0.1;
                    }
    
                    if(preg_match('/AA[0-9]*/', $value) &&  preg_match('/AA[0-9]*/', $this->element[$keys[$i]][$key + 1]) && $this->element[$keys[$i]][$key + 2] == 'IN' && preg_match('/[E-J]A[0-9]*/', $this->element[$keys[$i]][$key + 3])){
                        $this->cv += 0.2;
                    }
                }
		    }

		}

        //dd($this->cv);
       //dd(count($this->acro) + count($this->dance) >= 8 && count($this->acro) >= 3 && count($this->dance) >= 3);

        if(count($this->acro) + count($this->dance) >= 8 && count($this->acro) >= 3 && count($this->dance) >= 3){
            if($this->acro[count($this->acro) - 1] >= 'D'){
                $this->dismount += 0.2;
            }

            rsort($this->acro);
            rsort($this->dance);

            for($i = 0; $i<3; $i++){
                $this->aElements += (ord($this->acro[$i])-64)*0.10;
                $this->acroList = $i == 0 ? $this->acroList . $this->acro[$i] : $this->acroList . '+' . $this->acro[$i];
                $this->dElements += (ord($this->dance[$i])-64)*0.10;
                $this->danceList = $i == 0 ? $this->danceList . $this->dance[$i] : $this->danceList . '+' . $this->dance[$i];
            }

            $modD = 3;
            $modA = 3;

            for($i=0; $i<2; $i++){
                if(count($this->dance) <= 3){
                    $this->aElements += (ord($this->acro[$modA])-64)*0.10;
                    $this->acroList = $this->acroList . '+' . $this->acro[$modA];
                    $modA += 1;
                }
                elseif(count($this->acro) <= 3){
                    $this->dElements += (ord($this->dance[$modD])-64)*0.10;
                    $this->danceList = $this->danceList . '+' . $this->acro[$modD];
                    $modD += 1;
                }
                else{
                    if($this->acro[$modA] >= $this->dance[$modD]){
                        $this->aElements += (ord($this->acro[$modA])-64)*0.10;
                        $this->acroList = $this->acroList . '+' . $this->acro[$modA];
                        $modA += 1;
                    }
                    else{
                        $this->dElements += (ord($this->dance[$modD])-64)*0.10;
                        $this->danceList = $this->danceList . '+' . $this->acro[$modD];
                        $modD += 1;
                    }
                }
            }
            $this->finalScore = $this->aElements + $this->dElements + $this->dismount + $this->cv + $this->cr;
            $this->displayScore = true;
            //dd($this->finalScore);
            //return redirect ('calculator.calculatorShow');

            
        }
    } 
    
    public function render()
    {
        //dd(preg_match('/[A-J][DAT]/', 'AS'));
       
        $elements = Element::query()
        ->when($this->nameFilter, function($query){
            $query->where('name_el', 'like', '%' . $this->nameFilter . '%');
        })
        ->when($this->aliasFilter, function($query){
            $query->where('alias_el', 'like', '%' . $this->aliasFilter . '%');
        })
        ->when($this->valueFilter, function($query){
            $query->where('value_el', $this->valueFilter);
        })
        ->orderBy('category_el')
        ->get();

        return view('livewire.calculator', compact('elements'));
    }
}

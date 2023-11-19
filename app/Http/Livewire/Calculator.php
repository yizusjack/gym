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
    //Filters
    public $nameFilter;
    public $aliasFilter;
    public $valueFilter;

    //score
    public $dance;
    public $acro;
    public $dElements;
    public $aElements;
    public $cv;
    public $dismount;
    
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
        $this->dismount = 0.0;
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
        $keys = array_keys($this->element);
		for($i = 0; $i < count($this->element); $i++) {
		    foreach($this->element[$keys[$i]] as $key => $value) {
                //dd($value[0]);
                switch ($value){
                    case(bool)preg_match('/[A-J]A[0-9]*/', $value):
                        array_push($this->acro, $value[0]);
                    break;
                    
                    case(bool)preg_match('/[A-E][DT][0-9]*/', $value):
                        array_push($this->dance, $value[0]);
                    break;

                    default:
                }
		    }
		}
        //dd(count($this->acro) + count($this->dance) >= 8 && count($this->acro) >= 3 && count($this->dance) >= 3);

        if(count($this->acro) + count($this->dance) >= 8 && count($this->acro) >= 3 && count($this->dance) >= 3){
            if($this->acro[count($this->acro) - 1] >= 'D'){
                $this->dismount += 0.2;
                rsort($this->acro);
                rsort($this->dance);

                for($i = 0; $i<3; $i++){
                    $this->aElements += (ord($this->acro[$i])-64)*0.10;
                    $this->dElements += (ord($this->dance[$i])-64)*0.10;
                }

                $modD = 3;
                $modA = 3;

                for($i=0; $i<2; $i++){
                    if(count($this->dance) <= 3){
                        $this->aElements += (ord($this->acro[$modA])-64)*0.10;
                        $modA += 1;
                    }
                    elseif(count($this->acro) <= 3){
                        $this->dElements += (ord($this->dance[$modD])-64)*0.10;
                        $modD += 1;
                    }
                    else{
                        if($this->acro[$modA] >= $this->dance[$modD]){
                            $this->aElements += (ord($this->acro[$modA])-64)*0.10;
                            $modA += 1;
                        }
                        else{
                            $this->dElements += (ord($this->dance[$modD])-64)*0.10;
                            $modD += 1;
                        }
                    }
                }

                dd($this->dElements + $this->aElements + $this->dismount);

            }
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

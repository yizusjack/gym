<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    
    public $inputs;
    public $index;
    public $element;
    public $ar;
    
    public function mount(){
        $this->inputs = array();
        $this->inputs[0] = array('index'=>0);
        $this->index = 1;
        $this->element = [];
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
    
    public function render()
    {
       // dd($this->inputs);
        return view('livewire.calculator');
    }
}

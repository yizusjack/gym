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

<?php

namespace App\Http\Livewire;

use App\Models\Element;
use Livewire\Component;
use Livewire\WithPagination;

class Elements extends Component
{
    
    use WithPagination;
    
    public $nameFilter;
    public $aliasFilter;
    public $valueFilter;

    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
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
        ->paginate(9);

        return view('livewire.elements', compact('elements'));
        
    }
}

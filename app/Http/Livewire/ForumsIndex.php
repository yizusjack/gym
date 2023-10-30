<?php

namespace App\Http\Livewire;

use App\Models\Forum;
use Livewire\Component;

class ForumsIndex extends Component
{

    public $titleFilter;
    public $authorFilter;

    public function render()
    {
        
        $forums = Forum::query()
        ->when($this->titleFilter, function($query){
            $query->where('title', 'like', '%' . $this->titleFilter . '%');
        })->when($this->authorFilter, function ($query) {
            $query->whereHas('author', function ($subQuery) {
                $subQuery->where('name', 'like', '%' . $this->authorFilter . '%');
            });
        })->get();
        return view('livewire.forums-index', compact('forums'));
    }
}

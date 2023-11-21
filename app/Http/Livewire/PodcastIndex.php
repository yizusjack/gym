<?php

namespace App\Http\Livewire;

use App\Models\Podcast;
use Livewire\Component;
use Livewire\WithPagination;

class PodcastIndex extends Component
{
    use WithPagination;
    
    public $titleFilter;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $podcasts = Podcast::query()
        ->when($this->titleFilter, function($query){
            $query->where('title_p', 'like', '%' . $this->titleFilter . '%');
        })
        ->paginate(9);

        return view('livewire.podcast-index', compact('podcasts'));
    }
}

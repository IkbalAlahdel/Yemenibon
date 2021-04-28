<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Banner;
use App\Models\Category;

class LoadMoreProjectData extends Component
{
    public $limitPerPage = 3;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];
   
    public function loadMore()
    {
        $this->limitPerPage = $this->limitPerPage + 6;
    }
    public function render()
    {
        $projects = Project::paginate($this->limitPerPage);
        $this->emit('projectStore');
        return view('livewire.load-more-project-data', ['projects' => $projects]);
    }
}

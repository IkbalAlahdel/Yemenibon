<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Project;
use App\Models\Banner;
use App\Models\Category;

class Home extends Component
{
   
    public $perPage = 4;
    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    public function loadMore()
    {
        $this->perPage = $this->perPage + 4;
    }

    public function render()
    {
        $banners = Banner::select('banners.id','banners.image','banners.title','banners.title_ar','banners.desc','banners.desc_ar','banners.link')->get();
       $categories = Category::join('catatypes', 'catatypes.id', '=', 'categories.catatype_id')->select('categories.id','categories.name','categories.name_ar','categories.status','catatypes.type as catatype_type')->get();
       
    
        $projects = Project::latest()->paginate($this->perPage);
        $this->emit('projectStore');
        return view('livewire.home',['users' => $projects,'banners' => $banners,'categories' => $categories]);
    }
     
}

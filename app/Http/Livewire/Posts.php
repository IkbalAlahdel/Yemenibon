<?php


namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class Posts extends Component
{
    use WithPagination;

    public $search;
    public $postId,$name,$type,$status;
    public $isOpen = 0;

    public function render()
    {       
        $searchParams = '%'.$this->search.'%';
        return view('livewire.posts', [
            'posts' => Post::where('name','like', $searchParams)->latest()->paginate(5)
        ]);
    }

    public function showModal() {
        $this->isOpen = true;
    }

    public function hideModal() {
        $this->isOpen = false;
    }

    public function store(){
        $this->validate(
            [
                'name' => 'required',
                'type' => 'required',
            ]
        );

        Post::updateOrCreate(['id' => $this->postId], [
            'name' => $this->title,
            'type' => $this->description,
            'status' => $this->status

        ]);

        $this->hideModal();

        session()->flash('info', $this->postId ? 'Post Update Successfully' : 'Post Created Successfully' );

        $this->postId = '';
        $this->name = '';
        $this->type = '';
        $this->status = '';

    }

    public function edit($id){
        $post = Post::findOrFail($id);
        $this->postId = $id;
        $this->name = $post->name;
        $this->type = $post->type;
        $this->status = $post->status;

        $this->showModal();
    }

    public function delete($id){
        Post::find($id)->delete();
        session()->flash('delete','Post Successfully Deleted');
    }
}


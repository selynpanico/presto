<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    use WithFileUploads;
    public $images =[];
    public $title;
    public $body;
    public $price;
    public $category;
    public $image;
    public $temporary_images;
    public $announcement;
    public $validate;



    protected $rules = [
        'title'=>'required|min:4',
        'body'=>'required|min:20',
        'price'=>'required|numeric',
        'category'=>'required',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024'
    ];

    protected $messages = [
        'required'=>'Il campo :attribute è richiesto',
        'min'=>'Il campo :attribute è troppo corto',
        'numeric'=>'Il campo :attribute deve essere un numero',
        'image'=>'Il file deve essere di un file immagine',
        'max'=>'Il file deve essere grande al massimo 1024 kb',
        'temporary_images.required'=> "L'immagine è richiesta",
        'temporary_images.*.image'=> "I file devono essere img",
        'temporary_images.*.max'=> "L'immagine deve essere massimo di 1mb",
        'images.image'=>"L'immagine deve essere un'immagine",
        'images.max'=> "L'immagine deve essere un massimo di 1mb",
     ];

     public function updateTemporaryImages(){
         if($this->validate(['temporary_images.*'=>'image|max:1024'])){
             foreach($this->temporary_images as $image){
                 $this->images[] = $image;
             }
         }
     }
 
     public function removeImage($key){
         if(in_array($key, array_keys($this->images))){
             unset($this->images[$key]);
         }
     }
     
    public function store(){
        $this->validate();
        $this->announcement=
        Announcement::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,
            'category_id'=>$this->category,
            'user_id'=>Auth::id(),
        ]);

        if (count($this->images)){
            foreach ($this->images as $image) {
                $this->announcement->images()->create(['path'=>$image->store('images','public')]);
            }
        }
        
        session()->flash('message','Annuncio inserito correttamente');
        $this->cleanForm();

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm(){
        $this->title='';
        $this->body='';
        $this->price='';
        $this->category='';
        $this->images=[];
        $this->temporary_images=[];
    }


    public function render()
    {
        return view('livewire.create-announcement');
    }
}

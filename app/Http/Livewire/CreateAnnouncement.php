<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    use WithFileUploads;
  
   public $title;
   public $body;
   public $price;
   public $category;
   public $message;
   public $validated;
   public $temporary_images;
   public $images = [];
   public $image;
   public $announcement;
  


   

    protected $rules  = [
        'title' => 'required|min:6',
        'body' => 'required|min:8',
        'price' => 'required|numeric|min:1|not_in:0',
        'category' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',

    ];
    protected $messages  = [
        'required' => 'Il campo non può essere vuoto',
        'min' => 'Il campo :attribute è troppo corto',
        'numeric' => 'Il campo deve contenere un numero',
        'temporary_images.required' => "L'immagine è richiesta",
        'temporary_images.*.image' => "I file devono essere img",
        'temporary_images.*.max' => "L'immagine deve essere massimo di 1mb",
        'images.image' => "L'immagine deve essere un'immagine",
        'images.max' => "L'immagine deve essere un massimo di 1mb",
    
    ];


    public function updatedTemporaryImages()
    {
        if($this->validate([
            'temporary_images.*'=> 'image|max:1024',
            ])) {
                foreach ($this->temporary_images as $image) {
                    $this->images[] = $image;
                }
            }
        }
        
        public function removeImage($key)
        {
            if (in_array($key, array_keys($this->images))) {
                unset($this->images[$key]);
            }
        }
        
        
        
        
        public function store()
        {    
        $this->validate();
        $this->announcement= Announcement::create([
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

        if(count($this->images)){
           foreach ($this->images as $image) {
             $this->announcement->images()->create(['path'=>$image->store('images',  'public')]);
         }
       }

        
            session()->flash('message', 'Articolo inserito con successo, sarà pubblicato dopo la revisione');
            $this->cleanForm(); 

            return redirect()->to('/');

    

   }

   public function updated($propertyName)
   {
       $this->validateOnly($propertyName);
   }
   public function cleanForm()
   {
       $this->title = '';
       $this->body = '';
       $this->price = '';
       $this->category = '';
       $this->images = [];
       $this->temporary_images = [];
   }

   public function render()
{
    return view('livewire.create-announcement');
}
}

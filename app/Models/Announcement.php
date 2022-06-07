<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = ['title','body','price', 'category_id'];

    public function category(){
        $this->belongsTo(Category::class);
    }
}

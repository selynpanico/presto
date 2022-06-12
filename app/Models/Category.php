<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'icon'
    ];

    public function announcements(){
        return $this->hasMany(Announcement::class);
    }

    public static function MoreAnn(){
        $categories = Category::all();
        $moreAnn = [];
        foreach($categories as $category){
            $moreAnn[] = $category->announcements; 
        }
        rsort(count($moreAnn));
        dd($moreAnn);
    } 

}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    public function CreateAnnouncement(){
        return view('announcements.create'); 
    }

    public function show(Announcement $announcement){
        return view('announcements.show', compact('announcement'));
    }

    public function showCategory(Category $category){
        $category_id = $category->id;
        $category_name = $category->name;
        $announcements = Announcement::all()->where('category_id', $category_id);
        $announcements = Announcement::where('is_accepted', true);
        return view('announcements.show-category',compact('announcements', 'category_name'));
    }
}

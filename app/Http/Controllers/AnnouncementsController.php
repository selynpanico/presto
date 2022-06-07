<?php

namespace App\Http\Controllers;

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
}

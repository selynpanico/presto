<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    public function CreateAnnouncement(){
        return view('announcements.create'); 
    }
}

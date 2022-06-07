<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $announcements = Announcement::all();
        return view('welcome',compact('announcements'));
    }
}

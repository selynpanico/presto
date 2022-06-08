<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeAdvisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class PublicController extends Controller
{
    public function home(){
        $announcements = Announcement::take(10)->get()->sortByDesc('created_at');
        return view('welcome',compact('announcements'));
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:MakeUserRevisor',["email"=>$user->email]);
        return redirect()->route('home')->with('message',"Complimenti hai reso revisore l'utente");
    }
}

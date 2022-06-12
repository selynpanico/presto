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
        $announcements = Announcement::take(10)->where('is_accepted',true)->orderBy('created_at', 'desc')->get();
        return view('welcome',compact('announcements'));
    }
    public function profile(User $user){
        return view('auth.profile',compact('user'));
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:MakeUserRevisor',["email"=>$user->email]);
        return redirect()->route('home')->with('message',"Complimenti hai reso revisore l'utente");
    }

    public function allAnnouncement(){
        $announcements = Announcement::where('is_accepted', true)->paginate(9);
        return view('announcements.all_announcement', compact('announcements'));
    }

    public function ricercaAnnuncio(Request $request){
        $announcements=Announcement::search($request->searched)->where('is_accepted',true)->paginate(10);
        return view('announcements.index',compact('announcements'));
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }
}

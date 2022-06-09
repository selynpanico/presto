<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check = Announcement::where('is_accepted',NULL)->first();
        return view('revisor.revisor-panel', compact('announcement_to_check'));
    }
}

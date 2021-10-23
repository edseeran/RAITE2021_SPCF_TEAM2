<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
    if(Auth::user()->hasRole('admin')){
        return view ('admindash');
        
        }elseif(Auth::user()->hasRole('crew')){
        return view('crewdash');
        }
        {
        return DashboardController::all();
        }
    }
}

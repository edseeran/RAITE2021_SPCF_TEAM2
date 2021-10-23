<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    if(Auth::user()->hasRole('admin')){
        return view ('admin');
        }elseif(Auth::user()->hasRole('student')){
        return view('student');
        }
    }
}

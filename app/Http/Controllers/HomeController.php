<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homes =  home::all();

        return view("home.home" , compact("homes"));
    }
}

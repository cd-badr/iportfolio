<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $homes =  home::first();
        return view("admin.admin", compact("homes"));
    }

    public function show(home $homes)
    {
        

        return view("admin.admin", compact("homes"));
    }

    public function update(Request $request, home $homes)
    {
        request()->validate([
            "name" => "required",
            "age" => "required",
            
        ]);
        
        $homes->update([
            "name" => $request->name,
            "age" => $request->age,
            "birthday" => $request->birthday,
            "website" => $request->website,
            "phone" => $request->phone,
            "city" => $request->city,
            "degree" => $request->degree,
            "email" => $request->email,
            "freelance" => $request->freelance,
        ]);

        return redirect()->route("admin.index");
    }
}

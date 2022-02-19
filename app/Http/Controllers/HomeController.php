<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Worker;


class HomeController extends Controller
{
    //
     public function index(){
         return Inertia::render('create');
     }
     public function result(){

        return worker::all();
        // return response()->json(['data' => $data], 200);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class roomController extends Controller
{
    public function index(){
      return view('room.index');
    }

    public function room($slug){
      return view('room.room');
    }
}

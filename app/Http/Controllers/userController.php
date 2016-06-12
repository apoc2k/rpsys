<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class userController extends Controller
{
  public function index()
  {
    return view('user.home');
  }

  public function profile($slug)
  {
    $data = $this->getUserdata($slug);
    return view('user.profile', compact('data'));
  }

  private function getUserdata($slug){
    return User::whereSlug($slug)->first();
  }
}

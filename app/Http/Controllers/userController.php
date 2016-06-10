<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class userController extends Controller
{
  public function index()
  {
    return view('user.index');
  }

  public function profile($id)
  {
    $data = $this->getUserdata($id);
    return view('user.profile', array('data' => $data));
  }

  private function getUserdata($id){
    switch ($id) {
      case 1:
        $return = 'Paul';
        break;
      case 2:
        $return = 'Erwin';
        break;
      case 3:
        $return = 'Ruud';
        break;
      default:
        $return = 'Nothing';
      break;
    }
    return $return;
  }
}

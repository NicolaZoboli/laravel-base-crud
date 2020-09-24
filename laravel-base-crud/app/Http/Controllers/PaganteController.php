<?php

namespace App\Http\Controllers;

use App\Pagante;
use Illuminate\Http\Request;

class PaganteController extends Controller
{

  public function index() {

    $paganti = Pagante::all();

    var_dump($paganti); die();

    return view('paganti');
  }

}

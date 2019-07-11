<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maker;


class MakerController extends Controller
{
  public function index($id)
  {
    $maker = Maker::find($id);
    $shoesList = $maker->shoesList()->paginate(5);
    return view('maker',compact('maker', 'shoesList'));
  }
}

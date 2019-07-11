<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maker;

class MakerListController extends Controller
{
    public function index()
    {
      $maker_list = Maker::orderBy('order_no')->get();
      return view('makerlist',compact('maker_list'));
    }
}

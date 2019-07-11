<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Shoes;

class ShoesController extends Controller
{
    public function index($id)
    {
        $shoes = Shoes::find($id);
        $posts = $shoes->postList()->with('commentList', 'user')->paginate(5);

        return view('shoes',compact('shoes', 'posts'));
    }
}

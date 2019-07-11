<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Shoes;

class SearchController extends Controller
{

    public function index(Request $request)
    {
      $validate_rule = [
          'keyword' => 'required|max:20',
      ];
      $this->validate($request, $validate_rule);
      $keyword = $request->input('keyword');

      //シューズ名から検索
      $shoes = Shoes::where('name', 'like', '%'.$keyword.'%')->orderBy('name', 'asc')->paginate(5);

      return view('search', compact('keyword', 'shoes'));
    }
}

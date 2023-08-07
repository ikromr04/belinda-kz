<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Newslifestyle;
use App\Models\Product;
use App\Models\ReleaseForm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $data = Helper::getContents('home');
    $data['products'] = Product::latest()
      ->take(9)
      ->get();

    return view('pages.home.index', compact('data'));
  }

  public function search(Request $request)
  {
    $result['products'] = Product::select('title', 'slug')->where('title', 'like', '%' . $request->keyword . '%')->take(3)->get();
    $result['newslifestyles'] = Newslifestyle::select('title', 'slug')->where('title', 'like', '%' . $request->keyword . '%')->take(3)->get();

    $response = ['template' => view('layouts.search', compact('result'))->render()];

    return json_encode($response);
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use App\Http\Requests\StoreLocation;

class PostsController extends Controller
{
  public function create() {
    return view('posts.create');
  }

  public function store(Request $request) {
    //dd(request()->all());

    // $this->validate($request, [
    //   'caption' => 'required',
    //   'image' => 'required|image',
    // ]);

    $data = \Validator::make($request->all(), [
      'caption' => 'required',
      'image' => 'required|image',
    ]);

    if ($data->fails()) {
      return redirect()->back()
      ->withErrors($data)
      ->withInput();
    }

    echo "aaaaaaaa";

    dd(request()->all());
  }
}

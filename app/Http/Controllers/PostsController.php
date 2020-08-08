<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function create() {
    return view('posts.create');
  }

  public function store(Request $request) {
    $dataValidator = \Validator::make($request->all(), [
      'caption' => 'required|max:255',
      'image' => 'required|image',
    ]);

    if ($dataValidator->fails()) {
      return redirect()->back()
      ->withErrors($dataValidator)
      ->withInput();
    }

    $caption = $request['caption'];
    $imagePath = $request['image']->store('uploads', 'public');

    auth()->user()->posts()->create([
      'caption' => $caption,
      'image' => $imagePath
    ]);

    return redirect('/profile/'. auth()->user()->id);
  }
}

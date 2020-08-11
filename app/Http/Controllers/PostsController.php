<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class PostsController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function index() {
    $users = auth()->user()->following()->pluck('profiles.user_id');
    $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(10);

    return view('posts.index', compact('posts'));
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

    $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
    $image->save();

    auth()->user()->posts()->create([
      'caption' => $caption,
      'image' => $imagePath
    ]);

    return redirect('/profile/'. auth()->user()->id);
  }

  public function show(\App\Post $post) {
    return view('posts.show', compact('post'));
  }
}

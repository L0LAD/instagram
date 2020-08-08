<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ProfilesController extends Controller {
  public function index(User $user) {
    return view('profiles.index', compact('user'));
  }

  public function edit(User $user) {
    $this->authorize('update', $user->profile);
    return view('profiles.edit', compact('user'));
  }

  public function update(User $user, Request $request) {
    $this->authorize('update', $user->profile);

    $dataValidator = \Validator::make($request->all(), [
      'title' => 'required',
      'description' => '',
      'url' => '',
      'image' => 'image',
    ]);

    if ($dataValidator->fails()) {
      return redirect()->back()
      ->withErrors($dataValidator)
      ->withInput();
    }

    if ($request['image']) {
      $imagePath = $request['image']->store('profile', 'public');

      $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
      $image->save();
    }

    dd($request->all());

    auth()->user()->profile->update([
      'title' => $request['title'],
      'url' => $request['url'],
      'description' => $request['description']
    ]);

    return redirect("/profile/".$user->id);
  }

}

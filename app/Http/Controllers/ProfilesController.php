<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller {
  public function index(User $user) {
      return view('profiles.index', compact('user'));
  }

  public function edit(User $user) {
    return view('profiles.edit', compact('user'));
  }

  public function update(User $user, Request $request) {
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

    auth()->user()->profile->update([
      'title' => $request['title'],
      'url' => $request['url'],
      'description' => $request['description']
    ]);

    return redirect("/profile/".$user->id);
  }

}

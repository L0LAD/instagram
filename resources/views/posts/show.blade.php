@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card my-4">
    <div class="card-body">
      <div class="row">
        <div class="col-7">
          <img src="/storage/{{ $post->image}}" alt="/storage/{{ $post->title}}" class="image-post"/>
        </div>
        <div class="col-5">
          <div class="d-flex align-items-center">
            <img src="{{ $post->user->profile->profileImage() }}" class="image-circle image-profile-icon">
            <div class="d-flex">
              <h5><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></h5>
              <span class="px-2">&bull;</span>
              <a href="#" class="blue">Follow</a>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-2">
              <img src="{{ $post->user->profile->profileImage() }}" class="image-circle image-profile-comment">
            </div>
            <div clas="col-10">
              <p>
                <a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                <span>{{ $post->caption}}</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

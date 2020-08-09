@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card post-card m-5">
    <div class="card-body">
      <div class="row">
        <div class="col-8">
          <img src="/storage/{{ $post->image}}" alt="/storage/{{ $post->title}}" class="w-100"/>
        </div>
        <div class="col-4">
          <div class="d-flex align-items-center mb-3">
            <img src="/storage/{{ $post->user->profile->image }}" class="image-circle image-profile-icon">
            <h5 style="font-weight:bold">{{ $post->user->username }}</h5>
          </div>
          <hr />
          <p>{{ $post->caption}}</p>
        </div>
      </div>
    </div>
    </div>
  </div>

@endsection

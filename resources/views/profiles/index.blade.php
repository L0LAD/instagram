@extends('layouts.app')

@section('content')
<div class="container mb-5">
  <div class="row pt-5">
    <div class="col-md-3">
      <img src="/img/profile_travel.jpg" class="image-circle image-profile">
    </div>
    <div class="col-md-9 pt-5">
      <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{ $user->username }}</h1>
        <a href="/p/create">Add New Post</a>
      </div>
      <div class="d-flex">
        <div class="pl-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
        <div class="pl-5"><strong>1.8k</strong> followers</div>
        <div class="pl-5"><strong>212</strong> following</div>
      </div>
      <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
      <div>{{ $user->profile->description }}!</div>
      <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
    </div>
  </div>

  <div class="row">
    @foreach($user->posts as $post)
    <div class="col-sm-4">
      <a href="/p/{{ $post->id }}">
        <img class="pt-4 image-square" src="/storage/{{ $post->image }}"/>
      </a>
    </div>
    @endforeach
    <!-- <div class="col-sm-4">
    <img class="image-square" src="https://images.unsplash.com/photo-1595964270729-3877dc65f4de?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"/>
  </div>
  <div class="col-sm-4">
  <img class="image-square" src="https://images.pexels.com/photos/16715/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
</div>
<div class="col-sm-4">
<img class="image-square" src="https://images.unsplash.com/photo-1595538154519-bc102fd25a97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60"/>
</div> -->
</div>
</div>
@endsection

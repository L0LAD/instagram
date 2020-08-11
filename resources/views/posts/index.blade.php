@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      @foreach($posts as $post)
      <div class="card my-4">
        <div class="card-header d-flex align-items-center">
          <img src="{{ $post->user->profile->profileImage() }}" class="image-circle image-profile-icon">
          <h5><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></h5>
        </div>
        <div class="card-body m-0 p-0">
          <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image}}" alt="/storage/{{ $post->title}}" class="image-post"/></a>
        </div>
        <div class="card-footer">
          <p>
            <a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
            <span>{{ $post->caption}}</span>
          </p>
        </div>
      </div>
      @endforeach
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          {{ $posts->links('vendor/pagination/simple-bootstrap-4') }}
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

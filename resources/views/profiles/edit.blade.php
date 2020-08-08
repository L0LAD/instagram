@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1>Edit Profile</h1>
      <form class="form-horizontal" method="POST" action="/profile/{{ $user->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('patch') }}

        <div class="form-group row{{ $errors->has('caption') ? ' has-error' : '' }}">
          <label for="title" class="col-md-4 col-form-label">Title</label>
          <input id="title" type="text" class="form-control" name="title" value="{{ old('title') ?? $user->profile->title }}" required>

          @if ($errors->has('title'))
          <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
          </span>
          @endif
        </div>

        <div class="form-group row{{ $errors->has('description') ? ' has-error' : '' }}">
          <label for="description" class="col-md-4 col-form-label">Description</label>
          <input id="description" type="text" class="form-control" name="description" value="{{ old('description') ?? $user->profile->description }}">

          @if ($errors->has('description'))
          <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
          @endif
        </div>

        <div class="form-group row{{ $errors->has('url') ? ' has-error' : '' }}">
          <label for="url" class="col-md-4 col-form-label">URL</label>
          <input id="url" type="text" class="form-control" name="url" value="{{ old('url') ?? $user->profile->url }}">

          @if ($errors->has('url'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('url') }}</strong>
          </span>
          @endif
        </div>

        <div class="form-group row{{ $errors->has('image') ? ' has-error' : '' }}">
          <label for="image" class="col-md-4 col-form-label">Profile Image</label>
          <input id="image" type="file" class="form-control-file" name="image" value="{{ old('image') }}">

          @if ($errors->has('image'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('image') }}</strong>
          </span>
          @endif
        </div>

        <div class="row pt-4">
          <button class="btn btn-primary">Save Profile</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection

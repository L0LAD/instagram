@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1>Add New Post</h1>
      <form class="form-horizontal" method="POST" action="/p" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group row{{ $errors->has('caption') ? ' has-error' : '' }}">
          <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
          <input id="caption" type="text" class="form-control" name="caption" value="{{ old('caption') }}" required autofocus>

          @if ($errors->has('caption'))
          <span class="help-block">
            <strong>{{ $errors->first('caption') }}</strong>
          </span>
          @endif
        </div>

        <div class="form-group row{{ $errors->has('caption') ? ' has-error' : '' }}">
          <label for="image" class="col-md-4 col-form-label">Post Image</label>
          <input id="image" type="file" class="form-control-file" name="image" value="{{ old('caption') }}" required autofocus>

          @if ($errors->has('image'))
          <span class="help-block">
            <strong>{{ $errors->first('image') }}</strong>
          </span>
          @endif
        </div>

        <div class="row pt-4">
          <button class="btn btn-primary">Add New Post</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection

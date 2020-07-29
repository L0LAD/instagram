@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="row pt-5">
        <div class="col-md-3">
            <img src="img/profile_travel.jpg" class="rounded-circle" style="max-height: 200px; padding: 0 10%;">
        </div>
        <div class="col-md-9 pt-5">
            <div><h1>Globe_dreamer</h1></div>
            <div class="d-flex">
                <div class="pl-5"><strong>96</strong> posts</div>
                <div class="pl-5"><strong>1.8k</strong> followers</div>
                <div class="pl-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Travel & Adventure</div>
            <div>Hey everyone ! Welcome to my blog !</div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-sm-4"> 
            <a href="#" class="thumbnail">
                <div class="image-square">
                    <img src="https://images.unsplash.com/photo-1595964270729-3877dc65f4de?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="img img-responsive full-width"/>
                </div>
            </a>
        </div>
        <div class="col-sm-4"> 
            <a href="#" class="thumbnail">
                <div class="image-square">
                    <img src="https://images.unsplash.com/photo-1595857352614-a03b22f6916d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60" class="img img-responsive full-width"/>
                </div>
            </a>
        </div>
        <div class="col-sm-4"> 
            <a href="#" class="thumbnail">
                <div class="image-square">
                    <img src="https://images.unsplash.com/photo-1595538154519-bc102fd25a97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60" class="img img-responsive full-width"/>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection

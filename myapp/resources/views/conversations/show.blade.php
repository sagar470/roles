@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">




        <a>href="/conversations">back</a>

<p>
<h1>{{$conversation->title}}</h1>
    <p>class="text-muted">posted by {{$conversation->user->name}}</p>
<div>
    {{$conversation->body}}
</div>

    <hr>
    @include('conversations.replies')
            </p>

            </div>
        </div>
    </div>

@endsection

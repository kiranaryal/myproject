@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
        
            <img src="/storage/{{$post->image }}" class="w-100">

        </div>
        <div>
            <div class="d-flex align-items-center">
                <div class="p-3">
                    <img src="/storage/{{$post->user->profile->image }}" class="w-100 rounded-circle" style="max-width:40px" >
                </div>    
                <div>
                   <h3> <a href="/profile/{{$post->user->id}}"><span class="text-dark">{{$post->user->username}}</span></a></h3>
                </div>
                <div class="pl-2">
                <a href="">follow</a>
                </div>  

            </div>
                <hr>
                <div class="d-flex">
                <span class="pr-2"> <a href="/profile/{{$post->user->id}}"><span class="text-dark">{{$post->user->username}}</span></a></span><h4>{{ $post->caption}}</h4>
        </div>
        </div>

    </div>
    
</div>
@endsection

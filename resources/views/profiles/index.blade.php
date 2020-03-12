@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}"
             style="height:200px" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">

                <div class="d-flex text-align-center">
                    <div class="h1">{{$user->username}}
                    </div>
                <div>
            <follow-button user-id="{{$user->id}}" follows="{{ $follows }}"></follow-button>
            
            </div>
            
        </div>


            @can('update', $user->profile)
            <a href="/p/create">Add new posts</a>
            @endcan
            
     </div>
            
            @can('update',$user->profile)
            <a href="/profile/{{ $user->id }}/edit">edit profile</a>
            @endcan
     <div class="d-flex">
        <div class="pr-3"> <strong>{{$postscount }}</strong>posts</div>
        <div class="pr-3" > <strong>{{$followerscount }}</strong>followers </div>
        <div class="pr-3"> <strong>{{$followingcount }}</strong>following </div>
    </div>
         <div><strong> {{$user->profile->title}}</strong></div>
        <div>{{$user->profile->description}} </div>
        <div><a href="">{{$user->profile->url}}</a></div>
            
    </div>
    <div class="col-10 justify-content-center  ">
     @foreach($user->posts as $post)
     
           <a href="/p/{{$post->id}}" class=""> 
           <img src="/storage/{{ $post->image}}" style="height:300px;" ></a>
            
         
        
     @endforeach
        
     </div>
    
    </div>
</div>
@endsection

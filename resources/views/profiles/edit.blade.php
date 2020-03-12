@extends('layouts.app')

@section('content')
<div class="container">
@method('PATCH')

        
<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">
            <div class="row">
                <h1>edit posts</h1>
            </div>
            <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label ">post title</label>

                                
            <input id="title" type="text" 
            name="title"
            class="form-control @error('title') is-invalid @enderror" 
           value="{{ old('title') ?? $user->profile->title }}" 
             autocomplete="title" autofocus>

            @error('title')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                
      </div>
      
      <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label ">post description</label>

                                
            <input id="description" type="text" 
            name="description"
            class="form-control @error('description') is-invalid @enderror" 
           value="{{ old('description') ?? $user->profile->description}}" 
             autocomplete="description" autofocus>

            @error('description')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                
      </div>



      <div class="form-group row">
            <label for="url" class="col-md-4 col-form-label ">post url</label>

                                
            <input id="url" type="text" 
            name="url"
            class="form-control @error('url') is-invalid @enderror" 
           value="{{ old('url') ?? $user->profile->url }}" 
             autocomplete="url" autofocus>

            @error('url')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                
      </div>
      
      
      <div class="row">
      <label for="image" class="col-md-4 col-form-label ">profile image</label>
      <input  type="file" class="form-control-file" id="image" name="image" >
            @error('image')
              
                     <strong>{{ $message }}</strong>
                </span>
            @enderror

      </div>
      <div class="row">
          <button class="btn btn-primary">save profile</button>
      </div>
    </div>
</div> 
</form>
</div>

@endsection

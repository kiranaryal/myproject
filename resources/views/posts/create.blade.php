@extends('layouts.app')

@section('content')
<div class="container">

<form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
            <div class="row">
                <h1>ADD NEW POSTS</h1>
            </div>
            <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label ">post caption</label>

                                
            <input id="caption" type="text" 
            name="caption"
            class="form-control @error('caption') is-invalid @enderror" 
           value="{{ old('caption') }}" 
             autocomplete="caption" autofocus>

            @error('caption')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                
      </div><div class="row">
      <label for="image" class="col-md-4 col-form-label ">post image</label>
      <input  type="file" class="form-control-file" id="image" name="image" >
            @error('image')
              
                     <strong>{{ $message }}</strong>
                </span>
            @enderror

      </div>
      <div class="row">
          <button class="btn btn-primary">add new posts</button>
      </div>
    </div>
</div> 
</form>
    
</div>
@endsection

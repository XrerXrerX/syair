@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Title</h1>
      </div>
      <div class="col-lg-8">


        <form method="post" action="/trex1diath/dashboard/admin/{{ $post->id }}" class="mb-5" >
          @method('put')
          @csrf
            

            <div class="mb-3">
              <label for="title" class="form-label">title depan</label>
 

              <input id="title" type="hidden" name="title" value="{{ old('title',$post->title) }}">
              <trix-editor input="title"></trix-editor>
              @error('title')
              <p class="text-danger">{{ $message }}</p>
             @enderror
            </div>

            <div class="mb-3">
              <label for="body" class="form-label">Body Detail Dalam Post</label>
 

              <input id="body" type="hidden" name="body" value="{{ old('body',$post->body) }}">
              <trix-editor input="body"></trix-editor>
              @error('body')
              <p class="text-danger">{{ $message }}</p>
             @enderror
            </div>

          
          
            <button type="submit" class="btn btn-primary">Edit  Title</button>
          </form>
      </div>
   
@endsection
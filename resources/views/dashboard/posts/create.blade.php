@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new post</h1>
      </div>
      <div class="col-lg-8">

          <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
            @csrf

            <div class="mb-1">
              <label for="pasaran" class="form-label">Tanggal Post</label>
              <select class="form-select" id="pasaran" name="pasaran_id">
                <option selected>Pilih Tanggal </option>
                <option value="{{ \Carbon\Carbon::now()->format('d F Y') }}">{{ \Carbon\Carbon::now()->format('d F Y') }}</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(1)->format('d F Y') }}" >{{ \Carbon\Carbon::now()->addDays(1)->format('d F Y') }}</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(2)->format('d F Y') }}" >{{ \Carbon\Carbon::now()->addDays(2)->format('d F Y') }}</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(3)->format('d F Y') }}" >{{ \Carbon\Carbon::now()->addDays(3)->format('d F Y') }}</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(4)->format('d F Y') }}" >{{ \Carbon\Carbon::now()->addDays(4)->format('d F Y') }}</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(5)->format('d F Y') }}" >{{ \Carbon\Carbon::now()->addDays(5)->format('d F Y') }}</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(6)->format('d F Y') }}" >{{ \Carbon\Carbon::now()->addDays(6)->format('d F Y') }}</option>

              </select>            
            </div>


            {{-- <div class="mb-3">
              <label for="pasaran" class="form-label">Nama pasaran</label>
              <select class="form-select" id="pasaran" name="pasaran_id">
                <option selected>Pilih Tanggal </option>
                @foreach ($pasarans as $pasaran)
                    @if(old('category_id') == $pasaran->id)
                <option value="{{ $pasaran->id }}" selected>{{ $pasaran->name }}</option>
                @else 
                <option value="{{ $pasaran->id }}">{{ $pasaran->name }}</option>
                @endif
                @endforeach
              </select>            
            </div> --}}

            {{-- <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
              @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror 
            </div>--}}
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"  required value="{{ old('slug') }}">
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            {{-- <div class="mb-3">
              <label for="category" class="form-label">category</label>
              <select class="form-select" id="category" name="category_id">
                <option selected>Pilih category</option>
                @foreach ($categories as $category)
                    @if(old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else 
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
              </select>            
            </div> --}}

            
            <div class="mb-3">
              <label for="image" class="form-label">Post Image</label>
              <img src="" alt="" class="img-preview img-fluid mb-3 col-sm-5">
              <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
              @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="body" class="form-label">Body</label>
 

              <input id="body" type="hidden" name="body" value="{{ old('body') }}">
              <trix-editor input="body"></trix-editor>
              @error('body')
              <p class="text-danger">{{ $message }}</p>
             @enderror
            </div>
          
            <button type="submit" class="btn btn-primary">Create post</button>
          </form>
      </div>
    <script>
      const title = document.querySelector('#title');
      const slug = document.querySelector('#slug');

      title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
      });




      function previewImage(){

      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display ='block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src= oFREvent.target.result;
      }
    }
    </script>
@endsection
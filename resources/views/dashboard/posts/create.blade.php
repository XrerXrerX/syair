@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new post</h1>
      </div>
      <div class="col-lg-8">

          <form method="post" action="/trex1diath/dashboard/posts" class="mb-5" enctype="multipart/form-data">
            @csrf
            

            <div class="mb-3">
              <label fsor="nm_pasar" class="form-label">Nama pasaran</label>
              <select class="form-select" id="nm_pasar" name="nm_pasar">
                <option selected>Pilih Pasaran </option>
                @foreach ($pasarans as $pasaran)
                    @if(old('category_id') == $pasaran->id)
                <option value="{{ $pasaran->name }}" selected>{{ $pasaran->name }}</option>
                @else 
                <option value="{{ $pasaran->name }}">{{ $pasaran->name }}</option>
                @endif
                @endforeach
              </select>            
            </div>

            <div class="mb-1">
              <label for="datepost" class="form-label">Tanggal Post</label>
              <select class="form-select" id="datepost" name="datepost">
                <option selected>Pilih Tanggal </option>
                <option value="{{ \Carbon\Carbon::now()->format('Y-m-d H:i:s') }}">{{ \Carbon\Carbon::now()->format('d F Y') }}</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(1)->format('Y-m-d H:i:s') }}" >{{ \Carbon\Carbon::now()->addDays(1)->format('d F Y') }}</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(2)->format('Y-m-d H:i:s') }}" >{{ \Carbon\Carbon::now()->addDays(2)->format('d F Y') }}</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(3)->format('Y-m-d H:i:s') }}" >{{ \Carbon\Carbon::now()->addDays(3)->format('d F Y') }}</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(4)->format('Y-m-d H:i:s') }}" >{{ \Carbon\Carbon::now()->addDays(4)->format('d F Y') }}</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(5)->format('Y-m-d H:i:s') }}" >{{ \Carbon\Carbon::now()->addDays(5)->format('d F Y') }}</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(6)->format('Y-m-d H:i:s') }}" >{{ \Carbon\Carbon::now()->addDays(6)->format('d F Y') }}</option>

              </select>            
            </div>




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
              <label for="slug" class="form-label" style="display: ">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"  required value="{{ old('slug') }}" style="display: " readonly>
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
              <label for="artaimage" class="form-label d-flex justify-content-center">Gambar ARTA</label>
              <img src="" alt="" class="artaPreview img-fluid d-block mx-auto mb-3 col-sm-2">
              <input class="form-control @error('artaimage') is-invalid @enderror"  type="file" id="artaimage" name="artaimage" onchange="previewimage()">
              @error('artaimage')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="arwanaimage" class="form-label d-flex justify-content-center">Gambar ARWANA</label>
              <img src="" alt="" class="arwanaPreview img-fluid mb-3 col-sm-2 d-block mx-auto">
              <input  class="form-control @error('arwanaimage') is-invalid @enderror"  type="file" id="arwanaimage" name="arwanaimage" onchange="previewimage()">
              @error('arwanaimage')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="doyanimage" class="form-label d-flex justify-content-center">Gambar DOYAN</label>
              <img src="" alt="" class="doyanPreview img-fluid mb-3 col-sm-2 mx-auto
              ">
              <input  class="form-control @error('doyanimage') is-invalid @enderror"  type="file" id="doyanimage" name="doyanimage" onchange="previewimage()">
              @error('doyanimage')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="duoimage" class="form-label d-flex justify-content-center">Gambar DUOGAMING</label>
              <img src="" alt="" class="duoPreview img-fluid mb-3 col-sm-2 mx-auto
              ">
              <input  class="form-control @error('duoimage') is-invalid @enderror"  type="file" id="duoimage" name="duoimage" onchange="previewimage()">
              @error('duoimage')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="jeepimage" class="form-label d-flex justify-content-center">Gambar JEEP</label>
              <img src="" alt="" class="jeepPreview img-fluid mb-3 col-sm-2 mx-auto
              ">
              <input  class="form-control @error('jeepimage') is-invalid @enderror"  type="file" id="jeepimage" name="jeepimage" onchange="previewimage()">
              @error('jeepimage')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="neonimage" class="form-label d-flex justify-content-center">Gambar NEON</label>
              <img src="" alt="" class="neonPreview img-fluid mb-3 col-sm-2 mx-auto
              ">
              <input  class="form-control @error('neonimage') is-invalid @enderror"  type="file" id="neonimage" name="neonimage" onchange="previewimage()">
              @error('neonimage')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="neroimage" class="form-label d-flex justify-content-center">Gambar NERO</label>
              <img src="" alt="" class="neroPreview img-fluid mb-3 col-sm-2 mx-auto
              ">
              <input  class="form-control @error('neroimage') is-invalid @enderror"  type="file" id="neroimage" name="neroimage" onchange="previewimage()">
              @error('neroimage')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>


            <div class="mb-3">
              <label for="romaimage" class="form-label d-flex justify-content-center">Gambar ROMA</label>
              <img src="" alt="" class="romaPreview img-fluid mb-3 col-sm-2 mx-auto
              ">
              <input  class="form-control @error('romaimage') is-invalid @enderror"  type="file" id="romaimage" name="romaimage" onchange="previewimage()">
              @error('romaimage')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="tokeimage" class="form-label d-flex justify-content-center">Gambar TOKE</label>
              <img src="" alt="" class="tokePreview img-fluid mb-3 col-sm-2 mx-auto
              ">
              <input  class="form-control @error('tokeimage') is-invalid @enderror"  type="file" id="tokeimage" name="tokeimage" onchange="previewimage()">
              @error('tokeimage')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="zaraimage" class="form-label d-flex justify-content-center">Gambar ZARA</label>
              <img src="" alt="" class="zaraPreview img-fluid mb-3 col-sm-2 mx-auto
              ">
              <input  class="form-control @error('zaraimage') is-invalid @enderror"  type="file" id="zaraimage" name="zaraimage" onchange="previewimage()">
              @error('zaraimage')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="tsimage" class="form-label d-flex justify-content-center">Gambar TS</label>
              <img src="" alt="" class="tsPreview img-fluid mb-3 col-sm-2 mx-auto
              ">
              <input  class="form-control @error('tsimage') is-invalid @enderror"  type="file" id="tsimage" name="tsimage" onchange="previewimage()">
              @error('tsimage')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

          
          
            <button type="submit" class="btn btn-primary">Create post</button>
          </form>
      </div>
    <script>
      const datepost = document.querySelector('#datepost');
      const slug = document.querySelector('#slug');

      datepost.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?datepost=' + datepost.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
      });




      function previewimage(){

      const artaimage = document.querySelector('#artaimage');
      const artaPreview = document.querySelector('.artaPreview');
      const arwanaimage = document.querySelector('#arwanaimage');
      const arwanaPreview = document.querySelector('.arwanaPreview');
      const doyanimage = document.querySelector('#doyanimage');
      const doyanPreview = document.querySelector('.doyanPreview');
      const duoimage = document.querySelector('#duoimage');
      const duoPreview = document.querySelector('.duoPreview');
      const jeepimage = document.querySelector('#jeepimage');
      const jeepPreview = document.querySelector('.jeepPreview');
      const neonimage = document.querySelector('#neonimage');
      const neonPreview = document.querySelector('.neonPreview');
      const neroimage = document.querySelector('#neroimage');
      const neroPreview = document.querySelector('.neroPreview');
      const romaimage = document.querySelector('#romaimage');
      const romaPreview = document.querySelector('.romaPreview');
      const tokeimage = document.querySelector('#tokeimage');
      const tokePreview = document.querySelector('.tokePreview');
      const zaraimage = document.querySelector('#zaraimage');
      const zaraPreview = document.querySelector('.zaraPreview');
      const tsimage = document.querySelector('#tsimage');
      const tsPreview = document.querySelector('.tsPreview');


      if (artaimage.files && artaimage.files[0]) {
        artaPreview.style.display ='block';
    const reader = new FileReader();
    reader.onload = function(e) {
      artaPreview.src = e.target.result;
    }
    reader.readAsDataURL(artaimage.files[0]);
  }
  if (arwanaimage.files && arwanaimage.files[0]) {
    arwanaPreview.style.display ='block';
    const reader = new FileReader();
    reader.onload = function(e) {
      arwanaPreview.src = e.target.result;
    }
    reader.readAsDataURL(arwanaimage.files[0]);
  }

  if (doyanimage.files && doyanimage.files[0]) {
    doyanPreview.style.display ='block';
    const reader = new FileReader();
    reader.onload = function(e) {
      doyanPreview.src = e.target.result;
    }
    reader.readAsDataURL(doyanimage.files[0]);
  }

  if (duoimage.files && duoimage.files[0]) {
    duoPreview.style.display ='block';
    const reader = new FileReader();
    reader.onload = function(e) {
      duoPreview.src = e.target.result;
    }
    reader.readAsDataURL(duoimage.files[0]);
  }
  if (jeepimage.files && jeepimage.files[0]) {
    jeepPreview.style.display ='block';
    const reader = new FileReader();
    reader.onload = function(e) {
      jeepPreview.src = e.target.result;
    }
    reader.readAsDataURL(jeepimage.files[0]);
  }

  if (neonimage.files && neonimage.files[0]) {
    neonPreview.style.display ='block';
    const reader = new FileReader();
    reader.onload = function(e) {
      neonPreview.src = e.target.result;
    }
    reader.readAsDataURL(neonimage.files[0]);
  }

  if (neroimage.files && neroimage.files[0]) {
    neroPreview.style.display ='block';
    const reader = new FileReader();
    reader.onload = function(e) {
      neroPreview.src = e.target.result;
    }
    reader.readAsDataURL(neroimage.files[0]);
  }

  if (romaimage.files && romaimage.files[0]) {
    romaPreview.style.display ='block';
    const reader = new FileReader();
    reader.onload = function(e) {
      romaPreview.src = e.target.result;
    }
    reader.readAsDataURL(romaimage.files[0]);
  }

  if (tokeimage.files && tokeimage.files[0]) {
    tokePreview.style.display ='block';
    const reader = new FileReader();
    reader.onload = function(e) {
      tokePreview.src = e.target.result;
    }
    reader.readAsDataURL(tokeimage.files[0]);
  }


if (zaraimage.files && zaraimage.files[0]) {
    zaraPreview.style.display ='block';
    const reader = new FileReader();
    reader.onload = function(e) {
      zaraPreview.src = e.target.result;
    }
    reader.readAsDataURL(zaraimage.files[0]);
  }

  if (tsimage.files && tsimage.files[0]) {
    tsPreview.style.display ='block';
    const reader = new FileReader();
    reader.onload = function(e) {
      tsPreview.src = e.target.result;
    }
    reader.readAsDataURL(tsimage.files[0]);
  }
}

    </script>
@endsection
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">My Posts</h1>
  </div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8">
  {{ session('success') }}
</div>
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

  <div class="table-responsive col-md-12">
    <a href="/trex1diath/dashboard/posts/create" class="btn btn-primary">Create new Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Pasaran</th>
          <th scope="col">Tanggal Post</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
            
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->nm_pasar }}</td>
          <td>{{ $post->datepost }}</td>
          <td>
              {{-- <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye" class="align-text-bottom"></span></a> --}}
              <a href="/trex1diath/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom">edit</span></a>

              <form action="/trex1diath/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('are you sure ?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
              </form>
        </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  <div class="d-flex justify-content-end fixed">
    {{ $posts->links() }}
    </div>
@endsection
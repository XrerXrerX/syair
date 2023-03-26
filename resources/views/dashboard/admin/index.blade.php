@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Khusus Post Admin</h1>
  </div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8">
  {{ session('success') }}
</div>
@endif


  <div class="table-responsive col-md-10">
    <table class="table table-striped table-sm">
      <thead>
        <tr style="text-align:center">
          <th scope="col" style="width:10%">#</th>
          <th scope="col" style="width:30%">title</th>
          <th scope="col" style="width:30%">body</th>
          <th scope="col" style="width:10%">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <tr style="text-align:center;vertical-align:middle">
          <td>1</td>
          <td>{{ $title->title }}</td>
          <td>{{ $title->body }}</td>
          <td>
              {{-- <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye" class="align-text-bottom"></span></a> --}}
              <a href="/trex1diath/dashboard/admin/{{ $title->id }}/edit" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span>edit</a>

        </td>
        </tr>


      </tbody>
    </table>
  </div>

@endsection
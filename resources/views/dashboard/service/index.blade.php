@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Service</h1>
 </div>

  @if(session()->has('success'))
  <div class="alert alert-primary col-lg-8" role="alert">
     {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-md-8">
    <a href="/dashboard/service/create" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah data</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col" width="50px">Icon</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($service as $s)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $s->icon }}</td>
          <td>{{ $s->name }}</td>
          <td>
            <a href="/dashboard/service/{{ $s->id }}" class="badge bg-primary"><i class="fa-regular fa-eye"></i></a>
            <a href="/dashboard/service/{{ $s->id }}/edit" class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <form action="/dashboard/service/{{ $s->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('anda yakin?')">
                <i class="fa-regular fa-trash" ></i>
                </button>
            </form>
         </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
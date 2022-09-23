
@extends('dashboard.layouts.main')

@section('container')

<div class="card" style="width: 18rem;">
    
    @if($service->icon)
    <img src="/../storage/{{ $service["icon"] }}" class="card-img-top card-icon" alt="{{ $service->name }}">
    @else
    <img src="https://source.unsplash.com/500x500?application" class="card-img-top card-icon" alt="{{ $service->name }}">
    @endif


    <div class="card-body">
      <h5 class="card-title">{{ $service["name"] }}</h5>
      <p class="card-text">{{ $service["description"] }}</p>
      <a href="/dashboard/service" class="btn btn-primary">Kembali</a>
      <a href="/dashboard/service/{{ $service->id }}/edit" class="btn btn-warning">Edit</a>
      <form action="/dashboard/service/{{ $service->id }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('anda yakin?')">
        <i class="fa-regular fa-trash" ></i>
        </button>
    </form>
    </div>
  </div>
@endsection
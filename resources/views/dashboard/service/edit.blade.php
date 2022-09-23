
@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Servis</h1>
 </div>

 <div class="col-lg-8">
    <form method="post" action="/dashboard/service/{{ $service->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="hidden" name="oldImage" value="{{ $service->image }}">
            @if($service->icon)
            <img class="img-preview img-fluid mb-3 col-sm-5 d-block" src="/../storage/{{ $service["icon"] }}">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5" src="">
            @endif
            <input class="form-control @error('icon') is-invalid @enderror " type="file" id="icon" name="icon" onchange="previewImage()">
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon" value="{{ old('icon', $service->icon) }}">
        </div> 
        <div class="mb-3">
            <label for="name" class="form-label">Nama Service</label>
            <input type="text" class="form-control @error('tittle') is-invalid @enderror" id="name" value="{{ old('name', $service->name) }}"  name="name">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div> 
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control @error('tittle') is-invalid @enderror" id="description"  name="description" value="{{ old('description', $service->description) }}">
        </div> 
        
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
 </div>

 <script>
    function previewImage(){
        const icon = document.querySelector('#icon');
        const iconPreview = document.querySelector('.img-preview');

        iconPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(icon.files[0]);

        oFReader.onload = function(oFREvent){
            iconPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection

@extends('backend.layouts.apps')
@section('title', 'Create-profile')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Create Post</h1>

   

    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" rows="4" id="deskripsi"></textarea>
            @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
            <label for="basicInput">Foto</label>
            <input type="file" class="form-control-file" id="image" name="foto" accept="image/*" onchange="previewImage(event)">
            <div id="imagePreview"></div>
            @error('foto')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

@endsection

@push('scripts')

<script>
    ClassicEditor
        .create(document.querySelector('#deskripsi'))
        .catch(error => {
            console.error(error);
        });

        function previewImage(event) {
        var reader = new FileReader(); // Membuat objek FileReader
        reader.onload = function() {
            var output = document.getElementById('imagePreview'); // Mendapatkan elemen output preview
            output.innerHTML = '<img src="' + reader.result + '" class="img-fluid mt-2" style="max-width: 200px;" />'; // Menampilkan gambar preview
        }
        reader.readAsDataURL(event.target.files[0]); // Membaca data gambar sebagai URL
    }
</script>
@endpush



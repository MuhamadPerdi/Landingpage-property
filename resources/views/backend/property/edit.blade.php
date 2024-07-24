@extends('backend.layouts.apps')



@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit property</div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('property.update', $property->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" title="title" value="{{ old('title', $property->title) }}" name="title"  autofocus>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" >{{ old('deskripsi', $property->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                           
                            <label for="foto">Foto</label>
                            <input id="imagePreview" type="file" class="form-control-file @error('foto') is-invalid @enderror" name="foto">
                            @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if ($property->foto)
                                <img src="{{ asset('storage/images/property/' . $property->foto) }}" alt="image" class="mt-2" style="max-width: 200px;">
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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


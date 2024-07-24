@extends('backend.layouts.apps')

@section('content')
@if(session('success'))
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Edit About</div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('about.update', $about->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" title="title" value="{{ old('title', $about->title) }}" name="title" autofocus>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" class="form-control auto-height @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="10">{{ old('deskripsi', $about->deskripsi ?? '') }} </textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input id="imagePreview" type="file" class="form-control-file @error('foto') is-invalid @enderror" name="foto" onchange="foto(event)">
                            @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                            <!-- Preview gambar jika sudah ada foto -->
                            @if ($about->foto)
                                <img src="{{ asset('storage/images/about/' . $about->foto) }}" alt="image" class="mt-2" style="max-width: 200px;">
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
function previewImage(event) {
    var reader = new FileReader(); // Membuat objek FileReader
    reader.onload = function() {
        var output = document.getElementById('imagePreview'); // Mendapatkan elemen output preview
        output.innerHTML = '<img src="' + reader.result + '" class="img-fluid mt-2" style="max-width: 200px;" />'; // Menampilkan gambar preview
    }
    reader.readAsDataURL(event.target.files[0]); // Membaca data gambar sebagai URL
}

            ClassicEditor
                .create(document.querySelector('#deskripsi'))
                .catch(error => {
                    console.error(error);
                });
        


function image(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function(){
        var imgElement = document.createElement('img');
        imgElement.src = reader.result;
        imgElement.alt = 'image';
        imgElement.style.maxWidth = '200px';
        imgElement.className = 'mt-2';
        var existingImage = document.querySelector('#image + img');
        if (existingImage) {
            existingImage.replaceWith(imgElement);
        } else {
            input.insertAdjacentElement('afterend', imgElement);
        }
    };
    reader.readAsDataURL(input.files[0]);
}


</script>
@endpush


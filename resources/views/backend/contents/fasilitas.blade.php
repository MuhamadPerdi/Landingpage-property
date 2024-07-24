@extends('backend.layouts.apps')

@section('content')
@if(session('success'))
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Edit Fasilitas</div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('fasilitas.update', $fasilitas->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title 1</label>
                            <input id="title" type="text" class="form-control @error('title1') is-invalid @enderror" title="title1" value="{{ old('title1', $fasilitas->title1) }}" name="title1" autofocus>
                            @error('title1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi1">Deskripsi 1</label>
                            <textarea id="deskripsi" class="form-control auto-height @error('deskripsi1') is-invalid @enderror" name="deskripsi1" rows="10">{{ old('deskripsi1', $fasilitas->deskripsi1 ?? '') }} </textarea>
                            @error('deskripsi1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Title 2</label>
                            <input id="title" type="text" class="form-control @error('title2') is-invalid @enderror" title="title2" value="{{ old('title2', $fasilitas->title2) }}" name="title2" autofocus>
                            @error('title2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi2">Deskripsi 2</label>
                            <textarea id="deskrips" class="form-control auto-height @error('deskripsi2') is-invalid @enderror" name="deskripsi2" rows="10">{{ old('deskripsi2', $fasilitas->deskripsi2 ?? '') }} </textarea>
                            @error('deskripsi2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title3">Title 3</label>
                            <input id="title" type="text" class="form-control @error('title3') is-invalid @enderror" title="title3" value="{{ old('title3', $fasilitas->title3) }}" name="title3" autofocus>
                            @error('title3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi3">Deskripsi 3</label>
                            <textarea id="deskrips" class="form-control auto-height @error('deskripsi3') is-invalid @enderror" name="deskripsi3" rows="10">{{ old('deskripsi3', $fasilitas->deskripsi3 ?? '') }} </textarea>
                            @error('deskripsi3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title4">Title 4</label>
                            <input id="title" type="text" class="form-control @error('title4') is-invalid @enderror" title="title4" value="{{ old('title4', $fasilitas->title4) }}" name="title4" autofocus>
                            @error('title4')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi4">Deskripsi 4</label>
                            <textarea id="deskripsi" class="form-control auto-height @error('deskripsi4') is-invalid @enderror" name="deskripsi4" rows="10">{{ old('deskripsi4', $fasilitas->deskripsi4 ?? '') }} </textarea>
                            @error('deskripsi4')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title5">Title 5</label>
                            <input id="title" type="text" class="form-control @error('title5') is-invalid @enderror" title="title5" value="{{ old('title5', $fasilitas->title5) }}" name="title5" autofocus>
                            @error('title5')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi5">Deskripsi 5</label>
                            <textarea id="deskripsi" class="form-control auto-height @error('deskripsi5') is-invalid @enderror" name="deskripsi5" rows="10">{{ old('deskripsi5', $fasilitas->deskripsi5 ?? '') }} </textarea>
                            @error('deskripsi5')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title6">Title 6</label>
                            <input id="title" type="text" class="form-control @error('title6') is-invalid @enderror" title="title6" value="{{ old('title6', $fasilitas->title6) }}" name="title6" autofocus>
                            @error('title6')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi6">Deskripsi 6</label>
                            <textarea id="deskripsi" class="form-control auto-height @error('deskripsi6') is-invalid @enderror" name="deskripsi6" rows="10">{{ old('deskripsi6', $fasilitas->deskripsi6 ?? '') }} </textarea>
                            @error('deskripsi6')
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
                            @if ($fasilitas->foto)
                                <img src="{{ asset('storage/images/fasilitas/' . $fasilitas->foto) }}" alt="image" class="mt-2" style="max-width: 200px;">
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


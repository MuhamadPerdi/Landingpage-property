

@extends('backend.layouts.apps')
  
@section('title', 'Home Product')
  
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Property</h1>
        <a href="{{ route('property.create') }}" class="btn btn-primary">Add Property</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover" id="dataTable">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($property->count() > 0)
                @foreach($property as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->deskripsi }}</td>
                        <td class="align-middle"> @if($rs->foto )
                            <img src="{{ asset('storage/images/property/' . $rs->foto) }}" alt="{{ $rs->title }}" class="img-thumbnail" style="width: 100px;">
                        @else
                            No photo
                        @endif
                                                    </td>
                                                   
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('property.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('property.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('property.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection

@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h1>Dokter</h1>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
          @if(Route::currentRouteName() == 'admin.dokter.index')
            <li class="breadcrumb-item active" aria-current="page">Dokter</li>
          @elseif(Route::currentRouteName() == 'admin.dokter.edit')
            <li class="breadcrumb-item"><a href="{{ route('admin.dokter.index') }}">Dokter</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Dokter</li>
          @endif
        </ol>
    </nav>

    <a href="{{ route('admin.dokter.create') }}" class="btn btn-primary">Tambah Data Dokter</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dokter as $dk)
                <tr>
                    <td>{{ $dk->name }}</td>
                    <td>{{ $dk->specialization }}</td>
                    <td>
                        <a href="{{ route('admin.dokter.edit', $dk->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.dokter.destroy', $dk->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

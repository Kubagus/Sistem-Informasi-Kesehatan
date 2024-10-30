@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h1>Edit User</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.dokter.index') }}">Dokter</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update User</li>
        </ol>
    </nav>
    <form action="{{ route('admin.dokter.update', $dokter->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="specialization">Spesialisasi</label>
            <input type="text" name="specialization" class="form-control" id="specialization" value="{{ $dokter->specialization }}" required>
        </div>


        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>
@endsection

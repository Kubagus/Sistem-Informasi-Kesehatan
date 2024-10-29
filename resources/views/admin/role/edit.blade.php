@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h1>Update Role</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.role.index') }}">role</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update Role</li>
        </ol>
    </nav>
    <form action="{{ route('admin.role.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $role->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="description" name="description" class="form-control" id="description" value="{{ $role->description }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Role</button>
    </form>
</div>
@endsection

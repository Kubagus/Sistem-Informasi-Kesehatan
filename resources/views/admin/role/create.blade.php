@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h1>Create New role</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.role.index') }}">role</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create User</li>
        </ol>
    </nav>
    <form action="{{ route('admin.role.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="description" name="description" class="form-control" id="description" placeholder="Enter description" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Role</button>
    </form>
</div>
@endsection

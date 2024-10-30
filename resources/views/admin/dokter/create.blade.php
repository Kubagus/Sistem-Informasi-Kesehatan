@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h1>Create New User</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.dokter.index') }}">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Dokter</li>
        </ol>
    </nav>
    <form action="{{ route('admin.dokter.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama</label>
            <select name="name" id="nama" class="form-control" required>
                @foreach($users as $user)
                @if ($user->role_id ==2)
                    
                    <option value="{{ $user->name}}">{{ $user->name }}</option>
                @endif
                @endforeach
            </select>
        </div>

          <div class="form-group">
            <label for="specialization">Specialization</label>
            <input type="text" name="specialization" class="form-control" id="name" placeholder="Enter name" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Doctor</button>
    </form>
</div>
@endsection

@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h1>Role</h1>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
          @if(Route::currentRouteName() == 'admin.role.index')
            <li class="breadcrumb-item active" aria-current="page">Role</li>
          @elseif(Route::currentRouteName() == 'admin.role.edit')
            <li class="breadcrumb-item"><a href="{{ route('admin.role.index') }}">Role</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Role</li>
          @endif
        </ol>
    </nav>

    <a href="{{ route('admin.role.create') }}" class="btn btn-primary">Add New Role</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($role as $roles)
                <tr>
                    <td>{{ $roles->name }}</td>
                    <td>{{ $roles->description }}</td>
                    <td>
                        <a href="{{ route('admin.role.edit', $roles->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.role.destroy', $roles->id) }}" method="POST" style="display:inline-block;">
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

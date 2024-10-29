@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h1>Welcome,{{ Auth::user()->name }}</h1>
    <p>Use the menu on the left to manage users, roles, and other data.</p>
</div>
@endsection

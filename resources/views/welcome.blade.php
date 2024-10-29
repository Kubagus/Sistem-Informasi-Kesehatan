@extends('layouts.master')

@section('content')
<div class="container">
    <!-- Hero Section -->
    <div class="jumbotron text-center" style="background-color: #f4f6f9;">
        <h1>Welcome to Our Medical Record System</h1>
        <p>Manage patients, records, and more efficiently</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
        <a href="#" class="btn btn-secondary btn-lg">Learn More</a>
    </div>

    <!-- Features Section -->
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <i class="fas fa-user-md fa-3x"></i>
                    <h3 class="card-title mt-3">For Doctors</h3>
                    <p class="card-text">Easily manage patient records and treatments.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <i class="fas fa-clipboard-list fa-3x"></i>
                    <h3 class="card-title mt-3">For Registration Staff</h3>
                    <p class="card-text">Register new patients and manage their information.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <i class="fas fa-user-shield fa-3x"></i>
                    <h3 class="card-title mt-3">For Admins</h3>
                    <p class="card-text">Control access, add new users, and monitor activities.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Section -->
    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h2>Why Choose Us?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent suscipit ultrices magna, nec volutpat ligula gravida nec.</p>
        </div>
    </div>
</div>
@endsection

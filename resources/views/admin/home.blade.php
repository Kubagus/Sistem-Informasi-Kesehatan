@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h1>Dashboard</h1>
    <div class="row">
        <!-- Total Users -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    {{-- <h3>{{ $totalUsers }}</h3> --}}
                    <h3>10</h3>
                    <p>Total Pasien</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ route('admin.users.index') }}" class="small-box-footer">
                    View <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Total Categories -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>10</h3>
                    <p>Total Pemeriksaan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-list"></i>
                </div>
                {{-- <a href="{{ route('categories.index') }}" class="small-box-footer">
                    View <i class="fas fa-arrow-circle-right"></i>
                </a> --}}
                <a href="#" class="small-box-footer">
                    View <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Total Products -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    {{-- <h3>{{ $totalProducts }}</h3> --}}
                    <h3>10</h3>
                    <p>Jadwal Dokter</p>
                </div>
                <div class="icon">
                    <i class="fas fa-box"></i>
                </div>
                <a href="#" class="small-box-footer">
                    View <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Total Collections -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>10</h3>
                    <p>Rawat Inap</p>
                </div>
                <div class="icon">
                    <i class="fas fa-file-pdf"></i>
                </div>
                <a href="#" class="small-box-footer">
                    View <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

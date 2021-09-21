@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <a class="guest-card shadow d-flex flex-column align-items-center my-2" href="{{ route('admin.company.index') }}">
                <i class="far fa-building"></i> 
                <p class="base-btn text-center" >Companies</p> 
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a class="guest-card shadow d-flex flex-column align-items-center my-2" href="{{ route('admin.dashboard') }}">
                <i class="far fa-user"></i>
                <p class="base-btn text-center" >Employees</p> 
            </a>
        </div>
    </div>
</div>
@endsection

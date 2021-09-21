@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5 mt-5">
                <a class="guest-card shadow d-flex flex-column align-items-center" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-user-shield"></i>  
                    <p class="base-btn text-center" >Admin area</p> 
                </a>
            </div>
        </div>
    </div>
@endsection

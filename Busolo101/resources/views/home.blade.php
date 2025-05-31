@extends('layouts.app')

@section('title', 'Welcome to My Portfolio')

@section('content')
<section class="hero text-center py-5">
    <h1>Hi, I'm [Your Name]</h1>
    <p class="lead">Web Developer & IT Specialist</p>
    <a href="{{ route('services') }}" class="btn btn-primary">Explore My Services</a>
</section>
<section class="features container mt-4">
    <div class="row">
        <div class="col-md-3">
            <i class="fas fa-laptop-code fa-2x"></i>
            <h5>Development</h5>
        </div>
        <div class="col-md-3">
            <i class="fas fa-database fa-2x"></i>
            <h5>APIs & Database</h5>
        </div>
        <div class="col-md-3">
            <i class="fas fa-user-shield fa-2x"></i>
            <h5>Security</h5>
        </div>
        <div class="col-md-3">
            <i class="fas fa-comments fa-2x"></i>
            <h5>Consulting</h5>
        </div>
    </div>
</section>
@endsection
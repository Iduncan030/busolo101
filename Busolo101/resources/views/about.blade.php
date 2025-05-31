@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<section class="container py-5">
    <h2>About Me</h2>
    <p>Experienced developer with a passion for building robust, scalable web applications... [your background here]</p>
    <ul>
        <li>Languages: PHP, JS, HTML, CSS</li>
        <li>Frameworks: Laravel, Vue.js</li>
        <li>Database: MySQL, PostgreSQL</li>
        <li>DevOps: Docker, Git</li>
        <li>Soft skills: Communication, Project Management</li>
    </ul>
    <a href="{{ route('portfolio') }}" class="btn btn-secondary">View My Work</a>
</section>
@endsection
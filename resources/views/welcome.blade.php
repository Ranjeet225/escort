@extends('layouts.main')

@section('title', 'Home Page')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection


@section('content')
    <h2>Welcome to the Home Page</h2>
    <p>This is the main content of the home page.</p>
@endsection

@section('js')
    <script src="{{ asset('assets/js/home.js') }}"></script>
@endsection

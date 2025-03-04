@extends('layouts.main')

@section('title', 'Dashboard Page')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@endsection


@section('content')
    <h2>Welcome to the Dashboard Page</h2>
    <p>This is the main content of the home page.</p>
@endsection

@section('js')
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endsection

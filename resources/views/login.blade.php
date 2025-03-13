<!-- resources/views/login.blade.php -->
@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container-fluid p-0 mt-5">
        <div class="d-flex justify-content-center align-items-center mb-5 w-auto h-100">
            <a href="/" class="d-flex justify-content-center align-items-center w-50"><img class="w-25" src="{{ asset('assets/logo.png') }}" alt="Logo"></a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action={{ route('authenticate') }} method="post">
            @csrf
            @include('components.form')
        </form>
        @include('footer')
    </div>
@endsection
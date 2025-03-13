<!-- resources/views/header.blade.php -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-dark custom-bg w-100">
        <div class="container-fluid">
            <a href="/"><img src="{{ asset('assets/logo.png') }}" alt="Logo" class="img-fluid icon-size mx-5"></a>
        </div>
        <form class="d-flex" action="{{ route('logout') }}" method="post">
            @csrf
            @if (empty($user))
            <a href="/login" class="btn btn-primary me-3">Login</a>
            <a href="/register" class="btn btn-primary me-2">Register</a>
            @else
            <p class="me-5">{{ $user }}</p>
            <button class="btn btn-danger me-3" type="submit">Logout</button>
            @endif
        </form>
    </nav>
</div>
<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container-fluid p-0">
        @include('header', ['user' => $user])

        @if (session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif

        <div class="d-flex flex-column justify-content-center align-items-center min-vh-100">
            <div class="d-flex h-25">
                <h1 class="mt-3">MyGames</h1>
                <p class="mt-3">Welcome {{ $user }} !</p>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center h-75 mt-5">
                <h5>The best games</h5>
                <div class="d-flex flex-wrap justify-content-center align-items-center w-100 my-3">
                    @foreach ($games as $game)
                        <div class="d-flex flex-column border rounded border-gray-300 p-2 m-3 align-items-center"
                            style="min-height: 500px; width: 300px; position: relative;">
                            <img src="{{ $game['image'] }}" alt="Game" class="img-fluid mb-3" style="max-height: 250px;">
                            <h5 class="text-center">{{ $game['title'] }}</h5>
                            <p class="text-center" style="position: absolute; bottom: 7.5rem;">Genre: {{ $game['genre'] }}</p>
                            <p class="text-center" style="position: absolute; bottom: 4.5rem;">Price: $ {{ $game['price'] }}</p>
                            <form class="d-flex align-items-center justify-content-center w-100"
                                style="position: absolute; bottom: .5rem;" action="{{ route('buyGames') }}" method="post">
                                @csrf
                                <input type="hidden" name="game_id" value="{{ $game->id }}">
                                @if(in_array($game->id, $myGames))
                                    <button class="btn btn-success w-75" type="button">Play</button>
                                @else
                                    <button class="btn btn-primary w-75" type="submit">Buy</button>
                                @endif
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('footer')
    </div>
@endsection
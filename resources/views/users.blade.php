@extends('layouts.app')

@section('content')
    <h1>{!! Auth::user()->name !!}</h1>
    <h4>お気に入り選手</h4>
    <ul class='list-unstyled list-inline'>
        @foreach ($players as $player)
            @include('cards.player_ranking', ['player' => $player])
        @endforeach
    </ul>
    
@endsection
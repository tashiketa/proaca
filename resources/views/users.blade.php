@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>{!! Auth::user()->name !!}</h1>
    </div>
    <h4>お気に入り選手</h4>
    @include('cards.player_ranking', ['players' => $players])
@endsection
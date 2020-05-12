@extends('layouts.app')

@section('content')
    <h1>{!! $team->name !!} 選手一覧</h1>
    
    @include('cards.player_team', ['players' => $players])
    
@endsection
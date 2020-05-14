@extends('layouts.app')

@section('content')
    <h1>ランキング</h1>
    <div class=''>
    <div class='row'>
        <div class='col-sm-2'>
            1位
        </div>
        <div class='col-sm-6'>
            @include('cards.player_ranking', ['player' => $player1])
        </div>
        <div class='col-sm-2'>
            {!! $player1->count() !!}票
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-2'>
            2位
        </div>
        <div class='col-sm-6'>
            @include('cards.player_ranking', ['player' => $player2])
        </div>
        <div class='col-sm-2'>
            {!! $player2->count() !!}票
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-2'>
            3位
        </div>
        <div class='col-sm-6'>
            @include('cards.player_ranking', ['player' => $player3])
        </div>
        <div class='col-sm-2'>
            {!! $player3->count() !!}票
        </div>
    </div>
    </div>
    
@endsection
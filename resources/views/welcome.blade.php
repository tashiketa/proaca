@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Proaca</h1>
        </div>
    </div>
    <div class="text-center">
        <p>アクセスいただきありがとうございます。</p>
        <p>このサイトでは、お気に入りのプロ野球選手を投票していただくことができます。</p>
        <p>あなたの力で、お気に入りの選手を人気１番に！</p>
    </div>
    </div>
    @if (Auth::check())
        <div class='container'>
        <div class="row">
            @include('cards.team', ['teams' => $teams])
        </div>
        </div>
    @else
        <div class="text-center">
            {!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    @endif
@endsection
@extends('layouts.app')

@section('content')
    <div class="center jumbotron" id='toppage-main'>
        <div class="text-center">
            <h1>Welcome to the Proaca</h1>
        </div>
    </div>
    <div class="text-center mt-4">
        <p>アクセスいただきありがとうございます。</p>
        <p>このサイトでは、お気に入りのプロ野球選手を投票していただくことができます。</p>
        <p>あなたの力で、お気に入りの選手を人気１番に！</p>
    </div>
    </div>
    @if (Auth::check())
            @include('cards.team', ['teams' => $teams])
    @else
        <div class="text-center mt-4">
            {!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    @endif
@endsection
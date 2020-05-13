<ul class='list-unstyled list-inline'>
    @foreach ($players as $player)
        <li class='media mb-3 list-inline-item'>
            <img src='/storage/players/{{ $player->team_id }}/{{ $player->photo }}'>
            <div class="media-body">
                <div>
                    {!! $player->number !!}
                </div>
                <div>
                    <p>{!! $player->name !!}</p>
                </div>
                @if (Auth::user()->is_favoriting($player->id))
                    {!! Form::open(['route' => ['user.unfavorite', $player->id], 'method' => 'delete']) !!}
                        {!! Form::submit('お気に入りを外す', ['class' => "btn btn-danger btn-block"]) !!}
                    {!! Form::close() !!}
                @else
                    {!! Form::open(['route' => ['user.favorite', $player->id]]) !!}
                        {!! Form::submit('お気に入りする', ['class' => "btn btn-primary btn-block"]) !!}
                    {!! Form::close() !!}
                @endif
            </div>
        </li>
    @endforeach
</ul>
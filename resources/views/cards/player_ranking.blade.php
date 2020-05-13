<ul class='list-unstyled list-inline'>
    @foreach ($players as $player)
        <li class='media mb-3 list-inline-item'>
            <img src='/storage/players/{{ $player->team_id }}/{{ $player->photo }}'>
            <div class="media-body">
                <div>
                    {!! \App\Team::find($player->team_id)->name !!}
                </div>
                <div>
                    {!! $player->number !!}
                </div>
                <div>
                    <p>{!! $player->name !!}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
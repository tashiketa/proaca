<ul class='list-unstyled list-inline'>
    @foreach ($teams as $team)
        <li class="media mb-3 mr-3 list-inline-item" id='card'>
            <img src='/storage/teams/{{ $team->emblem }}'>
            <div class="media-body">
                <div class='mt-4'>
                    <h5>{!! link_to_route('players', $team->name, ['id' => $team->id]) !!}</h5>
                </div>
                <div>
                    <p>{!! $team->home !!}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
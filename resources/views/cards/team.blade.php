<div class='container'>
<div class="row">
<ul class='list-unstyled list-group list-group-horizontal'>
    @foreach ($teams as $team)
        <li class="media mb-3 list-group-item">
            <div class="media-body">
                <div>
                    {!! link_to_route('players', $team->name, ['id' => $team->id]) !!}
                </div>
                <div>
                    <p>{!! $team->home !!}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
</div>
</div>
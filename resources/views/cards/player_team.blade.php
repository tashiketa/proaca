<ul class='list-unstyled list-group list-group-horizontal'>
    @foreach ($players as $player)
        <li class="media mb-3 list-group-item">
            <div class="media-body">
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
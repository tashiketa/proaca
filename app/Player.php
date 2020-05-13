<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name', 'photo', 'team_id', 'number',
    ];
    
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    
    public function favoriteds()
    {
        return $this->belongsToMany(User::class, 'favorites', 'player_id', 'user_id')->withTimestamps();
    }
}

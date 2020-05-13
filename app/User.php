<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function favorites()
    {
        return $this->belongsToMany(Player::class, 'favorites', 'user_id', 'player_id')->withTimestamps();
    }
    
    public function is_favoriting($playerId)
    {
        return $this->favorites()->where('player_id', $playerId)->exists();
    }
    
    public function favorite($playerId)
    {
        $exist = $this->is_favoriting($playerId);
        
        if ($exist) {
            return false;
        } else {
            $this->favorites()->attach($playerId);
            return true;
        }
    }
    
    public function unfavorite($playerId)
    {
        $exist = $this->is_favoriting($playerId);
        
        if ($exist) {
            $this->favorites()->detach($playerId);
            return true;
        } else {
            return false;
        }
    }
}

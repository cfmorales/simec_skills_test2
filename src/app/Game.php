<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['name', 'user_id', 'wins', 'losses'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

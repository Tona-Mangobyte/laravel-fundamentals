<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    // use SoftDeletes;

    protected $table = 'counties';
    public function posts()
    {
        return $this->hasManyThrough(
            Post::class,
            User::class,
            'country_id', // Foreign key on users table...
            'user_id', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }

    public function users() {
        return $this->hasMany(User::class);
    }
}

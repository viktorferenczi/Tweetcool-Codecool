<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $guarded = [];
    /**
     * Get the user associated with the tweet.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

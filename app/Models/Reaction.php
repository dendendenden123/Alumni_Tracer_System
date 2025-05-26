<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    public $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

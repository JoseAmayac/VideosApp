<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function videos()
    {
        return $this->belongsTo(Video::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Video extends Model
{
    public function users(){
        return $this->belongsTo(User::class); 
    }

    public function categorias(){
        return $this->belongsTo(Categoria::class); 
    }

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }
}

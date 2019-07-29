<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'publicaciones';
    
    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }
    
      
    public function seguidores()
    {
     return $this->belongsToMany('App\Usuario','seguidores');
        
    }
}

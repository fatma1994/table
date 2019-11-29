<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Classe extends Model

{
    public funtiion Niveau(){
    	 return $this->belongsToMany('App\Niveau');

    }
    public funtiion Serie(){
    	 return $this->belongsToMany('App\Serie');

    }
     public funtiion Inscription(){
    	 return $this->belongsToMany('App\Inscription');

    }
}

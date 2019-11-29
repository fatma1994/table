<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $guarded=[];
    public funtiion Cours(){
    	return $this->has,any("App\cours")}
}

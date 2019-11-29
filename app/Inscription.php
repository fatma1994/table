<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
	protected $guarded=[];
     public funtiion Classe(){
    	return $this->hasMany("App\Classe");} 
    	public funtiion Eleve(){
    	return $this->hasMany("App\Eleve");}
}

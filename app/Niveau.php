<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
	protected $guarded=[];

	 public funtiion Classe(){
    	return $this->hasMany("App\Classe");} 
    //
}

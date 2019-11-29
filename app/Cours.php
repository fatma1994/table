<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
	protected $guarded=[];
    public funtiion Matiere(){
    	return $this->belongsToMany("App\Matiere");} 
    	 public funtiion Teacher(){
    	return $this->belongsToMany("App\Teacher");} 
}

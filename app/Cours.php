<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
	protected $guarded=[];
    public function Matiere(){
    	return $this->belongsTo("App\Matiere");} 
    	 public funtiion Teacher(){
    	return $this->belongsTo("App\Teacher");} 
}

<?php 

namespace App\Models;
use App\Models\User;
use App\Models\Tags;
use App\Models\Postingan;

class Komentar extends Model{
	protected $table = 'komentar';
	protected $guarded = ['id'];
	
	function postingan(){
		return $this->belongsTo(Postingan::class);
	}
}

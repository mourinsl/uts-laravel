<?php

namespace App\Models;
use App\Models\Postingan;

class Tags extends Model{
	protected $table = 'tags';

	function postingan(){
		return $this->hasMany(Postingan::class, 'id_tags');
	}
}
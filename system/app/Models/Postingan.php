<?php 

namespace App\Models;
use App\Models\User;
use App\Models\Tags;
use App\Models\Komentar;

class Postingan extends Model{
	protected $table = 'postingan';
	protected $guarded = ['id'];
	
	function penulis(){
		return $this->belongsTo(User::class, 'id_user');
	}
	function tags(){
		return $this->belongsTo(Tags::class, 'id_tags');
	}
	public function komentar(){
		return $this->hasMany(Komentar::class);
	}
}

<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Postingan;
use App\Models\Tags;
use App\Models\User;
use App\Models\Komentar;

class ClientController extends Controller{

function Beranda(){
	return view ('Client.beranda');
	}
function Postingan(){
	$data['list_postingan'] = Postingan::orderBy('updated_at','desc')->get();
	$data['list_tags'] = Tags::withCount('postingan')->get();
	return view ('Client.postingan', $data);
	}

function Artikel(Postingan $postingan){
	$data['postingan'] = $postingan;
	$data['list_tags'] = Tags::withCount('postingan')->get();
	return view ('Client.artikel', $data);
	}

function store(Request $request){
		$komentar = Komentar::create($request->all());

		return redirect()->back()->with('success', 'Komentar Berhasil Ditambah');
	}
}
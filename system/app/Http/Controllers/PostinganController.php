<?php 

namespace App\Http\Controllers;
use App\Models\Postingan;
use App\Models\Tags;
use App\Models\User;
class PostinganController extends Controller {

	function index(){
		$user = request()->user();
		$data['list_postingan'] = $user->postingan;
		$data['list_tags'] = Tags::all();
	return view ('Admin.Postingan.index', $data);
	}

	function create(){
		$data['list_tags'] = Tags::all();
		return view ('Admin.Postingan.create', $data);
	}

	function store(){
		$postingan = new Postingan;
		$postingan-> id_user = request()->user()->id;
		$postingan-> judul = request('judul');
		$postingan-> id_tags = request('id_tags');
		$postingan-> isi = request('isi');
		$postingan-> save();

		return redirect('Admin/postingan')->with('success', 'Postingan Berhasil Ditambah');
	}

	function show(Postingan $postingan){
		$data['postingan'] = $postingan;
		return view('Admin.Postingan.show', $data);
	}

	function edit(Postingan $postingan){
		$data['list_tags'] = Tags::all();
		$data['postingan'] = $postingan;
		return view ('Admin.Postingan.edit', $data);
	}

	function update(Postingan $produk){
		$postingan-> judul = request('judul');
		$postingan-> id_tags = request('id_tags');
		$postingan-> isi = request('isi');
		$postingan-> save();

		return redirect('Admin/postingan')->with('success', 'Postingan Berhasil Diedit');
	}
	function destroy(Postingan $postingan){
		$postingan->delete();
		return redirect('Admin/postingan')->with('danger', 'Postingan Berhasil Dihapus');
	}

	function cari(){
		$judul = request('judul');
		$data['list_postingan'] = Postingan::where('judul', 'like', "%$judul%")->get();
		return view('Admin.Postingan.index', $data);

	}

}
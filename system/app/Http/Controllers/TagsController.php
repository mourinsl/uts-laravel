<?php
namespace App\Http\Controllers;
use App\Models\Tags;
use App\Models\Postingan;
use App\Models\User;

class TagsController extends Controller{
	
	function index(){
		$data['list_tags'] = Tags::all();
		return view('Admin.Tags.index', $data);
	}

	function create(){
		return view('Admin.Tags.create');

	}

	function store(){
		$tags = new tags;
		$tags-> nama = request('nama');
		$tags-> save();

		return redirect ('Admin/tags')-> with ('success', 'Tags berhasil ditambahkan');

	}

	function show(Tags $tags){
		$data['tags'] = $tags;
		return view('Admin.Tags.show', $data);

	}

	function edit(Tags $tags){
		$data['tags'] = $tags;
		return view('Admin.Tags.edit', $data);
	}

	function update(Tags $tags){
		$tags-> nama = request('nama');
		$tags-> save();

		return redirect ('Admin/tags')-> with ('success', 'Tags berhasil diedit');

	}

	function destroy(Tags $tags){
		$tags->delete();

		return redirect ('Admin/tags')-> with ('danger', 'Tags berhasil dihapus');
	}

}
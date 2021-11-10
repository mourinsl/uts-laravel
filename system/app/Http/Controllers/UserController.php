<?php 

namespace App\Http\Controllers;
use App\Models\User;
class UserController extends Controller {

	function index(){
		$data['list_user'] = User::withCount('postingan')->get();
	return view ('Admin.User.index', $data);
	}

	function create(){
		return view ('Admin.User.create');
	}

	function store(){
		$user = new User;
		$user->nama = request('nama');
		$user->email= request('email');
		$user->password= bcrypt(request('password'));
		$user-> save();

		return redirect('Admin/user')->with('success', 'User Berhasil Ditambah');
	}

	function show(User $user){
		$data['user'] = $user;
		return view('Admin.User.show', $data);
	}

	function edit(User $user){
		$data['user'] = $user;
		return view ('Admin.User.edit', $data);
	}

	function update(User $user){
		$user->nama = request('nama');
		$user->email= request('email');
		if(request('password')) $user->password = bcrypt(request('password'));
		$user-> save();

		return redirect('Admin/user')->with('success', 'User Berhasil Diedit');
	}
	function destroy(User $user){
		$user->delete();
		return redirect('Admin/user')->with('danger', 'User Berhasil Dihapus');
	}
}
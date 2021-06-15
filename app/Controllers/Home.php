<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$model = new \App\Models\ModelCad();
		$UsuarioLogadoId = session()->get('UsuarioLogado');
		$usersInfo = $model->find($UsuarioLogadoId);
		$data = [
			'usersInfo'=>$usersInfo
		];
		return view('Home.php', $data);
	}
}

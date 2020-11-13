<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Home extends BaseController
{
	public function index()
	{
		$ArtikelModel = new ArtikelModel();

		$corp = 'Ohayo |';
		$data = [
			'tittle' => $corp . ' Beranda',
			'artikel' => $ArtikelModel->paginate(4, 'artikel'),
			'pager' => $ArtikelModel->pager,


		];

		return view('costumer/landing_view', $data);
	}
}

<?php

namespace App\Controllers;

use App\Models\ArtikelModel;


class Home extends BaseController
{

	protected $ArtikelModel;
	public function __construct()
	{
		$this->ArtikelModel = new ArtikelModel();
	}

	public function index()
	{

		$corp = 'Ohayo |';
		$data = [
			'tittle' => $corp . ' Beranda',
			'artikel' => $this->ArtikelModel->paginate(3, 'artikel'),
			'pager' => $this->ArtikelModel->pager,

		];

		return view('costumer/landing_view', $data);
	}
}

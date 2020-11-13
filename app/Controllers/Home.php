<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// $currentPage = $this->request->getVar('page_artikel') ? $this->request->getVar('page_artikel') : 1;

		$corp = 'Ohayo |';
		$data = [
			'tittle' => $corp . ' Beranda',
			// 'artikel' => $this->pesertaModel->paginate(6, 'peserta'),
			// 'pager' => $this->pesertaModel->pager,
			// 'currentPage'    => $currentPage
		];

		return view('costumer/landing_view', $data);
	}
}

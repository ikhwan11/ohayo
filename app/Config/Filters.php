<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		// 'authfilter' => \App\Filters\AuthFilter::class,
	];
	// Always applied before every request
	public $globals = [
		'before' => [
			// 'authfilter' => ['except' => ['/', 'login/', 'Web_about/', 'Web_courseCrayon/', 'Web_courseManga/', 'Web_courseDigital/', 'Web_coursePainting/']],
			// 'honeypot',
			// 'csrf',
		],
		'after'  => [
			// 'authfilter' => ['except' => ['/Admin_dashboard/', 'Admin_artikel/', 'Admin_dataPeserta/', 'Admin_dataTransaksi/', 'Admin_equipment/',  'Admin_event/', 'Admin_formPendaftaran/', 'Admin_kelolaUser/', 'Admin_manajemenArtikel/', 'Admin_pendaftaran/', 'Admin_tambahStok/', 'Admin_tambahUser/', 'Admin_transaksiKelas/', 'Admin_transaksiLain/', 'Owner_dataPeserta/', 'Owner_formUser/', 'Owner_kelolaUser/', 'Owner_dashboard/', 'Owner_pendaftaran/', 'Owner_transaksi/', 'Peserta_galeri/', 'Peserta_dashboard/']],
			'toolbar',
			//'honeypot'
		],
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [];
}

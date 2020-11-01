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
			// 'authfilter' => ['except' => ['home/*', 'login/*', 'costumer/cost_about/*', 'course/course_crayon/*', 'course/course_manga/*', 'course/course_digital/*', 'course/course_painting/*']],
			// 'honeypot',
			// 'csrf',
		],
		'after'  => [
			// 'authfilter' => ['except' => ['/admin/admin_dashboard/*', '/admin/artikel/*', '/admin/data_peserta/*', '/admin/data_transaksi/*', '/admin/equipment/*',  '/admin/event/*', '/admin/form_pendaftaran/*', '/admin/kelola_user/*', '/admin/manajemen_artikel/*', '/admin/pendaftaran/*', '/admin/tambah_stok/*', '/admin/tambah_user/*', '/admin/transaksi_kelas/*', '/admin/transaksi_lain/*', '/owner/data_peserta/*', '/owner/form_user/*', '/owner/kelola_user/*', '/owner/owner_dashboard/*', '/owner/pendaftaran/*', '/owner/transaksi/*', '/peserta/galeri/*', '/peserta/peserta_dashboard/*']],
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

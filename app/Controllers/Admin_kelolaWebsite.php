<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\EventModel;

class Admin_kelolaWebsite extends BaseController
{
    protected $ArtikelModel;
    public function __construct()
    {
        $this->ArtikelModel = new ArtikelModel();
        $this->EventModel = new EventModel();
    }

    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Artikel',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/artikel/artikel_view', $data);
    }

    public function manajemen_artikel()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $Artikel = $this->ArtikelModel->search($keyword);
        } else {
            $Artikel = $this->ArtikelModel;
        }

        $currentPage = $this->request->getVar('page_artikel') ? $this->request->getVar('page_artikel') : 1;
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Manajemen Artikel',
            'artikel' => $Artikel->paginate(6, 'artikel'),
            'pager' => $this->ArtikelModel->pager,
            'currentPage'    => $currentPage
        ];

        return view('admin/artikel/manajemenArtikel_view', $data);
    }

    public function submit()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'banner' => [
                'rules' => 'max_size[banner,1024]|is_image[banner]|mime_in[banner,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'max_size' => 'ukuran gambar terlalu besar',
                    'mime_in' => 'yang anda pilih bukan gambar',
                ]
            ]
        ])) {

            return redirect()->to('/Admin_kelolaWebsite/')->withInput();
        }

        $fileBanner = $this->request->getFile('banner');

        if ($fileBanner->getError() == 4) {
            $namaBanner = 'default_artikel.jpg';
        } else {

            $namaBanner = $fileBanner->getRandomName();

            $fileBanner->move('img/banner_artikel', $namaBanner);
        }


        $this->ArtikelModel->save([
            'nama_admin' => $this->request->getVar('nama_admin'),
            'judul' => $this->request->getVar('judul'),
            'kategori' => $this->request->getVar('kategori'),
            'keterangan' => $this->request->getVar('keterangan'),
            'isi' => $this->request->getVar('isi'),
            'gambar' => $namaBanner
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Artikel baru berhasil disubmit
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_kelolaWebsite/manajemen_artikel');
    }

    public function delete($id)
    {

        $banner = $this->ArtikelModel->find($id);

        if ($banner['gambar'] != 'default_artikel.jpg') {

            unlink('img/banner_artikel/' . $banner['gambar']);
        }

        $this->ArtikelModel->delete($id);
        session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Artikel berhasil dihapus
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        return redirect()->to('/Admin_kelolaWebsite/manajemen_artikel');
    }

    public function detail($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Preview Artikel',
            'artikel' => $this->ArtikelModel->getData($id)
        ];

        return view('admin/artikel/detailArtikel_view', $data);
    }

    public function edit($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Edit Artikel',
            'artikel' => $this->ArtikelModel->getData($id)
        ];

        return view('admin/artikel/formEditArtikel_view', $data);
    }

    public function update_artikel($id)
    {
        $this->ArtikelModel->save([
            'id_artikel' => $id,
            'nama_admin' => $this->request->getVar('nama_admin'),
            'judul' => $this->request->getVar('judul'),
            'kategori' => $this->request->getVar('kategori'),
            'keterangan' => $this->request->getVar('keterangan'),
            'isi' => $this->request->getVar('isi'),
            'gambar' => $this->request->getVar('gambar'),
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Artikel berhasil di update
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_kelolaWebsite/manajemen_artikel');
    }

    // bagian event

    public function event()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $Event = $this->EventModel->search($keyword);
        } else {
            $Event = $this->EventModel;
        }

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Daftar Event',
            'event' => $Event->findAll()
        ];

        return view('admin/event/event_view', $data);
    }
    public function buat_event()
    {

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Buat Event',
            'validation' => \Config\Services::validation(),

        ];

        return view('admin/event/formBuatEvent_view', $data);
    }

    public function submit_event()
    {
        if (!$this->validate([
            'judul_event' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ], 'tanggal_acara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'tempat_acara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'limit_peserta' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'kategori_acara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'biaya' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'banner' => [
                'rules' => 'max_size[banner,1024]|is_image[banner]|mime_in[banner,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'max_size' => 'ukuran gambar terlalu besar',
                    'mime_in' => 'yang anda pilih bukan gambar',
                ]
            ]
        ])) {

            return redirect()->to('/Admin_kelolaWebsite/buat_event')->withInput();
        }

        $fileBanner = $this->request->getFile('banner');

        if ($fileBanner->getError() == 4) {
            $namaBanner = 'default_event.jpg';
        } else {

            $namaBanner = $fileBanner->getRandomName();

            $fileBanner->move('img/banner_event', $namaBanner);
        }

        $this->EventModel->save([
            'judul_event' => $this->request->getVar('judul_event'),
            'tanggal_acara' => $this->request->getVar('tanggal_acara'),
            'tempat_acara' => $this->request->getVar('tempat_acara'),
            'ket' => $this->request->getVar('ket'),
            'limit_peserta' => (int)$this->request->getVar('limit_peserta'),
            'kategori_acara' => $this->request->getVar('kategori_acara'),
            'biaya' => $this->request->getVar('biaya'),
            'detail_acara' => $this->request->getVar('detail_acara'),
            'status' => 'aktif',
            'banner' => $namaBanner
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Event berhasil di buat
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_kelolaWebsite/event');
    }

    public function detail_event($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Detail Event',
            'event' => $this->EventModel->getData($id)

        ];

        return view('admin/event/detailEvent_view', $data);
    }

    public function delete_event($id)
    {
        $banner = $this->EventModel->find($id);

        if ($banner['banner'] != 'default_event.jpg') {

            unlink('img/banner_event/' . $banner['banner']);
        }

        $this->EventModel->delete($id);
        session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Event berhasil dihapus
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        return redirect()->to('/Admin_kelolaWebsite/event');
    }

    public function edit_event($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Edit Event',
            'event' => $this->EventModel->getData($id),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/event/formEditEvent_view', $data);
    }

    public function update_event($id)
    {
        if (!$this->validate([
            'judul_event' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ], 'tanggal_acara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'tempat_acara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'limit_peserta' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'kategori_acara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'biaya' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],

        ])) {

            return redirect()->to('/Admin_kelolaWebsite/buat_event')->withInput();
        }


        $this->EventModel->save([
            'id_event' => $id,
            'judul_event' => $this->request->getVar('judul_event'),
            'tanggal_acara' => $this->request->getVar('tanggal_acara'),
            'tempat_acara' => $this->request->getVar('tempat_acara'),
            'ket' => $this->request->getVar('ket'),
            'limit_peserta' => (int)$this->request->getVar('limit_peserta'),
            'kategori_acara' => $this->request->getVar('kategori_acara'),
            'biaya' => $this->request->getVar('biaya'),
            'detail_acara' => $this->request->getVar('detail_acara'),
            'status' => 'aktif',
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Event berhasil di update
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_kelolaWebsite/event');
    }
}

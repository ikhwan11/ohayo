<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Admin_artikel extends BaseController
{
    protected $ArtikelModel;
    public function __construct()
    {
        $this->ArtikelModel = new ArtikelModel();
    }

    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Artikel',

        ];

        return view('admin/artikel_view', $data);
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

        return view('admin/manajemenArtikel_view', $data);
    }

    public function submit()
    {
        $this->ArtikelModel->save([
            'nama_admin' => $this->request->getVar('nama_admin'),
            'judul' => $this->request->getVar('judul'),
            'kategori' => $this->request->getVar('kategori'),
            'keterangan' => $this->request->getVar('keterangan'),
            'isi' => $this->request->getVar('isi'),
            'gambar' => $this->request->getVar('gambar'),
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Artikel baru berhasil disubmit
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/Admin_artikel/manajemen_artikel');
    }

    public function delete($id)
    {
        $this->ArtikelModel->delete($id);
        session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Artikel berhasil dihapus
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        return redirect()->to('/Admin_artikel/manajemen_artikel');
    }

    public function detail($id)
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Preview Artikel',
            'artikel' => $this->ArtikelModel->getData($id)
        ];

        return view('admin/detailArtikel_view', $data);
    }
}

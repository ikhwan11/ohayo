<?php

namespace App\Controllers;

use App\Models\PesertaModel;
use App\Models\TransaksiModel;
use App\Models\PendaftaranModel;

class Admin_kelolaPeserta extends BaseController
{
  protected $pesertaModel;
  public function __construct()
  {
    $this->pesertaModel = new PesertaModel();
  }

  public function index()
  {
    $currentPage = $this->request->getVar('page_peserta') ? $this->request->getVar('page_peserta') : 1;

    $corp = 'Admin |';
    $data = [
      'tittle' => $corp . ' Data Peserta',
      'peserta' => $this->pesertaModel->paginate(6, 'peserta'),
      'pager' => $this->pesertaModel->pager,
      'currentPage'    => $currentPage

    ];

    return view('admin/peserta/dataPeserta_view', $data);
  }

  public function delete($id)
  {
    $this->pesertaModel->delete($id);
    session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data peserta berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    return redirect()->to('/Admin_kelolaPeserta/');
  }

  public function edit($id)
  {
    $corp = 'Admin |';
    $data = [
      'tittle' => $corp . ' Edit User',
      'peserta' => $this->pesertaModel->getData($id)
    ];

    return view('admin/peserta/formEditPeserta_view', $data);
  }

  public function detail($id)
  {
    $corp = 'Admin |';
    $data = [
      'tittle' => $corp . ' Detail Peserta',
      'peserta' => $this->pesertaModel->getData($id)
    ];

    return view('admin/peserta/detailPeserta_view', $data);
  }

  public function update($id)
  {
    $this->pesertaModel->save([
      'id_peserta' => $id,
      'nama' => $this->request->getVar('nama'),
      'alamat' => $this->request->getVar('alamat'),
      'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
      'nama_ibu' => $this->request->getVar('nama_ibu'),
      'nama_ayah' => $this->request->getVar('nama_ayah'),
      'asal_sekolah' => $this->request->getVar('asal_sekolah'),
      'usia' => $this->request->getVar('usia'),
      'gender' => $this->request->getVar('gender'),
      'no_wa' => $this->request->getVar('no_wa'),

    ]);
    session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        data peserta berhasil diubah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    return redirect()->to('/Admin_kelolaPeserta/');
  }

  public function cuti_true($id)
  {
    $this->pesertaModel->save([
      'id_peserta' => $id,
      'status' => 'cuti'
    ]);
    session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        status peserta adalah cuti
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    return redirect()->to('/Admin_kelolaPeserta/');
  }

  public function cuti_false($id)
  {
    $this->pesertaModel->save([
      'id_peserta' => $id,
      'status' => 'aktif'
    ]);
    session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        status peserta adalah aktif
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    return redirect()->to('/Admin_kelolaPeserta/');
  }

  public function tambah_peserta()
  {
    $corp = 'Admin |';
    $data = [
      'tittle' => $corp . ' Tambah peserta'
    ];

    return view('admin/peserta/formPendaftaranOf_view', $data);
  }

  public function simpan()
  {
    $this->pesertaModel->save([
      'nama' => $this->request->getVar('nama'),
      'gender' => $this->request->getVar('gender'),
      'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
      'alamat' => $this->request->getVar('alamat'),
      'no_wa' => $this->request->getVar('no_wa'),
      'usia' => $this->request->getVar('usia'),
      'nama_ayah' => $this->request->getVar('nama_ayah'),
      'nama_ibu' => $this->request->getVar('nama_ibu'),
      'asal_sekolah' => $this->request->getVar('asal_sekolah'),
      'jenis_kursus' => $this->request->getVar('jenis_kursus'),
      'total_kelas' => (int)$this->request->getVar('jenis_paket'),
      'status' => 'aktif'
    ]);

    $transaksi = new TransaksiModel();
    $transaksi->save([
      'jenis_transaksi' => 'Transaksi masuk',
      'total' => $this->request->getVar('total'),
      'ket' => 'Transaksi awal registrasi'
    ]);

    session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        data peserta baru berhasil ditambahkan
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    return redirect()->to('/Admin_kelolaPeserta/tambah_peserta');
  }

  // pendaftaran 

  public function pendaftaran()
  {

    $pendaftaran = new PendaftaranModel();


    $corp = 'Admin |';
    $data = [
      'tittle' => $corp . ' Murid Terdaftar',
      'pendaftaran' => $pendaftaran->findAll()
    ];

    return view('admin/peserta/pendaftaran_view', $data);
  }

  public function edit_pendaftaran($id)
  {
    $pendaftaran = new PendaftaranModel();
    $corp = 'Admin |';
    $data = [
      'tittle' => $corp . ' Tambah peserta',
      'pendaftaran' => $pendaftaran->getData($id)
    ];

    return view('admin/peserta/formPendaftaranOl_view', $data);
  }

  public function delete_pendaftaran($id)
  {
    $pendaftaran = new PendaftaranModel();

    $pendaftaran->delete($id);
    session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        data berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    return redirect()->to('/Admin_kelolaUser/pendaftaran');
  }
}

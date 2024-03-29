<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TentangLestariController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->TentangLestariModel = new \App\Models\TentangLestariModel();
        // if(!$this->session->userdata('email')){
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     redirect('auth/');
        // }

    }



    public function TentangLestari()
    {
        $data = [
            'title' => 'Tentang | BANK LESTARI',
            'css' => 'index',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];

        $data['TentangLestariDepanSejarah'] = $this->TentangLestariModel->get_all_depan_sejarah();
        $data['TentangLestariDepanProfil'] = $this->TentangLestariModel->get_all_depan_profil();
        $data['TentangLestariDepanStrukturOrganisasi'] = $this->TentangLestariModel->get_all_depan_struktur_organisasi();
        $data['TentangLestariDepanVisiMisi'] = $this->TentangLestariModel->get_all_depan_visimisi();
        $data['TentangLestariDepanAlamat'] = $this->TentangLestariModel->get_all_depan_alamat();
        $data['TentangLestariDepanBerita'] = $this->TentangLestariModel->get_all_depan_berita();

        echo view('pages/TentangLestari', $data);
    }


    public function index_alamat()
    {
        $data = [
            'title' => 'Admin Alamat',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['TentangLestariAlamat'] = $this->TentangLestariModel->get_all_alamat();
        $data['TentangLestariDepanAlamat'] = $this->TentangLestariModel->get_all_depan_alamat();
        return view('Admin/TentangLestari/Alamat/AdminAlamat', $data);
    }
    public function TambahAlamat()
    {
        $data = [
            'title' => 'Edit Alamat',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/TentangLestari/Alamat/Tambah', $data);
    }
    public function AddAlamat()
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (is_file('uploads/TentangLestari/Alamat' . '/' . $fileName)) {
            $fileName = date('YmdHis') . '-' . $fileName;
        }
        $data = [
            'kabupaten_kota' => $this->request->getPost('kabupaten_kota'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'google_maps' => $this->request->getPost('google_maps'),
            'foto' => $fileName,
        ];
        $dataBerkas->move('uploads/TentangLestari/Alamat', $fileName);

        $this->TentangLestariModel->add_alamat($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminAlamat'))->with('success', 'Data Added Successfully');
    }
    public function EditAlamat($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_alamat($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Tabungan Tidak ditemukan !');
        }
        $data['tentang_alamat_kantor'] = $dataAll;
        echo view('admin/TentangLestari/Alamat/Edit', $data);
    }
    public function UpdateAlamat($id)
    {

        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/TentangLestari/Alamat' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/TentangLestari/Alamat' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'kabupaten_kota' => $this->request->getPost('kabupaten_kota'),
                    'alamat' => $this->request->getPost('alamat'),
                    'nomor_telepon' => $this->request->getPost('nomor_telepon'),
                    'google_maps' => $this->request->getPost('google_maps'),
                    'foto' => $fileName,
                ];
            } else {
                $data = [
                    'kabupaten_kota' => $this->request->getPost('kabupaten_kota'),
                    'alamat' => $this->request->getPost('alamat'),
                    'nomor_telepon' => $this->request->getPost('nomor_telepon'),
                    'google_maps' => $this->request->getPost('google_maps'),
                    'foto' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/TentangLestari/Alamat', $fileName);
        } else {
            $data = [
                'kabupaten_kota' => $this->request->getPost('kabupaten_kota'),
                'alamat' => $this->request->getPost('alamat'),
                'nomor_telepon' => $this->request->getPost('nomor_telepon'),
                'google_maps' => $this->request->getPost('google_maps'),
            ];
        }


        $this->TentangLestariModel->update_alamat($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminAlamat'));
    }
    public function DeleteAlamat($id)
    {
        $data = $this->TentangLestariModel->get_id_alamat($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Alamat Tidak ditemukan !');
        }
        if (is_file('uploads/TentangLestari/Alamat' . '/' . $data->foto)) {
            unlink('uploads/TentangLestari/Alamat' . '/' . $data->foto);
        }
        $this->TentangLestariModel->delete_alamat($id);
        $this->session->setFlashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminAlamat'));
    }

    public function index_visi_misi()
    {
        $data = [
            'title' => 'Admin Visi Misi',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['TentangLestariVisiMisi'] = $this->TentangLestariModel->get_all_visimisi();
        $data['TentangLestariDepanVisiMisi'] = $this->TentangLestariModel->get_all_depan_visimisi();
        return view('Admin/TentangLestari/VisiMisi/adminVisiMisi', $data);
    }

    public function EditVisiMisi($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_visimisi($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data VisiMisi Tidak ditemukan !');
        }
        $data['tentang_visimisi'] = $dataAll;
        echo view('Admin/TentangLestari/VisiMisi/Edit', $data);
    }

    public function UpdateVisiMisi($id)
    {
        $data = [
            'visi' => $this->request->getPost('editor1'),
            'Misi' => $this->request->getPost('editor2'),
        ];

        $this->TentangLestariModel->update_visimisi($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('adminVisiMisi'));
    }


    public function index_struktur_organisasi()
    {
        $data = [
            'title' => 'Admin Struktur Organisasi',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['TentangLestariStrukturOrganisasi'] = $this->TentangLestariModel->get_all_struktur_organisasi();
        $data['TentangLestariDepanStrukturOrganisasi'] = $this->TentangLestariModel->get_all_depan_struktur_organisasi();
        return view('Admin/TentangLestari/StrukturOrganisasi/adminStrukturOrganisasi', $data);
    }

    public function EditStrukturOrganisasi($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_strukturorganisasi($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data StrukturOrganisasi Tidak ditemukan !');
        }
        $data['tentang_strukturorganisasi'] = $dataAll;
        echo view('Admin/TentangLestari/StrukturOrganisasi/Edit', $data);
    }

    public function UpdateStrukturOrganisasi($id)
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/TentangLestari/StrukturOrganisasi' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/TentangLestari/StrukturOrganisasi' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/TentangLestari/StrukturOrganisasi', $fileName);
        }

        $this->TentangLestariModel->update_strukturorganisasi($id, $data);
        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('adminStrukturOrganisasi'));
    }


    public function index_profil()
    {
        $data = [
            'title' => 'Admin Tabungan',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['TentangLestariProfil'] = $this->TentangLestariModel->get_all_profil();
        $data['TentangLestariDepanProfil'] = $this->TentangLestariModel->get_all_depan_profil();
        return view('Admin/TentangLestari/Profil/AdminProfil', $data);
    }
    public function EditProfil($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_profil($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Profil Tidak ditemukan !');
        }
        $data['tentang_profil'] = $dataAll;
        echo view('Admin/TentangLestari/Profil/Edit', $data);
    }

    public function UpdateProfil($id)
    {
        $data = [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('editor1'),
        ];

        $this->TentangLestariModel->update_profil($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminProfil'));
    }

    public function index_sejarah()
    {
        $data = [
            'title' => 'Admin Sejarah',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['TentangLestariSejarah'] = $this->TentangLestariModel->get_all_sejarah();
        $data['TentangLestariDepanSejarah'] = $this->TentangLestariModel->get_all_depan_sejarah();
        return view('Admin/TentangLestari/Sejarah/AdminSejarah', $data);
    }
    public function TambahSejarah()
    {
        $data = [
            'title' => 'Edit Sejarah',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/TentangLestari/Sejarah/Tambah', $data);
    }
    public function AddSejarah()
    {
        $data = [
            'judul' => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
            'deskripsi' => $this->request->getPost('editor1'),
        ];

        $this->TentangLestariModel->add_sejarah($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminSejarah'))->with('success', 'Data Added Successfully');
    }
    public function EditSejarah($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_sejarah($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Tabungan Tidak ditemukan !');
        }
        $data['tentang_sejarah'] = $dataAll;
        echo view('admin/TentangLestari/Sejarah/Edit', $data);
    }
    public function UpdateSejarah($id)
    {
        $data = [
            'judul' => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
            'deskripsi' => $this->request->getPost('editor1'),
        ];

        $this->TentangLestariModel->update_sejarah($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminSejarah'));
    }
    public function DeleteSejarah($id)
    {
        $data = $this->TentangLestariModel->get_id_sejarah($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Sejarah Tidak ditemukan !');
        }
        $this->TentangLestariModel->delete_sejarah($id);
        session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminSejarah'));
    }

    public function EditIklanKredit($id)
    {
        $dataAll = $this->KreditModel->get_id_iklan($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Iklan Kredit Tidak ditemukan !');
        }
        $data['iklan_kredit'] = $dataAll;
        echo view('admin/Kredit/EditIklanKredit', $data);
    }

    public function EditDepanProfil($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_depan_profil($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Depan Tidak ditemukan !');
        }
        $data['tentang_depan_profil'] = $dataAll;
        echo view('admin/TentangLestari/Profil/EditDepanProfil', $data);
    }

    public function UpdateDepanProfil($id)
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/TentangLestari/Profil/depan' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/TentangLestari/Profil/depan' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/TentangLestari/Profil/depan', $fileName);
        }

        if (empty($data)) {
            $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            return redirect()->to(base_url('AdminProfil'));
        }

        $this->TentangLestariModel->update_depan_profil($id, $data);
        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminProfil'));
    }

    public function EditDepanSejarah($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_depan_sejarah($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Depan Tidak ditemukan !');
        }
        $data['tentang_depan_sejarah'] = $dataAll;
        echo view('admin/TentangLestari/Sejarah/EditDepanSejarah', $data);
    }
    public function UpdateDepanSejarah($id)
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/TentangLestari/Sejarah/depan' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/TentangLestari/Sejarah/depan' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/TentangLestari/Sejarah/depan', $fileName);
        }

        if (empty($data)) {
            $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            return redirect()->to(base_url('AdminSejarah'));
        }

        $this->TentangLestariModel->update_depan_sejarah($id, $data);
        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminSejarah'));
    }
    public function EditDepanAlamat($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_depan_alamat($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Depan Tidak ditemukan !');
        }
        $data['tentang_depan_alamat_kantor'] = $dataAll;
        echo view('admin/TentangLestari/Alamat/EditDepanAlamat', $data);
    }
    public function UpdateDepanAlamat($id)
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/TentangLestari/Alamat/depan' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/TentangLestari/Alamat/depan' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/TentangLestari/Alamat/depan', $fileName);
        }

        if (empty($data)) {
            $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            return redirect()->to(base_url('AdminAlamat'));
        }

        $this->TentangLestariModel->update_depan_alamat($id, $data);
        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminAlamat'));
    }

    public function EditDepanVisiMisi($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_depan_visimisi($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Depan Tidak ditemukan !');
        }
        $data['tentang_depan_visi_misi'] = $dataAll;
        echo view('admin/TentangLestari/VisiMisi/EditDepanVisiMisi', $data);
    }

    public function UpdateDepanVisiMisi($id)
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/TentangLestari/VisiMisi/depan' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/TentangLestari/VisiMisi/depan' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/TentangLestari/VisiMisi/depan', $fileName);
        }


        if (empty($data)) {
            $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            return redirect()->to(base_url('adminVisiMisi'));
        }
        $this->TentangLestariModel->update_depan_visimisi($id, $data);
        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('adminVisiMisi'));
    }

    public function EditDepanStrukturOrganisasi($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_depan_struktur_organisasi($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Depan Tidak ditemukan !');
        }
        $data['tentang_depan_struktur_organisasi'] = $dataAll;
        echo view('admin/TentangLestari/StrukturOrganisasi/EditDepanStrukturOrganisasi', $data);
    }
    public function UpdateDepanStrukturOrganisasi($id)
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/TentangLestari/StrukturOrganisasi/depan' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/TentangLestari/StrukturOrganisasi/depan' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/TentangLestari/StrukturOrganisasi/depan', $fileName);
        }


        if (empty($data)) {
            $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            return redirect()->to(base_url('adminStrukturOrganisasi'));
        }
        $this->TentangLestariModel->update_depan_struktur_organisasi($id, $data);
        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('adminStrukturOrganisasi'));
    }

    public function index_berita()
    {
        $data = [
            'title' => 'Admin Berita;',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['TentangLestariDepanBerita'] = $this->TentangLestariModel->get_all_depan_berita();
        return view('Admin/TentangLestari/Berita/AdminBerita', $data);
    }

    public function EditDepanBerita($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_depan_berita($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Depan Tidak ditemukan !');
        }
        $data['tentang_depan_berita'] = $dataAll;
        echo view('admin/TentangLestari/Berita/EditDepanBerita', $data);
    }

    public function UpdateDepanBerita($id)
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/TentangLestari/Berita/depan' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/TentangLestari/Berita/depan' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/TentangLestari/Berita/depan', $fileName);
        }

        if (empty($data)) {
            $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            return redirect()->to(base_url('AdminBerita'));
        }

        $this->TentangLestariModel->update_depan_berita($id, $data);
        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminBerita'));
    }

    //USER
    public function Profil()
    {
        $data = [
            'title' => 'Profil',
            'css' => 'Profil',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $data['TentangLestariProfil'] = $this->TentangLestariModel->get_all_profil();
        $data['TentangLestariDepanProfil'] = $this->TentangLestariModel->get_all_depan_profil();
        return view('pages/Profil', $data);
    }

    public function VisiMisi()
    {
        $data = [
            'title' => 'VisiMisi',
            'css' => 'VisiMisi',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];

        $data['TentangLestariVisiMisi'] = $this->TentangLestariModel->get_all_visimisi();
        $data['TentangLestariDepanVisiMisi'] = $this->TentangLestariModel->get_all_depan_visimisi();
        return view('pages/VisiMisi', $data);
    }
    public function StrukturOrganisasi()
    {
        $data = [
            'title' => 'StrukturOrganisasi',
            'css' => 'StrukturOrganisasi',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $data['TentangLestariStrukturOrganisasi'] = $this->TentangLestariModel->get_all_struktur_organisasi();
        return view('pages/StrukturOrganisasi', $data);
    }


    public function Sejarah()
    {
        $data = [
            'title' => 'Sejarah',
            'css' => 'Sejarah',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $data['TentangLestariSejarah'] = $this->TentangLestariModel->get_all_sejarah();
        echo view('pages/Sejarah', $data);
    }

    public function AlamatKantor()
    {
        $data = [
            'title' => 'Alamat Kantor',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $data['TentangLestariAlamat'] = $this->TentangLestariModel->get_all_alamat();
        echo view('pages/AlamatKantor', $data);
    }
}

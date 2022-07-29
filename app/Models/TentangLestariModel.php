<?php

namespace App\Models;

use CodeIgniter\Model;

class TentangLestariModel extends Model
{
    function get_all_profil()
    {
        $data['TentangLestariProfil'] = $this->db->table('tentang_profil')->select('*')->get()->getResult();
        return $data['TentangLestariProfil'];
    }

    public function get_id_profil($id)
    {
        $data = $this->db->table('tentang_profil')->select('*')->where('id_profil', $id)->get()->getRow();
        return $data;
    }

    public function update_profil($id, $data)
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'editor1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('tentang_profil')->select('*')->where('id_profil', $id)->update($data);
        session()->setFlashdata('message', 'Edit profil Berhasil');
    }

    function get_all_sejarah()
    {
        $data['TentangLestariSejarah'] = $this->db->table('tentang_sejarah')->select('*')->get()->getResult();
        return $data['TentangLestariSejarah'];
    }
    public function get_id_sejarah($id)
    {
        $data = $this->db->table('tentang_sejarah')->select('*')->where('id_sejarah', $id)->get()->getRow();
        return $data;
    }

    public function add_sejarah($data)
    {
        if (!$this->validate([

            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'editor1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('tentang_sejarah')->insert($data);
    }
    public function update_sejarah($id, $data)
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'editor1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('tentang_sejarah')->select('*')->where('id_sejarah', $id)->update($data);
        session()->setFlashdata('message', 'Edit sejarah Berhasil');
    }
    public function delete_sejarah($id)
    {
        $this->db->table('tentang_sejarah')->select('*')->where('id_sejarah', $id)->delete();
    }




    function get_all_alamat()
    {
        $data['TentangLestariAlamat'] = $this->db->table('tentang_alamat_kantor')->select('*')->get()->getResult();
        return $data['TentangLestariAlamat'];
    }
    public function get_id_alamat($id)
    {
        $data = $this->db->table('tentang_alamat_kantor')->select('*')->where('id_alamat_kantor', $id)->get()->getRow();
        return $data;
    }

    public function add_alamat($data)
    {
        if (!$this->validate([

            'kabupaten_kota' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nomor_telpon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'google_maps' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],


        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('tentang_alamat_kantor')->insert($data);
    }
    public function update_alamat($id, $data)
    {
        if (!$this->validate([
            'kabupaten_kota' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nomor_telpon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'google_maps' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('tentang_alamat_kantor')->select('*')->where('id_alamat_kantor', $id)->update($data);
        session()->setFlashdata('message', 'Edit alamat Berhasil');
    }
    public function delete_alamat($id)
    {
        $this->db->table('tentang_alamat_kantor')->select('*')->where('id_alamat_kantor', $id)->delete();
    }

    function get_all_visimisi()
    {
        $data['TentangLestariVisiMisi'] = $this->db->table('tentang_visi_misi')->select('*')->get()->getResult();
        return $data['TentangLestariVisiMisi'];
    }

    public function get_id_visimisi($id)
    {
        $data = $this->db->table('tentang_visi_misi')->select('*')->where('id_visi_misi', $id)->get()->getRow();
        return $data;
    }

    public function update_visimisi($id, $data)
    {
        if (!$this->validate([
            'editor1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('tentang_visi_misi')->select('*')->where('id_visi_misi', $id)->update($data);
        session()->setFlashdata('message', 'Edit visimisi Berhasil');
    }


    function get_all_struktur_organisasi()
    {
        $data['TentangLestariStrukturOrganisasi'] = $this->db->table('tentang_struktur_organisasi')->select('*')->get()->getResult();
        return $data['TentangLestariStrukturOrganisasi'];
    }
    public function get_id_strukturorganisasi($id)
    {
        $data = $this->db->table('tentang_struktur_organisasi')->select('*')->where('id_struktur_organisasi', $id)->get()->getRow();
        return $data;
    }

    public function update_strukturorganisasi($id, $data)
    {
        if (!$this->validate([
            'foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('tentang_struktur_organisasi')->select('*')->where('id_struktur_organisasi', $id)->update($data);
        session()->setFlashdata('message', 'Edit strukturorganisasi Berhasil');
    }
}

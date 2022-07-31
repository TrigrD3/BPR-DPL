<?php

namespace App\Models;

use CodeIgniter\Model;

class HeaderModel extends Model
{
    function get_all_lelang()
    {
        $data['HeaderLelang'] = $this->db->table('header_lelang')->select('*')->get()->getResult();
        return $data['HeaderLelang'];
    }
    public function get_id_lelang($id)
    {
        $data = $this->db->table('header_lelang')->select('*')->where('id_lelang', $id)->get()->getRow();
        return $data;
    }

    public function add_lelang($data)
    {
        if (!$this->validate([

            'google_maps' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('header_lelang')->insert($data);
    }
    public function update_lelang($id, $data)
    {
        if (!$this->validate([
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

        $this->db->table('header_lelang')->select('*')->where('id_lelang', $id)->update($data);
        session()->setFlashdata('message', 'Edit lelang Berhasil');
    }
    public function delete_lelang($id)
    {
        $this->db->table('header_lelang')->select('*')->where('id_lelang', $id)->delete();
    }



    function get_all_loker()
    {
        $data['HeaderLoker'] = $this->db->table('header_loker')->select('*')->get()->getResult();
        return $data['HeaderLoker'];
    }
    public function get_id_loker($id)
    {
        $data = $this->db->table('header_loker')->select('*')->where('id_loker', $id)->get()->getRow();
        return $data;
    }

    public function update_loker($id, $data)
    {
        if (!$this->validate([
            'foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
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

        $this->db->table('header_loker')->select('*')->where('id_loker', $id)->update($data);
        session()->setFlashdata('message', 'Edit loker Berhasil');
    }

    function get_all_pat()
    {
        $data['HeaderPAT'] = $this->db->table('header_pat')->select('*')->get()->getResult();
        return $data['HeaderPAT'];
    }
    public function get_id_pat($id)
    {
        $data = $this->db->table('header_pat')->select('*')->where('id_pat', $id)->get()->getRow();
        return $data;
    }

    public function add_pat($data)
    {
        if (!$this->validate([

            'nama' => [
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

        $this->db->table('header_pat')->insert($data);
    }
    public function update_pat($id, $data)
    {
        if (!$this->validate([
            'nama' => [
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
            'file' => [
                'rules' => 'uploaded[file]|mime_in[file,docx/pdf]|max_size[foto,10000]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa docx/pdf',
                    'max_size' => 'Ukuran File Maksimal 10 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('header_pat')->select('*')->where('id_pat', $id)->update($data);
        session()->setFlashdata('message', 'Edit PAT Berhasil');
    }
    public function delete_pat($id)
    {
        $this->db->table('header_pat')->select('*')->where('id_pat', $id)->delete();
    }


    function get_all_penghargaan()
    {
        $data['HeaderPenghargaan'] = $this->db->table('header_penghargaan')->select('*')->get()->getResult();
        return $data['HeaderPenghargaan'];
    }
    public function get_id_penghargaan($id)
    {
        $data = $this->db->table('header_penghargaan')->select('*')->where('id_penghargaan', $id)->get()->getRow();
        return $data;
    }

    public function add_penghargaan($data)
    {
        if (!$this->validate([

            'deskripsi' => [
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

        $this->db->table('header_penghargaan')->insert($data);
    }
    public function update_penghargaan($id, $data)
    {
        if (!$this->validate([
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'file' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('header_penghargaan')->select('*')->where('id_penghargaan', $id)->update($data);
        session()->setFlashdata('message', 'Edit penghargaan Berhasil');
    }
    public function delete_penghargaan($id)
    {
        $this->db->table('header_penghargaan')->select('*')->where('id_penghargaan', $id)->delete();
    }








    function get_all_publikasi()
    {
        $data['HeaderPublikasi'] = $this->db->table('header_publikasi')->select('*')->get()->getResult();
        return $data['HeaderPublikasi'];
    }
    public function get_id_publikasi($id)
    {
        $data = $this->db->table('header_publikasi')->select('*')->where('id_publikasi', $id)->get()->getRow();
        return $data;
    }

    public function add_publikasi($data)
    {
        if (!$this->validate([

            'nama' => [
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
            'file' => [
                'rules' => 'uploaded[file]|mime_in[file,docx/pdf]|max_size[foto,10000]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa docx/pdf',
                    'max_size' => 'Ukuran File Maksimal 10 MB'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('header_publikasi')->insert($data);
    }
    public function update_publikasi($id, $data)
    {
        if (!$this->validate([
            'nama' => [
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
            'file' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('header_publikasi')->select('*')->where('id_publikasi', $id)->update($data);
        session()->setFlashdata('message', 'Edit publikasi Berhasil');
    }
    public function delete_publikasi($id)
    {
        $this->db->table('header_publikasi')->select('*')->where('id_publikasi', $id)->delete();
    }
}

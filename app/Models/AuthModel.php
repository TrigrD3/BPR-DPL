<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "username";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'name'];

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function process($username)
    {
        return $dataUser = $this->db->table('user')->where('username', $username)->get()->getRow();
        
    }
}

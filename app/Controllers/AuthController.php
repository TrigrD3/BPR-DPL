<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function login()
    {
        
    }

    public function logout()
    {
        $this->load->model('auth_model');
        $this->auth_model->logout();
        redirect(site_url());
    }
}

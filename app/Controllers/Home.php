<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index()
    {
        return view('v_login');
    }

    public function proses_login()
    {
        $user = $this->input->post('username');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $this->m_login->proses_login($user, $email, $pass);
    }

}

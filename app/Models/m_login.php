<?php

class M_login extends CI_Model{
    public function proses_login($user, $email, $pass)
    {
        $password = md5('$pass');
        $user = $this->db->where('username', $user);
        $email = $this->db->where('email', $email);
        $pass = $this->db->where('password', $password);
        $query = $this->db->get('staff');
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'id'    => $row->id ,
                    'nama'  => $row->nama ,
                    'email' => $row->email ,
                    'password' => $row->password , 
                );
                $this->session->set_userdata($sess);
            }
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('info', <div class="alert alert-danger" role="alert">
            Login Gagal, Silahkan Periksa Username dan Password !
          </div> );
          redirect('login');
        }
    }
}
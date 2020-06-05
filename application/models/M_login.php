<?php

class M_login extends CI_Model
{
    private $_table = "user";

    public function doLogin(){
        $post = $this->input->post();

        // cari user berdasarkan username
        $this->db->where('username', $post["username"]);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($user){
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $user->password);
            

            // jika password benar
            if($isPasswordTrue){ 
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);
                return true;
            }
        }
        
        // login gagal
        return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

}
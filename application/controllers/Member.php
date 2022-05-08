<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Anda telah logout.
      </div>');
        redirect('beranda');
    }
    public function profil()
    {
        if (!empty($this->session->userdata('email'))) {
            $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data = [
                'judul' => 'Profil',
                'user' => $user['nama'],
                'profil' => $user,
            ];
            $this->load->view('templates/user/header', $data);
            $this->load->view('templates/user/profil', $data);
            $this->load->view('templates/user/modal', $data);
            $this->load->view('templates/user/footer');
        } else {
            redirect('beranda');
        }
    }
    public function edit_profil()
    {
    }
}

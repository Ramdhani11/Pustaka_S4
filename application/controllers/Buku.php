<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function detail($id)
    {
        $det = $this->db->get_where('buku', ['id' => $id])->row_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($user) {
            $data = [
                'judul' => 'Detail',
                'user' => $user['nama'],
                'det' => $det
            ];
            $this->load->view('templates/user/header', $data);
            $this->load->view('templates/user/detail', $data);
            $this->load->view('templates/user/footer');
        } else {
            $data = [
                'judul' => 'Detail',
                'user' => 'Pengunjung',
                'det' => $det
            ];
            $this->load->view('templates/user/header', $data);
            $this->load->view('templates/user/detail', $data);
            $this->load->view('templates/user/footer');
        }
    }
}

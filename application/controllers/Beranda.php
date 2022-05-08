<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function index()
    {

        if (!empty($this->session->userdata['email'])) {
            $user = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
            $data = [
                'user' => $user['nama'],
                'judul' => 'Beranda',
                'buku' => $this->db->get('buku')->result_array(),
            ];
            $this->load->view('templates/user/header', $data);
            $this->load->view('templates/user/beranda');
            $this->load->view('templates/user/footer');
        } else {
            $data = [
                'user' => 'Pengunjung',
                'judul' => 'Beranda',
                'buku' => $this->db->get('buku')->result_array(),
            ];
            $this->load->view('templates/user/header', $data);
            $this->load->view('templates/user/beranda');
            $this->load->view('templates/user/footer');
        }
    }
    public function book()
    {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Login terlebih dahulu untuk bisa booking buku.
      </div>');
        redirect('beranda');
    }
}

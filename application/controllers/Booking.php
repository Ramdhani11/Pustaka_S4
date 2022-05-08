<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

    public function index()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $temp = $this->db->get_where('temp', ['email_user' => $user['email']])->result_array();
        $data = [
            'judul' => 'Booking',
            'user' => $user['nama'],
            'temp' => $temp
        ];
        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/booking', $data);
        $this->load->view('templates/user/footer');
    }
    public function book($id)
    {
        $buku = $this->db->get_where('buku', ['id' => $id])->row_array();
        $temp = $this->db->get('temp')->result_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($temp['id_buku'] == $id) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Buku sudah anda booking
          </div>');
            redirect('beranda');
        } else {
            $data = [
                'tgl_booking' => time(),
                'id_user' => $this->session->userdata('id'),
                'email_user' => $this->session->userdata('email'),
                'id_buku' => $buku['id'],
                'judul_buku' => $buku['judul_buku'],
                'image' => $buku['image'],
                'penulis' => $buku['pengarang'],
                'penerbit' => $buku['penerbit'],
                'tahun_terbit' => $buku['tahun_terbit'],
            ];
            $this->db->insert('temp', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Anda berhasil membooking buku
          </div>');
            redirect('beranda');
        }
    }
}

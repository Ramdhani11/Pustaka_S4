<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $this->load->view('auth/header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'nama' => $user['nama'],
                        'id' => $user['id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('beranda');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            <b>Gagal!!</b>,Password salah,Silahkan ulangi.
          </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            <b>Gagal!!</b>,Akun anda belum aktif,Aktifasi akun terlebih dahulu.
          </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            <b>Gagal!!</b>,Email anda tidak terdaftar,silahkan daftar terlebih dahulu.
          </div>');
            redirect('auth');
        }
    }
    public function daftar()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password]');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Daftar';
            $this->load->view('auth/header', $data);
            $this->load->view('auth/daftar');
            $this->load->view('auth/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email'),
                'image' => 'Default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'tanggal_input' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            <b>Selamat!</b> Akun anda telah berhasil dibuat,silahkan login.
          </div>');
            redirect('auth');
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buyer_model');
        $this->load->helper('help');
    }

    public function index()
    {
        if ($this->input->post()) {
            $email = $this->input->post('email');
            $password = $this->input->post('pass');

            $user = $this->Buyer_model->getUserByEmail($email);

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data['id_pembeli'] = $user['id_pembeli'];
                    $this->session->set_userdata($data);
                    redirect('home');
                } else {
                    echo "Wrong Password";
                }
            } else {
                echo "User not found";
            }
        } else {
            $this->load->view('auth/header');
            $this->load->view('auth/signin');
            $this->load->view('auth/footer');
        }
    }

    public function signup()
    {
        if ($this->input->post()) {
            $date = $this->input->post('date');
            $data = [
                'id_pembeli' => uniqid('usr'),
                'nama_pembeli' => $this->input->post('name'),
                'tanggal_lahir_pembeli' => date_reverse($date),
                'jenis_kelamin_pembeli' =>  $this->input->post('gender'),
                'alamat_pembeli' => $this->input->post('address'),
                'email_pembeli' => $this->input->post('email'),
                'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT)
            ];
            $this->Buyer_model->createUser($data);
            redirect('auth');
        } else {
            $this->load->view('auth/header');
            $this->load->view('auth/signup');
            $this->load->view('auth/footer');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_pembeli');
        redirect('home');
    }
}

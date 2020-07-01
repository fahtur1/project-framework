<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buyer_model');
    }

    public function index()
    {
        $id = $this->session->userdata('id_pembeli');
        $data = [
            'user' => $this->Buyer_model->getUserById($id)
        ];

        $this->load->view('home/header', $data);
        $this->load->view('home/home');
        $this->load->view('home/footer');
    }
}

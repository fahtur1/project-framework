<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buyer_model');
        $this->load->model('Admin_model');
        $this->load->model('Seller_model');
        $this->load->model('Product_model');

        $this->load->helper('help');
    }

    public function index()
    {
        $data = [
            'admin' => $this->Admin_model->getAdminById($this->session->userdata('id_admin')),
            'userCount' => $this->Buyer_model->getUserRow(),
            'adminCount' => $this->Admin_model->getAdminRow(),
            'sellerCount' => $this->Seller_model->getSellerRow(),
            'productCount' => $this->Product_model->getProductRow(),
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/home', $data);
        $this->load->view('admin/footer');
    }

    public function create($url)
    {
        $data['admin'] = $this->Admin_model->getAdminById($this->session->userdata('id_admin'));
        $this->load->view('admin/header', $data);
        switch ($url) {
            case 'admin':
                $this->form_validation->set_rules('name', 'Nama', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required|is_unique[admin.email_admin]');
                $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

                if ($this->form_validation->run()) {
                    $data = [
                        'id_admin' => uniqid('adm'),
                        'nama_admin' => $this->input->post('name'),
                        'tanggal_lahir_admin' => date_reverse($this->input->post('date')),
                        'alamat_admin' => $this->input->post('address'),
                        'jenis_kelamin_admin' => $this->input->post('gender'),
                        'email_admin' => $this->input->post('email'),
                        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
                    ];
                    if ($this->load->Admin_model->createAdmin($data) > 0) {
                        $this->session->set_flashdata('message', $this->flask('success', 'Data berhasil ditambahkan!'));
                    } else {
                        $this->session->set_flashdata('message', $this->flask('danger', 'Data gagal ditambahkan'));
                    }
                    redirect('admin/read');
                } else {
                    $this->load->view('admin/form/admin');
                }
                break;
            case 'pembeli':
                $this->form_validation->set_rules('name', 'Nama', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required|is_unique[pembeli.email_pembeli]');
                $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

                if ($this->form_validation->run()) {
                    $data = [
                        'id_pembeli' => uniqid('usr'),
                        'nama_pembeli' => $this->input->post('name'),
                        'tanggal_lahir_pembeli' => date_reverse($this->input->post('date')),
                        'jenis_kelamin_pembeli' =>  $this->input->post('gender'),
                        'alamat_pembeli' => $this->input->post('address'),
                        'email_pembeli' => $this->input->post('email'),
                        'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT)
                    ];

                    if ($this->Buyer_model->createUser($data) > 0) {
                        $this->session->set_flashdata('message', $this->flask('success', 'Data berhasil ditambahkan!'));
                    } else {
                        $this->session->set_flashdata('message', $this->flask('success', 'Data gagal ditambahkan'));
                    }
                    redirect('admin/read/pembeli');
                } else {
                    $this->load->view('admin/form/pembeli');
                }
                break;
            case 'penjual':
                $this->form_validation->set_rules('name', 'Nama', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required|is_unique[penjual.email_penjual]');
                $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

                if ($this->form_validation->run()) {
                    $data = [
                        'id_penjual' => uniqid('sellr'),
                        'nama_penjual' => $this->input->post('name'),
                        'tanggal_lahir_penjual' => date_reverse($this->input->post('date')),
                        'jenis_kelamin_penjual' =>  $this->input->post('gender'),
                        'alamat_penjual' => $this->input->post('address'),
                        'email_penjual' => $this->input->post('email'),
                        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
                    ];

                    if ($this->Seller_model->createSeller($data) > 0) {
                        $this->session->set_flashdata('message', $this->flask('success', 'Data berhasil ditambahkan!'));
                    } else {
                        $this->session->set_flashdata('message', $this->flask('success', 'Data gagal ditambahkan'));
                    }
                    redirect('admin/read/penjual');
                } else {
                    $this->load->view('admin/form/penjual');
                }
                break;
            case 'barang':
                if ($this->input->post()) {
                    $upload_img = $_FILES['image']['name'];

                    $data = [
                        'id_barang' => uniqid('brg'),
                        'nama_barang' => $this->input->post('name'),
                        'deskripsi_barang' => $this->input->post('description'),
                    ];

                    if ($upload_img) {
                        $config['allowed_types'] = 'jpg|png';
                        $config['max_size'] = '2048';
                        $config['upload_path'] = './assets/img/barang';
                        $config['file_name'] = "barang-" . time() . "." . pathinfo($upload_img, PATHINFO_EXTENSION);

                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('image')) {
                            $new_image = $this->upload->data('file_name');
                            $data['gambar_barang'] = $new_image;

                            if ($this->Product_model->createProduct($data) > 0) {
                                $this->session->set_flashdata('message', $this->flask('success', 'Data berhasil ditambahkan!'));
                            } else {
                                $this->session->set_flashdata('message', $this->flask('success', 'Data gagal ditambahkan'));
                            }
                            redirect('admin/read/barang');
                        } else {
                            $this->upload->display_errors();
                        }
                    }
                } else {
                    $this->load->view('admin/form/barang');
                }
                break;
        }
        $this->load->view('admin/footer');
    }

    public function read($url = 'admin')
    {
        $data['admin'] = $this->Admin_model->getAdminById($this->session->userdata('id_admin'));
        $this->load->view('admin/header', $data);
        switch ($url) {
            case 'admin':
                $data['admins'] = $this->Admin_model->getAdmins();
                $this->load->view('admin/table/admin', $data);
                break;
            case 'pembeli':
                $data['buyers'] = $this->Buyer_model->getUsers();
                $this->load->view('admin/table/pembeli', $data);
                break;
            case 'penjual':
                $data['sellers'] = $this->Seller_model->getSellers();
                $this->load->view('admin/table/penjual', $data);
                break;
            case 'barang':
                $data['products'] = $this->Product_model->getProducts();
                $this->load->view('admin/table/barang', $data);
                break;
        }
        $this->load->view('admin/footer');
    }

    public function update($url, $id)
    {
        $data['admin'] = $this->Admin_model->getAdminById($this->session->userdata('id_admin'));
        $this->load->view('admin/header', $data);
        switch ($url) {
            case 'admin':
                $data['admin'] = $this->Admin_model->getAdminById($id);
                if ($this->input->post()) {
                    $adminData = [
                        'id_admin' => $id,
                        'nama_admin' => $this->input->post('nama'),
                        'email_admin' => $this->input->post('email'),
                        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
                    ];
                    if ($this->Admin_model->updateAdmin($adminData) > 0) {
                        redirect('admin/read');
                    } else {
                        echo 'Gagal Mengedit';
                    }
                } else {
                    $this->load->view('admin/form_update/admin', $data);
                }
                break;
            case 'penjual':
                $data['seller'] = $this->Seller_model->getSellerById($id);
                if ($this->input->post()) {
                    $sellerData = [
                        'id_penjual' => $id,
                        'nama_penjual' => $this->input->post('name'),
                        'tanggal_lahir_penjual' => date_reverse($this->input->post('date')),
                        'jenis_kelamin_penjual' =>  $this->input->post('gender'),
                        'alamat_penjual' => $this->input->post('address'),
                        'email_penjual' => $this->input->post('email'),
                        'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT)
                    ];

                    if ($this->Seller_model->updateSeller($sellerData) > 0) {
                        redirect('admin/read/penjual');
                    } else {
                        echo 'Gagal Mengupdate data';
                    }
                } else {
                    $this->load->view('admin/form_update/penjual', $data);
                }
                break;
            case 'pembeli':
                $data['buyer'] = $this->Buyer_model->getUserById($id);
                if ($this->input->post()) {
                    $buyerData = [
                        'id_pembeli' => $id,
                        'nama_pembeli' => $this->input->post('name'),
                        'tanggal_lahir_pembeli' => date_reverse($this->input->post('date')),
                        'jenis_kelamin_pembeli' =>  $this->input->post('gender'),
                        'alamat_pembeli' => $this->input->post('address'),
                        'email_pembeli' => $this->input->post('email'),
                        'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT)
                    ];

                    if ($this->Buyer_model->updateUser($buyerData) > 0) {
                        redirect('admin/read/pembeli');
                    } else {
                        echo 'Gagal Mengupdate Data';
                    }
                } else {
                    $this->load->view('admin/form_update/pembeli', $data);
                }
                break;
            case 'barang':
                $data['product'] = $this->Product_model->getProductById($id);
                if ($this->input->post()) {
                    $upload_img = $_FILES['image']['name'];

                    $productData = [
                        'id_barang' => $id,
                        'nama_barang' => $this->input->post('name'),
                        'deskripsi_barang' => $this->input->post('description'),
                    ];

                    if ($upload_img) {
                        $config['allowed_types'] = 'jpg|png';
                        $config['max_size'] = '2048';
                        $config['upload_path'] = './assets/img/barang';
                        $config['file_name'] = "barang-" . time() . "." . pathinfo($upload_img, PATHINFO_EXTENSION);

                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('image')) {
                            $new_image = $this->upload->data('file_name');
                            $productData['gambar_barang'] = $new_image;

                            if ($this->Product_model->updateProduct($productData) > 0) {
                                unlink(FCPATH . "assets/img/barang/" . $data['product']['gambar_barang']);
                                redirect('admin/read/barang');
                            } else {
                                echo 'Gagal Mengupdate data';
                            }
                        } else {
                            $this->upload->display_errors();
                        }
                    } else {
                        $productData['gambar_barang'] = $data['product']['gambar_barang'];
                        if ($this->Product_model->updateProduct($productData) > 0) {
                            redirect('admin/read/barang');
                        } else {
                            echo 'Gagal Mengupdate data';
                        }
                    }
                } else {
                    $this->load->view('admin/form_update/barang', $data);
                }
                break;
        }
        $this->load->view('admin/footer');
    }

    public function delete($url, $id)
    {
        switch ($url) {
            case 'admin':
                if ($this->Admin_model->deleteAdmin($id) > 0) {
                    redirect('admin/read');
                } else {
                    echo 'Gagal Menghapus data';
                }
                break;
            case 'penjual':
                if ($this->Seller_model->deleteSeller($id) > 0) {
                    redirect('admin/read/penjual');
                } else {
                    echo 'Gagal Menghapus data';
                }
                break;
            case 'pembeli':
                if ($this->Buyer_model->deleteUser($id) > 0) {
                    redirect('admin/read/pembeli');
                } else {
                    echo 'Gagal Menghapus data';
                }
                break;
            case 'barang':
                $image = $this->Product_model->getProductById($id);
                if ($this->Product_model->deleteProduct($id) > 0) {
                    unlink(FCPATH . "assets/img/barang/" . $image['gambar_barang']);
                    redirect('admin/read/barang');
                } else {
                    echo 'Gagal Menghapus data';
                }
                break;
        }
    }

    public function flask($class, $message)
    {
        return
            '<div class="alert alert-' . $class . ' alert-dismissible fade show" role="alert">
                ' . $message . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    } 
}

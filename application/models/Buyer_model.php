<?php

class Buyer_model extends CI_Model
{
    public function createUser($data)
    {
        return $this->db->insert('pembeli', $data);
    }

    public function getUserByEmail($email)
    {
        return $this->db->get_where('pembeli', ['email_pembeli' => $email])->row_array();
    }

    public function getUserById($id)
    {
        return $this->db->get_where('pembeli', ['id_pembeli' => $id])->row_array();
    }
}

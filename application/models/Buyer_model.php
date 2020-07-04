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

    public function getUserRow()
    {
        return $this->db->get('pembeli')->num_rows();
    }

    public function getUsers()
    {
        return $this->db->get('pembeli')->result_array();
    }

    public function updateUser($data)
    {
        $this->db->where('id_pembeli', $data['id_pembeli']);
        return $this->db->update('pembeli', $data);
    }

    public function deleteUser($id)
    {
        $this->db->where('id_pembeli', $id);
        return $this->db->delete('pembeli');
    }
}

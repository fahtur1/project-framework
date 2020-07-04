<?php

class Admin_model extends CI_Model
{
    public function getAdmins()
    {
        return $this->db->get('admin')->result_array();
    }

    public function getAdminRow()
    {
        return $this->db->get('admin')->num_rows();
    }

    public function getAdminById($id)
    {
        return $this->db->get_where('admin', ['id_admin' => $id])->row_array();
    }

    public function createAdmin($data)
    {
        return $this->db->insert('admin', $data);
    }

    public function updateAdmin($data)
    {
        $this->db->where('id_admin', $data['id_admin']);
        return $this->db->update('admin', $data);
    }

    public function deleteAdmin($id)
    {
        $this->db->where('id_admin', $id);
        return $this->db->delete('admin');
    }
}

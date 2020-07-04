<?php

class Seller_model extends CI_Model
{
    public function getSellerRow()
    {
        return $this->db->get('penjual')->num_rows();
    }

    public function getSellers()
    {
        return $this->db->get('penjual')->result_array();
    }

    public function getSellerById($id)
    {
        return $this->db->get_where('penjual', ['id_penjual' => $id])->row_array();
    }

    public function createSeller($data)
    {
        return $this->db->insert('penjual', $data);
    }

    public function updateSeller($data)
    {
        $this->db->where('id_penjual', $data['id_penjual']);
        return $this->db->update('penjual', $data);
    }

    public function deleteSeller($id)
    {
        $this->db->where('id_penjual', $id);
        return $this->db->delete('penjual');
    }
}

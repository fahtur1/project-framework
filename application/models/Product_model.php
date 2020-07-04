<?php

class Product_model extends CI_Model
{
    public function getProductRow()
    {
        return $this->db->get('barang')->num_rows();
    }

    public function getProducts()
    {
        return $this->db->get('barang')->result_array();
    }

    public function getProductById($id)
    {
        return $this->db->get_where('barang', ['id_barang' => $id])->row_array();
    }

    public function createProduct($data)
    {
        return $this->db->insert('barang', $data);
    }

    public function updateProduct($data)
    {
        $this->db->where('id_barang', $data['id_barang']);
        return $this->db->update('barang', $data);
    }

    public function deleteProduct($id)
    {
        $this->db->where('id_barang', $id);
        return $this->db->delete('barang');
    }
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

class customer_m extends CI_Model {

    public function get($id = null) 
    {
        $this->db->from('perusahaan');
        if($id != null) {
            $this->db->where('id_perusahaan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'name' => $post['customer_name'],
            'sektor_perusahaan' => $post['sektor_perusahaan'],
            'phone' => $post['phone'],
            'address' => $post['addr'],
        ];
        $this->db->insert('customer', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['customer_name'],
            'sektor_perusahaan' => $post['sektor_perusahaan'],
            'phone' => $post['phone'],
            'address' => $post['addr'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('id_perusahaan', $post['id']);
        $this->db->update('customer', $params);
    }

    public function del($id)
	{
        $this->db->where('id_perusahaan', $id);
        $this->db->delete('customer');
	}

}
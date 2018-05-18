<?php
class Product_model extends CI_Model{
    function product_list(){
        $hasil=$this->db->get('obat');
        return $hasil->result();
    }
 
    function save_product(){
        $data = array(
                'kode_obat'  => $this->input->post('kode_obat'), 
                'nama_obat'  => $this->input->post('nama_obat'), 
                'jenis' => $this->input->post('jenis'), 
            );
        $result=$this->db->insert('obat',$data);
        return $result;
    }
 
    function update_product(){
        $kode_obat=$this->input->post('kode_obat');
        $nama_obat=$this->input->post('nama_obat');
        $jenis=$this->input->post('jenis');
 
        $this->db->set('nama_obat', $nama_obat);
        $this->db->set('jenis', $jenis);
        $this->db->where('kode_obat', $kode_obat);
        $result=$this->db->update('obat');
        return $result;
    }
 
    function delete_product(){
        $kode_obat=$this->input->post('kode_obat');
        $this->db->where('kode_obat', $kode_obat);
        $result=$this->db->delete('obat');
        return $result;
    }
     
}
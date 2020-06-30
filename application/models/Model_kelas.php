<?php

class Model_kelas extends CI_Model {

    public $table ="tbl_kelas";
    
    function save() {
        $data = array(
            'kd_kelas'    => $this->input->post('kd_kelas', TRUE),
            'nama_kelas'  => $this->input->post('nama_kelas', TRUE)
        );
        $this->db->insert($this->table,$data);
    }
    
    function update() {
        $data = array(
            'kd_kelas'    => $this->input->post('kd_kelas', TRUE),
            'nama_kelas'  => $this->input->post('nama_kelas', TRUE)
        );
        $id   = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->update($this->table,$data);
    }

}
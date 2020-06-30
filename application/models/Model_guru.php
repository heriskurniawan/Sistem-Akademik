<?php

class Model_guru extends CI_Model {

    public $table ="tbl_guru";
    
    function save() {
        $data = array(
            'nuptk'      => $this->input->post('nuptk', TRUE),
            'nama_guru'  => $this->input->post('nama_guru', TRUE),
            'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
            'tanggal_lahir'  => $this->input->post('tanggal_lahir', TRUE),
            'gender'     => $this->input->post('gender', TRUE),
            'kd_agama'  => $this->input->post('agama', TRUE),
            'alamat'  => $this->input->post('alamat', TRUE)   
        );
        $this->db->insert($this->table,$data);
    }
    
    function update() {
        $data = array(
            'nuptk'      => $this->input->post('nuptk', TRUE),
            'nama_guru'  => $this->input->post('nama_guru', TRUE),
            'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
            'tanggal_lahir'  => $this->input->post('tanggal_lahir', TRUE),
            'gender'     => $this->input->post('gender', TRUE),
            'kd_agama'  => $this->input->post('agama', TRUE),
            'alamat'  => $this->input->post('alamat', TRUE)
        );
        $id_guru   = $this->input->post('id_guru');
        $this->db->where('id_guru',$id_guru);
        $this->db->update($this->table,$data);
    }
    
    function chekLogin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',  md5($password));
        $user = $this->db->get('tbl_guru')->row_array();
        return $user;
    }

}
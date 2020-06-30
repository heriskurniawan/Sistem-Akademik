<?php

class Model_dashboard extends CI_Model {

    //public $table ="tbl_siswa";

    function Viewnonaktif()
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->like('is_aktif', 'N');
        $nonaktif = $this->db->count_all_results();
        return $nonaktif;
    }
    function Viewaktif(){
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->like('is_aktif', 'Y');
        $aktif = $this->db->count_all_results();
        return $aktif;

}
    function view_total_pria()
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->like('gender', 'P');
        $getTotalGenderPria = $this->db->count_all_results();
        return $getTotalGenderPria;
    }
    function view_total_wanita()
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->like('gender', 'W');
        $getTotalGenderWanita = $this->db->count_all_results();
        return $getTotalGenderWanita;
    }
     function view_data_1tkj1()
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->where('kd_kelas', '1TKJ1');
        $getTotalkleas1tkj1 = $this->db->count_all_results();
        return $getTotalkleas1tkj1;
    }
    function view_data_1tkj2()
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->where('kd_kelas', '1TKJ2');
        $getTotalkleas1tkj2 = $this->db->count_all_results();
        return $getTotalkleas1tkj2;
    }


}
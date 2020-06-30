<?php
class Walikelas extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('ssp');
    }
    
    
    function data() {
        // nama tabel
        $table = 'v_walikelas';
        // nama PK
        $primaryKey = 'id_walikelas';
        // list field
        $columns = array(
            array('db' => 'nama_rombel', 'dt' => 'nama_rombel'),
            array('db' => 'nama_jurusan', 'dt' => 'nama_jurusan'),
            array('db' => 'kelas', 'dt' => 'kelas'),
            //array('db' => 'nama_guru', 'dt' => 'nama_guru'),
            array('db' => 'nama_guru', 'dt' => 'nama_guru'),
            array('db' => 'id_walikelas', 'dt' => 'aksi',
                  'formatter' => function( $d) {
                    return anchor('walikelas/edit/'.$d,'<i class="fas fa-edit"></i>','class=" btn btn-sm btn-info" title="Edit"');
                }),
        );

        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );
        
        //$where = 'tahun_akademik='.get_tahun_akademik_aktif('tahun_akademik');
        $where = "tahun_akademik='".get_tahun_akademik_aktif('tahun_akademik')."'";
        echo json_encode(
                SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns,$where)
        );
    }
    
    
    function index(){
        $this->template->load('template','walikelas/list');
    }
    
    
    function updatewalikelas(){
        $id_walikelas   =   $_GET['id_walikelas'];
        $id_guru        =   $_GET['id_guru'];
        $this->db->where('id_walikelas',$id_walikelas);
        $this->db->update('tbl_walikelas',array('id_guru'=>$id_guru));
    }
    
}
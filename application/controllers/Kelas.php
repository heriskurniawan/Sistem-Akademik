<?php

Class Kelas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ssp');
        $this->load->model('Model_kelas');
    }

    function data() {
        // nama tabel
        $table = 'tbl_kelas';
        // nama PK
        $primaryKey = 'kd_kelas';
        // list field
        $columns = array(
            array('db' => 'kd_kelas', 'dt' => 'kd_kelas'),
            array('db' => 'nama_kelas', 'dt' => 'nama_kelas'),
            array(
                'db' => 'id',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('kelas/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-sm btn-info tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('kelas/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-sm btn-danger tooltips" data-placement="top" data-original-title="Delete"');
                }
            )
        );

        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );

        echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }

    function index() {
        $this->template->load('template', 'kelas/list');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_kelas->save();
            redirect('kelas');
        } else {
            $this->template->load('template', 'kelas/add');
        }
    }
    
    function edit(){
        if(isset($_POST['submit'])){
            $this->Model_kelas->update();
            redirect('kelas');
        }else{
            $id      = $this->uri->segment(3);
            $data['kelas'] = $this->db->get_where('tbl_kelas',array('id'=>$id))->row_array();
            $this->template->load('template', 'kelas/edit',$data);
        }
    }
    
    function delete(){
        $id = $this->uri->segment(3);
        if(!empty($id)){
            // proses delete data
            $this->db->where('id',$id);
            $this->db->delete('id');
        }
        redirect('kelas');
    }

}
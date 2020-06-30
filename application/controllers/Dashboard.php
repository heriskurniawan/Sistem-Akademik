<?php

use SebastianBergmann\Environment\Console;

class Dashboard extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('ssp');
        $this->load->model('Model_dashboard');
    }
    function index(){
        $aktif = $this->Model_dashboard->Viewaktif();
        $nonaktif = $this->Model_dashboard->Viewnonaktif();
        $totalpria = $this->Model_dashboard->view_total_pria();
        $totalwanita = $this->Model_dashboard->view_total_wanita();
        $total1tkj1 = $this->Model_dashboard->view_data_1tkj1();
        $total1tkj2 = $this->Model_dashboard->view_data_1tkj2();
       
        $data = array(
            "dataku" => array(
                "aktif" => $aktif,
                "nonaktif" => $nonaktif,
                "totalpria" => $totalpria,
                "totalwanita" => $totalwanita,
                "total1tkj1" => $total1tkj1,
                "total1tkj2" => $total1tkj2
            )
        );
        $this->template->load('template','dashboard/list', $data);
    }
    function getDatakelas()
    {
        // $total1tkj1 = $this->Model_dashboard->view_data_1tkj1();
        // $total1tkj2 = $this->Model_dashboard->view_data_1tkj2();

        $data = array(
                "nama" => 'heris',
                "kelamin" => 'pria'
        );
        echo json_encode($data);

    }

 
  

    
}
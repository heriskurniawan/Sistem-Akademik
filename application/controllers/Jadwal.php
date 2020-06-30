<?php
class Jadwal extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('ssp');
        $this->load->model('Model_keuangan');
    }
    function data() {
   
        // nama tabel
        $table = 'tbl_pembayaran';
        // nama PK
        $primaryKey = 'id';
        // list field
        $columns = array(
            array('db' => 'tanggal', 'dt' => 'tanggal'),
            array('db' => 'nim', 'dt' => 'nim'),
            array('db' => 'no_hp', 'dt' => 'no_hp'),
            array('db' => 'jumlah', 'dt' => 'jumlah'),
            array('db' => 'keterangan', 'dt' => 'keterangan'),
            array(
                'db' => 'id',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('keuangan/detail/'.$d,'<i class="fas fa-eye"></i>','class=" btn btn-sm btn-info" target="_blank" title="Detail"');
               
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
    
    
    function index(){
        $this->template->load('template','jadwal/form');
    }
    function listView(){
        $this->template->load('template','keuangan/list');
    }
    function detail(){
        $startTime1            = $this->input->post('startTime1');
        $endTime1              = $this->input->post('endTime1');
        $kelas1                = $this->input->post('kelas1');
        $mapel1                = $this->input->post('mapel1');
        $ruangan1              = $this->input->post('ruangan1');
        $guru1                 = $this->input->post('guru1');
        $startTime2            = $this->input->post('startTime2');
        $endTime2              = $this->input->post('endTime2');
        $kelas2                = $this->input->post('kelas2');
        $mapel2                = $this->input->post('mapel2');
        $ruangan2              = $this->input->post('ruangan2');
        $guru2                 = $this->input->post('guru2');
        $startTime3           = $this->input->post('startTime3');
        $endTime3              = $this->input->post('endTime3');
        $kelas3               = $this->input->post('kelas3');
        $mapel3                = $this->input->post('mapel3');
        $ruangan3             = $this->input->post('ruangan3');
        $guru3                 = $this->input->post('guru3');
        $startTime4            = $this->input->post('startTime4');
        $endTime4             = $this->input->post('endTime4');
        $kelas4               = $this->input->post('kelas4');
        $mapel4               = $this->input->post('mapel4');
        $ruangan4              = $this->input->post('ruangan4');
        $guru4                = $this->input->post('guru4');
        $startTime5            = $this->input->post('startTime5');
        $endTime5              = $this->input->post('endTime5');
        $kelas5                = $this->input->post('kelas5');
        $mapel5               = $this->input->post('mapel5');
        $ruangan5             = $this->input->post('ruangan5');
        $guru5                 = $this->input->post('guru5');

        // $data = array(
        //     'startTime1'               =>  $startTime1,
        //     'endTime1'                 =>  $endTime1,
        //     'kelas1'                   =>  $kelas1,
        //     'mapel1'                   =>  $mapel1,
        //     'ruangan1'                 =>  $ruangan1,
        //     'guru1'                    =>  $guru1
        

        $data = array(
                "dataku" => array(
                    'startTime1'               =>  $startTime1,
                    'endTime1'                 =>  $endTime1,
                    'kelas1'                   =>  $kelas1,
                    'mapel1'                   =>  $mapel1,
                    'ruangan1'                 =>  $ruangan1,
                    'guru1'                    =>  $guru1,
                    'startTime2'               =>  $startTime2,
                    'endTime2'                 =>  $endTime2,
                    'kelas2'                   =>  $kelas2,
                    'mapel2'                   =>  $mapel2,
                    'ruangan2'                 =>  $ruangan2,
                    'guru2'                    =>  $guru2,
                    'startTime3'               =>  $startTime3,
                    'endTime3'                 =>  $endTime3,
                    'kelas3'                   =>  $kelas3,
                    'mapel3'                   =>  $mapel3,
                    'ruangan3'                 =>  $ruangan3,
                    'guru3'                    =>  $guru3,
                    'startTime4'               =>  $startTime4,
                    'endTime4'                 =>  $endTime4,
                    'kelas4'                   =>  $kelas4,
                    'mapel4'                   =>  $mapel4,
                    'ruangan4'                 =>  $ruangan4,
                    'guru4'                    =>  $guru4,
                    'startTime5'               =>  $startTime5,
                    'endTime5'                 =>  $endTime5,
                    'kelas5'                   =>  $kelas5,
                    'mapel5'                   =>  $mapel5,
                    'ruangan5'                 =>  $ruangan5,
                    'guru5'                    =>  $guru5
            )
        );
        
        
        $this->load->library('pdf');
        
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Jadwal.pdf";
       // $this->Model_jadwal->pembayaran();
        //$this->pdf->load_view('jadwal/view');
        //$id           = $this->uri->segment(3);
       //$data['jadwal'] = $this->db->get_where('tbl_pembayaran',array('id'=>$id))->row_array();
        $this->pdf->load_view('jadwal/detail',$data);
       // $this->template->load('template', 'keuangan/view',$data);
        //$this->template->load('template','view', $data);
    }
    
    function setup(){
        if(isset($_POST['submit'])){
            // proses simpan
            $this->Model_keuangan->setup();
            redirect('keuangan/setup');
        }else{
            $data['jenis_pembayaran'] = $this->db->get('tbl_jenis_pembayaran');
            $this->template->load('template','keuangan/setup',$data);
        }
    }
    
    function form(){
        if(isset($_POST['submit'])){
            $this->Model_keuangan->pembayaran();
            redirect('keuangan/listView');
        }else{
            $this->template->load('template','keuangan/form');
        }
    }
    function edit(){
        if(isset($_POST['submit'])){
            $this->Model_keuangan->update();
            redirect('keuangan/listView');
        }else{
            $id           = $this->uri->segment(3);
            $data['keuangan'] = $this->db->get_where('tbl_pembayaran',array('id'=>$id))->row_array();
            $this->template->load('template', 'keuangan/edit',$data);
        }
    }
    
    function form_siswa_autocomplate(){
        $nis = $_GET['nis'];
        $sqlSiswa = "SELECT ts.nama as nama_siswa,ts.nim,tj.nama_jurusan,tr.nama_rombel,tr.kelas
                    FROM tbl_history_kelas as hk,tbl_siswa as ts,tbl_rombel as tr,tbl_jurusan as tj
                    WHERE ts.nim=hk.nim and tr.id_rombel=ts.id_rombel and tr.kd_jurusan=tj.kd_jurusan 
                    and hk.nim='$nis' and hk.id_tahun_akademik=".  get_tahun_akademik_aktif('id_tahun_akademik');
       $siswa = $this->db->query($sqlSiswa)->row_array();
        $data = array(
                    'nama'      =>  $siswa['nama_siswa'],
                    'jurusan'   =>  $siswa['nama_jurusan'],
                    'rombel'    =>  $siswa['nama_rombel'],
                    'kelas'     =>  $siswa['kelas'],);
         echo json_encode($data);
    }
    
    function load_data_siswa_by_rombel(){
        $rombel = $_GET['rombel'];
        $id_jenis_pembayaran = $_GET['jenis_pembayaran'];
        echo "<table class='table table-bordered'>
            <tr><th width='90'>NIM</th><th>NAMA</th><th WIDTH='160'>SUDAH DIBAYARKAN</th></tr>";
        $this->db->where('id_rombel',$rombel);
        $siswa = $this->db->get('tbl_siswa');
        foreach ($siswa->result() as $row){
            echo "<tr>
                <td>$row->nim</td>
                <td>$row->nama</td>
                <td>".$this->__chek_jumlah_yang_sudah_dibayar($row->nim, $id_jenis_pembayaran)."</td></tr>";
        }
        echo"</table>";
    }
    
    function __chek_jumlah_yang_sudah_dibayar($nim,$id_jenis_pembayaran){
        $pembayaran = $this->db->get_where('tbl_pembayaran',array('nim'=>$nim,'id_jenis_pembayaran'=>$id_jenis_pembayaran));
        if($pembayaran->num_rows()>0){
            $row = $pembayaran->row_array();
            return $row['jumlah'];
        }else{
            return 0;
        }
    }
}
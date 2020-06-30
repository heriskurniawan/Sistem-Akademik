<?php

class Siswa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //chekAksesModule();
        $this->load->library('ssp');
        $this->load->model('Model_siswa');
    }



    function data()
    {

        // nama tabel
        $table = 'tbl_siswa';
        // nama PK
        $primaryKey = 'nim';
        // list field
        $columns = array(
            array(
                'db' => 'foto',
                'dt' => 'foto',
                'formatter' => function ($d) {
                    if (empty($d)) {
                        return "<img width='30px' src='" .  base_url() . "/uploads/unnamed.jpg'>";
                    } else {
                        return "<img width='20px' src='" .  base_url() . "/uploads/" . $d . "'>";
                    }
                }
            ),
            array('db' => 'nim', 'dt' => 'nim'),
            array('db' => 'nama', 'dt' => 'nama'),
            array('db' => 'tempat_lahir', 'dt' => 'tempat_lahir'),
            array('db' => 'tanggal_lahir', 'dt' => 'tanggal_lahir'),
            array(
                'db' => 'nim', 'dt' => 'aksi',
                'formatter' => function ($d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('siswa/edit/' . $d, '<i class="fas fa-edit"></i>', 'class=" btn btn-sm btn-info" title="Edit"') . ' &nbsp; &nbsp;
                        ' . anchor('siswa/delete/' . $d, '<i class="fas fa-trash"></i>', 'class=" btn btn-sm btn-danger"');
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

    function index()
    {
        $this->template->load('template', 'siswa/list');
    }

    function add()
    {
        if (isset($_POST['submit'])) {
            $uploadFoto = $this->upload_foto_siswa();
            $this->Model_siswa->save($uploadFoto);
            redirect('siswa');
        } else {
            $this->template->load('template', 'siswa/add');
        }
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            $uploadFoto = $this->upload_foto_siswa();
            $this->Model_siswa->update($uploadFoto);
            redirect('siswa');
        } else {
            $nim           = $this->uri->segment(3);
            $data['siswa'] = $this->db->get_where('tbl_siswa', array('nim' => $nim))->row_array();
            $this->template->load('template', 'siswa/edit', $data);
        }
    }
    function confierDel()
    {
        if (isset($_POST['submit'])) {
            redirect('siswa');
        } else {
            $nim           = $this->uri->segment(3);
            $data['siswa'] = $this->db->get_where('tbl_siswa', array('nim' => $nim))->row_array();
            $this->template->load('template', 'siswa/validate', $data);
        }
    }

    function delete()
    {
        $nim = $this->uri->segment(3);
        if (!empty($nim)) {
            // proses delete data
            $this->db->where('nim', $nim);
            $this->db->delete('tbl_siswa');
        }
        redirect('siswa');
    }

    function upload_foto_siswa()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 1024; // imb
        $this->load->library('upload', $config);
        // proses upload
        $this->upload->do_upload('userfile');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }


    function siswa_aktif()
    {
        $data['data'] = $this->db->get('tbl_siswa')->result();
        //print_r( $data['data']);
        $this->template->load('template', 'siswa/siswa_aktif', $data);
    }


    function load_siswa()
    {
        // $nim = $_GET('nim');
        // $data = $this->db->get_where('tbl_siswa', ['nim'=>$nim])->result();
        $rombel = $_GET['rombel'];
        if ($rombel == 0) {
            $data = $this->db->get('tbl_siswa')->result();
        } else {
            $data = $this->db->get_where('tbl_siswa', ['id_rombel' => $rombel])->result();
        }
        if (!empty($data)) {
            foreach ($data as $row) : ?>
                <tr>
                    <td><?php echo $row->nim ?></td>
                    <td><?php echo $row->nama ?></td>
                    <td><?php echo $row->tempat_lahir ?></td>
                </tr>
            <?php endforeach ?> <?php

                            } else {
                                ?>
            <tr>
                <td>Data tidak ada</td>
            </tr>
            <?php

                            }
                        }
                        function load_siswa_by_jurusan()
                        {
                            // $nim = $_GET('nim');
                            // $data = $this->db->get_where('tbl_siswa', ['nim'=>$nim])->result();
                            $jurusan = $_GET['jurusan'];
                            $data = $this->db->get_where('tbl_siswa', ['kd_jurusan' => $jurusan])->result();
                            if (!empty($data)) {
                                foreach ($data as $row) : ?>
                <tr>
                    <td><?php echo $row->nim ?></td>
                    <td><?php echo $row->nama ?></td>
                    <td><?php echo $row->tempat_lahir ?></td>
                </tr>
            <?php endforeach ?> <?php

                            } else {
                                ?>
            <tr>
                <td>Data tidak ada</td>
            </tr>
<?php

                            }
                        }

                        function load_data_siswa_by_rombel()
                        {
                            $rombel = $_GET['rombel'];
                            echo "<table class='table table-bordered'>
        <thead>
            <tr><th width='90'>NIM</th><th>NAMA</th><th>TEMPAT LAHIR</th></tr></thead>";
                            $this->db->where('id_rombel', $rombel);
                            $siswa = $this->db->get('tbl_siswa');
                            foreach ($siswa->result() as $row) {
                                echo "<tr><td>$row->nim</td><td>$row->nama</td><td>$row->tempat_lahir</td></tr>";
                            }
                            echo "</table>";
                        }
                        function load_data_siswa_by_jurusan()
                        {
                            $jurusan = $_GET['jurusan'];

                            echo "<table class='table table-bordered'>
        <thead>
            <tr><th width='90'>NIM</th><th>NAMA</th><th>TEMPAT LAHIR</th></tr></thead>";
                            $this->db->where('kd_jurusan', $jurusan);
                            $siswa = $this->db->get('tbl_siswa');
                            foreach ($siswa->result() as $row) {
                                echo "<tr><td>$row->nim</td><td>$row->nama</td><td>$row->tempat_lahir</td></tr>";
                            }
                            echo "</table>";
                        }


                        function data_by_rombel_excel()
                        {
                            $this->load->library('CPHP_excel');
                            $objPHPExcel = new PHPExcel();
                            $objPHPExcel->getActiveSheet()->setCellValue('A1', 'NIM');
                            $objPHPExcel->getActiveSheet()->setCellValue('B1', 'SISWA');
                            $objPHPExcel->getActiveSheet()->setCellValue('C1', 'TEMPAT LAHIR');

                            $rombel = $_POST['rombel'];
                                $this->db->where('id_rombel', $rombel);
                                $siswa = $this->db->get('tbl_siswa');
                                $no = 2;
                                foreach ($siswa->result() as $row) {
                                    $objPHPExcel->getActiveSheet()->setCellValue('A' . $no, $row->nim);
                                    $objPHPExcel->getActiveSheet()->setCellValue('B' . $no, $row->nama);
                                    $objPHPExcel->getActiveSheet()->setCellValue('C' . $no, $row->tempat_lahir);
                                    $no++;

                                    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                                    $objWriter->save("data-siswa.xlsx");
                                    $this->load->helper('download');
                                    force_download('data-siswa.xlsx', NULL);
                                }
                            
                               
                        }
                    
                        function data_by_jurusan_excel()
                        {
                            $this->load->library('CPHP_excel');
                            $objPHPExcel = new PHPExcel();
                            $objPHPExcel->getActiveSheet()->setCellValue('A1', 'NIM');
                            $objPHPExcel->getActiveSheet()->setCellValue('B1', 'SISWA');
                            $objPHPExcel->getActiveSheet()->setCellValue('C1', 'TEMPAT LAHIR');

                            $jurusan = $_POST['jurusan'];
                            $this->db->where('kd_jurusan', $jurusan);
                            $siswa = $this->db->get('tbl_siswa');
                            $no = 2;
                            foreach ($siswa->result() as $row) {
                                $objPHPExcel->getActiveSheet()->setCellValue('A' . $no, $row->nim);
                                $objPHPExcel->getActiveSheet()->setCellValue('B' . $no, $row->nama);
                                $objPHPExcel->getActiveSheet()->setCellValue('C' . $no, $row->tempat_lahir);
                                $no++;
                            }

                            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                            $objWriter->save("data-siswa.xlsx");
                            $this->load->helper('download');
                            force_download('data-siswa.xlsx', NULL);
                        }
                    }

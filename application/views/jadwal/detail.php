<!-- <pre><p><?php print_r($dataku['startTime1']); ?></p>
<p><?php print_r($dataku['endTime1']); ?></p></pre> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/AdminLTE/dist/css/adminlte.min.css">
</head>
<style>
    .line-tilte {
        border: 0;
        border-style: inset;
        border-top: 2px solid #000;

    }
</style>

<body>
    <img src="./uploads/logo/logo_sekolah.png" style="position:absolute; width:100px; height:auto;">
    <table style="width:100%;">
        <tr>
            <td align="center">
                <span style="font-size:20px;">PEMERINTAH PROVINSI JAWA BARAT</span><br>
                <span>DINAS PENDIDIKAN</span><br>
                <span>SMK NEGERI 1 SAGARANTEN</span><br>
                <span style="font-size:14px; line-height:1px;">Alamat : Jl. Raya Cigadog KM. 12 - Sagaranten - Sukabumi 43181</span><br>
                <span style="font-size:10px; line-height:1px;">Email : smkn1sagaranten@gmail.com Website : www.smkn1sagaranten.sch.id</span>
            </td>
        </tr>
    </table>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <br>
    <table style="width:100%;">
        <tr>
            <td align="center">
                <span style="font-size:16px;">JADWAL PELAJARAN</span><br>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered table-striped" style="width:90%; font-size:12px; margin-left:auto; margin-right:auto;">
        <thead>
            <tr>
                <th>JAM</th>
                <th>KELAS</th>
                <th>PELAJARAN</th>
                <th>RUANG</th>
                <th>GURU</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php print_r($dataku['startTime1']); ?> - <?php print_r($dataku['endTime1']); ?></td>
                <td><?php print_r($dataku['kelas1']); ?></td>
                <td><?php print_r($dataku['mapel1']); ?></td>
                <td><?php print_r($dataku['ruangan1']); ?></td>
                <td><?php print_r($dataku['guru1']); ?></td>
            </tr>
            <tr>
                <td><?php print_r($dataku['startTime2']); ?> - <?php print_r($dataku['endTime2']); ?></td>
                <td><?php print_r($dataku['kelas2']); ?></td>
                <td><?php print_r($dataku['mapel2']); ?></td>
                <td><?php print_r($dataku['ruangan2']); ?></td>
                <td><?php print_r($dataku['guru2']); ?></td>
            </tr>
            <tr>
                <td><?php print_r($dataku['startTime3']); ?> - <?php print_r($dataku['endTime3']); ?></td>
                <td><?php print_r($dataku['kelas3']); ?></td>
                <td><?php print_r($dataku['mapel3']); ?></td>
                <td><?php print_r($dataku['ruangan3']); ?></td>
                <td><?php print_r($dataku['guru3']); ?></td>
            </tr>
            <tr>
                <td><?php print_r($dataku['startTime4']); ?> - <?php print_r($dataku['endTime4']); ?></td>
                <td><?php print_r($dataku['kelas4']); ?></td>
                <td><?php print_r($dataku['mapel4']); ?></td>
                <td><?php print_r($dataku['ruangan4']); ?></td>
                <td><?php print_r($dataku['guru4']); ?></td>
            </tr>
               <tr>
                <td><?php print_r($dataku['startTime5']); ?> - <?php print_r($dataku['endTime5']); ?></td>
                <td><?php print_r($dataku['kelas5']); ?></td>
                <td><?php print_r($dataku['mapel5']); ?></td>
                <td><?php print_r($dataku['ruangan5']); ?></td>
                <td><?php print_r($dataku['guru5']); ?></td>
            </tr>
        </tbody>

    </table>
</body>

</html>
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/AdminLTE/dist/js/demo.js"></script>
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
    .line-tilte{
        border:0;
        border-style:inset;
        border-top:2px solid #000;

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
        <span style="font-size:16px;">BUKTI PEMBAYARAN</span><br>
    </td>
</tr>
</table>
<br>
<?php
            echo form_hidden('id', $keuangan['id']);
            ?>
<table class="table table-bordered table-striped" style="width:90%; font-size:12px; margin-left:auto; margin-right:auto;">
    <tr>
        <td>
            Tanggal Bayar
        </td>
        <td><?php echo $keuangan['tanggal'] ?>
    </td>
</tr>
<tr>
<td>
            NIS
        </td>
        <td><?php echo $keuangan['nim'] ?>
    </td>
</tr>
<tr>
<td>
           Nama
        </td>
        <td><?php echo $keuangan['nama'] ?>
    </td>
</tr>
<tr>
<td>
            No. Hp
        </td>
        <td><?php echo $keuangan['no_hp'] ?>
    </td>
</tr>
<tr>
<td>
            Kelas
        </td>
        <td><?php echo $keuangan['kelas'] ?>
    </td>
</tr>
<tr>
<td>
            Jurusan
        </td>
        <td><?php echo $keuangan['nama_jurusan'] ?>
    </td>
</tr>
<tr>
<td>
            Jumlah
        </td>
        <td>Rp.<?php echo $keuangan['jumlah'] ?>
    </td>
</tr>
<tr>
<td>
            Keterangan
        </td>
        <td><?php echo $keuangan['keterangan'] ?>
    </td>
</tr>
</table>
<br>
<table style="font-size:12px; width:90%; margin-left:auto; margin-right:auto;">
    <tr>
        <td>Sukabumi, <?php
date_default_timezone_set("America/New_York");
echo date('d F Y');
?><td>
</tr>
</table>
<br><br><br>
<table style="font-size:12px; width:90%; margin-left:auto; margin-right:auto;">
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TTD</td>
</tr>
<tr>
        <td>[....................................]</td>
</tr>
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

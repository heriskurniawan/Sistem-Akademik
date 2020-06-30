<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <!-- <h3 class="card-title">DataTable with default features</h3> -->
            <div class="panel-tools">
              <a href="<?php echo base_url() ?>index.php/keuangan/form" class="btn btn-info btn-sm"><i class="fas fa-plus-circle"></i> Tambah Pembayaran</a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="mytable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>TGL. BAYAR</th>
                  <th>NIM</th>
                  <th>NO. HP</th>
                  <th>JUMLAH</th>
                  <th>KETERANGAN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- jQuery -->
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
<!-- page script -->
<script>
  $(document).ready(function() {
    var t = $('#mytable').DataTable({
      "responsive": true,
      "autoWidth": false,
      "ajax": '<?php echo site_url('keuangan/data'); ?>',
      "order": [
        [2, 'asc']
      ],
      "columns": [{
          "data": null,
          "width": "50px",

        },
        {
          "data": "tanggal"
        },
        {
          "data": "nim",
          "width": "120px",

        },
        {
          "data": "no_hp"
        },
        {
          "data": "jumlah"
        },
        {
          "data": "keterangan",
          "width": "150px"
        },
        {
          "data": "aksi",
          "width": "30px",
          "sClass": "text-center"
        },
      ]
    });

    t.on('order.dt search.dt', function() {
      t.column(0, {
        search: 'applied',
        order: 'applied'
      }).nodes().each(function(cell, i) {
        cell.innerHTML = i + 1;
      });
    }).draw();
  });
</script>
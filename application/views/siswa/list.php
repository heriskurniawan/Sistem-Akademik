<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <!-- <h3 class="card-title">DataTable with default features</h3> -->
            <div class="panel-tools">
              <a href="<?php echo base_url() ?>index.php/siswa/add" class="btn btn-info btn-sm"><i class="fas fa-plus-circle"></i> Tambah Siswa</a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="mytable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>FOTO</th>
                  <th>NIM</th>
                  <th>NAMA</th>
                  <th>TEMPAT LAHIR</th>
                  <th>TANGGAL LAHIR</th>
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


<div class="modal fade" id="modal-sm">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete Confiermation</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure delete this item?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="<?php echo base_url() ?>index.php/siswa/delete/" class="btn btn-danger">Delete</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

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
      "ajax": '<?php echo site_url('siswa/data'); ?>',
      "order": [
        [2, 'asc']
      ],
      "columns": [{
          "data": null,
          "width": "50px",

        },
        {
          "data": "foto"
        },
        {
          "data": "nim",
          "width": "120px",

        },
        {
          "data": "nama"
        },
        {
          "data": "tempat_lahir"
        },
        {
          "data": "tanggal_lahir",
          "width": "150px"
        },
        {
          "data": "aksi",
          "width": "75px",
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
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <h3 class="card-title">DataTable with default features</h3> -->
                        <div class="panel-tools">
                            <a href="<?php echo base_url() ?>index.php/rombel/add" class="btn btn-info btn-sm"><i class="fas fa-plus-circle"></i> Tambah Rombel</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tblRombel" class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA ROMBEL</th>
                                    <th>JURUSAN</th>
                                    <th>KELAS</th>
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
        var t = $('#tblRombel').DataTable({
            "ajax": '<?php echo site_url('rombel/data'); ?>',
            "order": [
                [2, 'asc']
            ],
            "columns": [{
                    "data": null,
                    "width": "50px",
                    "sClass": "text-center",
                    "orderable": false,
                },
                {
                    "data": "nama_rombel"
                },
                {
                    "data": "nama_jurusan"
                },
                {
                    "data": "kelas",
                    "width": "60px",
                    "sClass": "text-center"
                },
                {
                    "data": "aksi",
                    "width": "90px"
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
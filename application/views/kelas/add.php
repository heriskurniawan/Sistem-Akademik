<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Form Tambah Kelas</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php
        echo form_open_multipart('kelas/add', 'role="form" class="form-horizontal"');
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="kd_kelas" placeholder="INPUT KODE KELAS">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <!-- <input class="form-control" type="text" placeholder="INPUT NAMA LENGKAP"> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input class="form-control" type="text" name="nama_kelas" placeholder="INPUT NAMA KELAS">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>&nbsp;&nbsp;
            <a href="<?php echo base_url() ?>index.php/kelas" name="batal" class="btn btn-danger">BATAL</a>
        </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<!-- bootstrap color picker -->

<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/AdminLTE/dist/js/demo.js"></script>
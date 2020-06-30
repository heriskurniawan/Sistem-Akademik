<div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Form Edit Siswa</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                        class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                        class="fas fa-times"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            echo form_open_multipart('siswa/edit', 'role="form" class="form-horizontal"');
            echo form_hidden('nim', $siswa['nim']);
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="nim" value="<?php echo $siswa['nim'] ?>"
                            placeholder="INPUT NIS">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- <input class="form-control" type="text" placeholder="INPUT NAMA LENGKAP"> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <input class="form-control" type="text" name="nama" value="<?php echo $siswa['nama'] ?>"
                            placeholder="INPUT NAMA LENGKAP">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <input class="form-control" type="text" name="tempat_lahir"
                            value="<?php echo $siswa['tempat_lahir'] ?>" placeholder="INPUT TEMPAT LAHIR">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" name="tanggal_lahir" value="<?php echo $siswa['tanggal_lahir'] ?>"
                                class="form-control datetimepicker-input" data-target="#reservationdate" />
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?php
                    echo form_dropdown('gender', array('P' => 'LAKI LAKI', 'W' => 'PEREMPUAN'), $siswa['gender'], "class='form-control select2'");
                  
                    ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php
                    echo cmb_dinamis('agama', 'tbl_agama', 'nama_agama', 'kd_agama', $siswa['kd_agama']);
                    ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <?php echo cmb_dinamis('rombel', 'tbl_rombel', 'nama_rombel', 'id_rombel',$siswa['id_rombel'])?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="userfile" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">CHOOSE FOTO</label><br><br>
                            <img src="<?php echo base_url()."/uploads/".$siswa['foto']?>" width="100">
                        </div>
                    </div>
                </div>
            </div>
            <br><br> <br>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>&nbsp;&nbsp;
                        <a href="<?php echo base_url()?>index.php/siswa" name="batal" class="btn btn-danger">BATAL</a>
                    </div>
                </div>
            </div>
            </form>
            <!-- /.row -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
           
        </div>
    </div>
    <!-- /.card -->

    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script
        src="<?php echo base_url()?>assets/AdminLTE./plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js">
    </script>
    <!-- InputMask -->
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js">
    </script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src="<?php echo base_url()?>assets/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Bootstrap Switch -->
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js">
    </script>

    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>assets/AdminLTE/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()?>assets/AdminLTE/dist/js/demo.js"></script>
    <script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                    'MMMM D, YYYY'))
            }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

    })
    $(function() {
        bsCustomFileInput.init();
    });
    //function form
    </script>
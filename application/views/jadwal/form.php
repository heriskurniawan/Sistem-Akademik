<section class="content">
   <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <?php
            echo form_open_multipart('jadwal/detail', 'role="form" class="form-horizontal" target="_blank"');
            ?>
            <!-- ROW 1 -->
            <div class="row">
              <div class="col-md-2">
                  <label>DARI</label>
                <div class="form-group">
                     <input class="form-control" type="time" name="startTime1" placeholder="JAM">
                </div>
             </div>
             <div class="col-md-2">
                  <label>S/D</label>
                <div class="form-group">
                     <input class="form-control" type="time" name="endTime1" placeholder="JAM">
                </div>
             </div>
             <div class="col-md-2">
             <label>KELAS</label>
                <div class="form-group">
                <?php
                    echo cmb_dinamis('kelas1', 'tbl_kelas', 'nama_kelas', 'nama_kelas');
                    ?>
                </div>
             </div>
             <div class="col-md-2">
                  <label>PELAJARAN</label>
                <div class="form-group">
                <?php
                    echo cmb_dinamis('mapel1', 'tbl_mapel', 'nama_mapel', 'nama_mapel');
                    ?>
                </div>
             </div>
             <div class="col-md-2">
             <label>RUANG</label>
                <div class="form-group">
                <?php
                    echo cmb_dinamis('ruangan1', 'tbl_ruangan', 'nama_ruangan', 'nama_ruangan');
                    ?>
                </div>
             </div>
             <div class="col-md-2">
             <label>GURU</label>
                <div class="form-group">
                <?php
                    echo cmb_dinamis('guru1', 'tbl_guru', 'nama_guru', 'nama_guru');
                    ?>
                </div>
             </div>
          </div>
           <!-- ROW 2 -->
          <div class="row">
              <div class="col-md-2">    
                <div class="form-group">
                     <input class="form-control" type="time" name="startTime2" placeholder="JAM">
                </div>
             </div>
             <div class="col-md-2">
                 
                <div class="form-group">
                     <input class="form-control" type="time" name="endTime2" placeholder="JAM">
                </div>
             </div>
             <div class="col-md-2">
                <div class="form-group">
                <?php
                    echo cmb_dinamis('kelas2', 'tbl_kelas', 'nama_kelas', 'nama_kelas');
                    ?>
                </div>
             </div>
             <div class="col-md-2">   
                <div class="form-group">
                <?php
                    echo cmb_dinamis('mapel2', 'tbl_mapel', 'nama_mapel', 'nama_mapel');
                    ?>
                </div>
             </div>
             <div class="col-md-2">
                <div class="form-group">
                <?php
                    echo cmb_dinamis('ruangan2', 'tbl_ruangan', 'nama_ruangan', 'nama_ruangan');
                    ?>
                </div>
             </div>
             <div class="col-md-2">
                <div class="form-group">
                <?php
                    echo cmb_dinamis('guru2', 'tbl_guru', 'nama_guru', 'nama_guru');
                    ?>
                </div>
             </div>
          </div>
           <!-- ROW 3 -->
          <div class="row">
              <div class="col-md-2">    
                <div class="form-group">
                     <input class="form-control" type="time" name="startTime3" placeholder="JAM">
                </div>
             </div>
             <div class="col-md-2">
                 
                <div class="form-group">
                     <input class="form-control" type="time" name="endTime3" placeholder="JAM">
                </div>
             </div>
             <div class="col-md-2">
                <div class="form-group">
                <?php
                    echo cmb_dinamis('kelas3', 'tbl_kelas', 'nama_kelas', 'nama_kelas');
                    ?>
                </div>
             </div>
             <div class="col-md-2">   
                <div class="form-group">
                <?php
                    echo cmb_dinamis('mapel3', 'tbl_mapel', 'nama_mapel', 'nama_mapel');
                    ?>
                </div>
             </div>
             <div class="col-md-2">
                <div class="form-group">
                <?php
                    echo cmb_dinamis('ruangan3', 'tbl_ruangan', 'nama_ruangan', 'nama_ruangan');
                    ?>
                </div>
             </div>
             <div class="col-md-2">
                <div class="form-group">
                <?php
                    echo cmb_dinamis('guru3', 'tbl_guru', 'nama_guru', 'nama_guru');
                    ?>
                </div>
             </div>
          </div>
           <!-- ROW 4 -->
          <div class="row">
              <div class="col-md-2">    
                <div class="form-group">
                     <input class="form-control" type="time" name="startTime4" placeholder="JAM">
                </div>
             </div>
             <div class="col-md-2">
                 
                <div class="form-group">
                     <input class="form-control" type="time" name="endTime4" placeholder="JAM">
                </div>
             </div>
             <div class="col-md-2">
                <div class="form-group">
                <?php
                    echo cmb_dinamis('kelas4', 'tbl_kelas', 'nama_kelas', 'nama_kelas');
                    ?>
                </div>
             </div>
             <div class="col-md-2">   
                <div class="form-group">
                <?php
                    echo cmb_dinamis('mapel4', 'tbl_mapel', 'nama_mapel', 'nama_mapel');
                    ?>
                </div>
             </div>
             <div class="col-md-2">
                <div class="form-group">
                <?php
                    echo cmb_dinamis('ruangan4', 'tbl_ruangan', 'nama_ruangan', 'nama_ruangan');
                    ?>
                </div>
             </div>
             <div class="col-md-2">
                <div class="form-group">
                <?php
                    echo cmb_dinamis('guru4', 'tbl_guru', 'nama_guru', 'nama_guru');
                    ?>
                </div>
             </div>
          </div>
           <!-- ROW 5 -->
          <div class="row">
              <div class="col-md-2">    
                <div class="form-group">
                     <input class="form-control" type="time" name="startTime5" placeholder="JAM">
                </div>
             </div>
             <div class="col-md-2">
                 
                <div class="form-group">
                     <input class="form-control" type="time" name="endTime5" placeholder="JAM">
                </div>
             </div>
             <div class="col-md-2">
                <div class="form-group">
                <?php
                    echo cmb_dinamis('kelas5', 'tbl_kelas', 'nama_kelas', 'nama_kelas');
                    ?>
                </div>
             </div>
             <div class="col-md-2">   
                <div class="form-group">
                <?php
                    echo cmb_dinamis('mapel5', 'tbl_mapel', 'nama_mapel', 'nama_mapel');
                    ?>
                </div>
             </div>
             <div class="col-md-2">
                <div class="form-group">
                <?php
                    echo cmb_dinamis('ruangan5', 'tbl_ruangan', 'nama_ruangan', 'nama_ruangan');
                    ?>
                </div>
             </div>
             <div class="col-md-2">
                <div class="form-group">
                <?php
                    echo cmb_dinamis('guru5', 'tbl_guru', 'nama_guru', 'nama_guru');
                    ?>
                </div>
             </div>
          </div>
         
            <div class="row">

                  </div>
                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Generate Jadwal</button>&nbsp;&nbsp;
                    <a href="<?php echo base_url()?>index.php/siswa" name="batal" class="btn btn-danger">Batal</a>
                </div>
                </form>
               
             </div> 
             
        </div>
        <!-- /.card-body -->
  
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <script src="<?php echo base_url()?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url()?>assets/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url()?>assets/AdminLTE./plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url()?>assets/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/AdminLTE/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url()?>assets/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url()?>assets/AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url()?>assets/AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="<?php echo base_url()?>assets/AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/AdminLTE/dist/js/demo.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
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
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
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

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
  $(function () {
  bsCustomFileInput.init();
});
//function form

</script>
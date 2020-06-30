<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form Edit Mata Pelajaran</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <?php
            echo form_open_multipart('tahunakademik/edit', 'role="form" class="form-horizontal"');
            echo form_hidden('id_tahun_akademik', $tahunakademik['id_tahun_akademik']);
            ?>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                     <input class="form-control" type="text" name="tahun_akademik" value="<?php echo $tahunakademik['tahun_akademik'] ?>">
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
                <?php echo form_dropdown('is_aktif',array('n'=>'TIDAK','y'=>'AKTIF'),$tahunakademik['is_aktif'],"class='form-control select2'")?>
                </div>
             </div>
          </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>&nbsp;&nbsp;
                    <a href="<?php echo base_url()?>index.php/tahunakademik" name="batal" class="btn btn-danger">BATAL</a>
                </div>
                </form> 
             </div> 

  <!-- /.card-body -->
</div>

<script src="<?php echo base_url()?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url()?>assets/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
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

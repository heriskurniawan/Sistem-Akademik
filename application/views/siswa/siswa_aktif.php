<div class="row">
  <div class="col-md-5">
    <!-- Box Comment -->
    <div class="card card-widget">
      <div class="card-header">
        <span class="description">Filter Siswa</span>
        <!-- /.user-block -->
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div>
          <?php echo form_open('siswa/data_by_rombel_excel'); ?>
          <table class="table table-striped table-bordered">
            <tr>
              <td width="150px">Rombel</td>
              <td width="300px">
                <div> <?php echo cmb_dinamis2('rombel', 'rombel', 'tbl_rombel', 'nama_rombel', 'id_rombel') ?>
              </td>
              <td width="100px">
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Export</button>
              </td>
            </tr>

          </table>
          </form>
        </div>
         <div>
          <?php echo form_open('siswa/data_by_jurusan_excel'); ?>
          <table class="table table-striped table-bordered">
            <tr>
              <td width="150px">Jurusan</td>
              <td width="300px">
                <?php echo cmb_dinamis2('jurusan', 'jurusan', 'tbl_jurusan', 'nama_jurusan', 'kd_jurusan') ?>
              </td>
              <td width="100px">
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Export</button>
              </td>
            </tr>
          </table>
          </form>
        </div>

      </div>
      <!-- /.card-body -->

      <!-- /.card-footer -->

      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
  <div class="col-md-7">
    <!-- Box Comment -->
    <div class="card card-widget">
      <div class="card-header">
        <span class="description">List Siswa</span>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body" style="overflow-x:auto;">
        <table class="table table-hover" id="siswa">
          <thead>
            <th>NIM</th>
            <th>NAMA</th>
            <th>TEMPAT LAHIR</th>
          </thead>
          <tbody>

          </tbody>

        </table>
        <!-- <div id="dataSiswa"></div> -->
      </div>

      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>


<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url() ?>assets/AdminLTE./plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="<?php echo base_url() ?>assets/AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/AdminLTE/dist/js/demo.js"></script>
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
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function(start, end) {
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

    $("input[data-bootstrap-switch]").each(function() {
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
  $(function() {
    bsCustomFileInput.init();
  });
  //function form
</script>
<script type="text/javascript">
  $(document).ready(function() {
    siswa();
    $('#rombel').change(function() {

      // let a = $(this).val();
      // console.log(a);
      siswa();

    });
    $('#jurusan').change(function() {

      // let a = $(this).val();
      //  console.log(a);
      siswabyjurusan();

    });


  });

  function siswa() {
    var rombel = $('#rombel').val();
    $.ajax({
      url: '<?php echo base_url() ?>index.php/siswa/load_siswa',
      data: "rombel=" + rombel,
      success: function(data) {
        // $("#siswa tbody").html('<tr><td colspan="4" align="cneter">Tidak ada data</td></tr>')
        $("#siswa tbody").html(data);
        //console.log(data);
      }
    });
  }

  function siswabyjurusan() {
    var jurusan = $('#jurusan').val();
    $.ajax({
      url: '<?php echo base_url() ?>index.php/siswa/load_siswa_by_jurusan',
      data: "jurusan=" + jurusan,
      success: function(data) {
        //$("#siswa tbody").html('<tr><td colspan="4" align="cneter">Tidak ada data</td></tr>')
        $("#siswa tbody").html(data);
        // console.log(data);
      }
    });
  }
</script>
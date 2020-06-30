<section class="content">
    <div class="container-fluid">
    <input type="hidden" id="kelas1tkj2" value="<?php print_r($dataku['total1tkj2']); ?>" class="form-control">
        <input type="hidden" id="kelas1tkj1" value="<?php print_r($dataku['total1tkj1']); ?>" class="form-control">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Pria</span>
                        <span class="info-box-number">
                        <?php print_r($dataku['totalpria']); ?>
                            
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Wanita</span>
                        <span class="info-box-number"><?php print_r($dataku['totalwanita']); ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-times-circle"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Siswa Non Aktif</span>
                        <span class="info-box-number"><?php print_r($dataku['nonaktif']); ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check-circle"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Siswa Aktif</span>
                        <span class="info-box-number"><?php print_r($dataku['aktif']); ?></span>
            
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>

        <div class="row">
            <div class="col-md-8">
                <!-- Box Comment -->
                <div class="card card-widget">
                    <div class="card-header">
                        <span class="description">Data Siswa</span>
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
                       
                        <div class="chart">
                            <canvas id="myCanvas" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <!-- /.card-footer -->

                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
                <!-- Box Comment -->
                <div class="card card-widget">
                    <div class="card-header">
                        <span class="description">Status</span>
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

                        <p class="text-center">
                            <strong>Task Completion</strong>
                        </p>

                        <div class="progress-group">
                            Belum Upload Foto
                            <span class="float-right"><b>160</b>/200</span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width: 80%"></div>
                            </div>
                        </div>
                        <!-- /.progress-group -->

                        <div class="progress-group">
                            Pembayaran Belum Lunas
                            <span class="float-right"><b>310</b>/400</span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger" style="width: 75%"></div>
                            </div>
                        </div>

                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text">Siswa Belum Ujian</span>
                            <span class="float-right"><b>480</b>/800</span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" style="width: 60%"></div>
                            </div>
                        </div>

                        <!-- /.progress-group -->
                        <div class="progress-group">
                            Siswa Tidak Lulus
                            <span class="float-right"><b>50</b>/500</span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-warning" style="width: 50%"></div>
                            </div>
                        </div>
                         <!-- /.progress-group -->
                         <div class="progress-group">
                            Biodata Siswa Belum Lengkap
                            <span class="float-right"><b>550</b>1500</span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" style="width: 40%"></div>
                            </div>
                        </div>
                        <!-- /.progress-group -->


                    </div>

                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    </div>
    <!-- Main content -->

    <!-- /.content -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        // var kls1tkj1 = document.getElementById("kelas1tkj1").value
        // var kls1tkj2 = document.getElementById("kelas1tkj2").value
        // var klsArray = [kls1tkj1,kls1tkj2,kls1tkj1,kls1tkj2];

       // alert(klsArray);
       $.ajax({
           url:'<?php echo base_url(); ?>index.php/dashboard/getDatakelas',
           method:'post',
           data:{data},
           dataType:'json',
           success:function(data)
           {
               alert('test');
               }

       });
 

        var densityData = {
            label: 'Jumlah siswa',
            data: ['300','1000','700','800']
        };
        var barChart = new Chart(myCanvas, {
            type: 'bar',
            data: {
                labels: ["1TKJ1", "1TKJ2", "2TKJ1", "2TKJ2"],
                datasets: [densityData]
            }
        });
    </script>
    </body>

    </html>
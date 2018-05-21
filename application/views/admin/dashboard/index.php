<!-- iCheck -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/iCheck/flat/blue.css">
<!-- Morris chart -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/morris/morris.css">
<!-- jvectormap -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
<!-- Date Picker -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datepicker/datepicker3.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> 


<section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>User</h3>
              <p>SOKA Jamur</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url('admin/users'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
	   <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Barang</h3>
              <p>SOKA Jamur</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?= base_url('adminlte/general_form'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Pesan</h3>
              <p>SOKA Jamur</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?= base_url('adminlte/inline'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Laporan<sup style="font-size: 20px"></sup></h3>
              <p>SOKA Jamur</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= base_url('adminlte/data_table'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      
      <div class="row">
		<div class="box-body table-responsive">
		
		<table id="example1" class="table table-bordered table-striped">
		<h1>ARTIKEL</h1> 
		<a style="width:15%;" href="<?= base_url('admin/Dashboard/add'); ?>" class="btn btn-info bg-purple"> Tambah Artikel <i class="fa fa-plus-square"></i></a>
        <thead>
        <tr>
          <th>Judul</th>
          <th style="width:20%;">Gambar</th>
          <th>Tanggal</th>
          <th style="width: 150px;" class="text-center">Option</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($all_artikel as $row): ?>
          <tr>
            <td><?= $row['JUDUL']; ?></td>
            <td><img class="img-responsive" src="<?php echo base_url().'assests/img/'.$row['GAMBAR'];?>"></td>
            <td><?= $row['TGL_ARTIKEL']; ?></td>
            <td class="text-center"><a href="<?= base_url('admin/Dashboard/edit/'.$row['ID_ARTIKEL']); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/Dashboard/del/'.$row['ID_ARTIKEL']); ?>" class="btn btn-danger btn-flat">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
		</table>
		</div>
      </div>
  

    </section>

  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="<?= base_url() ?>public/plugins/morris/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= base_url() ?>public/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url() ?>public/plugins/knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?= base_url() ?>public/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?= base_url() ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?= base_url() ?>public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?= base_url() ?>public/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url() ?>public/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>public/dist/js/demo.js"></script>

<script>
$("#dashboard1").addClass('active');
</script>  
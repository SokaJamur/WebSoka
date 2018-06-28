<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Penjualan
        <small>SOKA Jamur</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Laporan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Laporan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
      
			
      <form action="<?php echo base_url('admin/laporan/cari_data');?>" method="get">
     Tanggal Awal <input name="tgl_awal" type="date"></input>
      Tanggal Akhir <input name="tgl_akhir" type="date"></input>
      <button>Cari</button> 
			</form>
        <table class="table table-bordered table-striped ">
        <thead>
        <tr>
		  <th>No</th>
          <th>Nama User</th>
          <th>Alamat</th>
		  <th>No HP</th>
          <th>Barang</th>
          <th>Jumlah</th>
		  <th>Tgl Pesan</th>
		  <th>Tgl Kirim</th>
          <th>Total</th>
        </tr>
        </thead>
        <tbody>
          <?php 
		  $no = 1;
		  foreach($lapor as $row){
		  ?>
          <tr>
			<td><?php echo $no++; ?></td>
            <td><?= $row['NAMA'];?></td>
            <td><?= $row['ALAMAT']; ?></td>
			<td><?= $row['NO_HP']; ?></td>
            <td><?= $row['NAMA_BARANG']; ?></td>
            <td><?= $row['JUMLAH_PESANAN']; ?></td>
			<td><?= $row['TGL_PESAN']; ?></td>
			<td><?= $row['TGL_KIRIM']; ?></td>
			<td><?= $row['TOTAL']; ?></td>
          </tr>
		  <?php } ?>
        </tbody>
       
      </table>
	  <br>
	  <h4><b>TOTAL PENJUALAN KESELURUHAN <?php foreach ($ttlbrg as $key => $value) { echo $this->fungsi->rupiah($value->TOTAL); } ?></b></h4><br><br>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


    <!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script>
  $("#tables").addClass('active');
  $("#data-tables").addClass('active');
</script>  

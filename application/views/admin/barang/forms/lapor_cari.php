<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">


    <section class="content-header">
      <h1>
        Laporan Penjualan
        <small>SOKA Jamur</small>
      </h1><br>
      <button onclick="window.print();">Cetak</button>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Laporan</a></li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Laporan <?php $tgl_awal = $this->input->get('tgl_awal', TRUE);
      $tgl_akhir = $this->input->get('tgl_akhir', TRUE); echo "Tanggal ".$tgl_awal." Sampai ".$tgl_akhir;?></h3> 

            </div>
            <!-- /.box-header -->
            <div class="box-body">
			
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
		  foreach($cari as $row){
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
      <h4><b>TOTAL PENJUALAN<?php foreach ($ttlbrg as $row) { echo $this->fungsi->rupiah($row['TOTAL']); } ?></b></h4>            </div>

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

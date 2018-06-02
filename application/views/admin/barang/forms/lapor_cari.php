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
			Bulan
			<select name="bulan">
			<option value="01">Januari</option>
			<option value="02">Februari</option>
			<option value="03">Maret</option>
			<option value="04">April</option>
			<option value="05">Mei</option>
			<option value="06">Juni</option>
			<option value="07">Juli</option>
			<option value="08">Agustus</option>
			<option value="09">September</option>
			<option value="10">Oktober</option>
			<option value="12">November</option>
			<option value="12">Desember</option>
			</select>
			Tahun
			<select name="tahun">
			<?php
			$mulai= date('Y');
			for($i = $mulai;$i<$mulai + 50;$i++){
			$sel = $i == date('Y') ? ' selected="selected"' : '';
			echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
			}
			?>
			</select>
			<a href="<?= base_url('admin/laporan/cari_data'); ?>" class="btn btn-info btn-flat">Cari</a>
			<br><br>
			
        <table id="example1" class="table table-bordered table-striped ">
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
	  <h4><b>TOTAL PENJUALAN <?php foreach ($ttlbrg as $key => $value) { echo $this->fungsi->rupiah($value->TOTAL); } ?></b></h4><br><br>
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

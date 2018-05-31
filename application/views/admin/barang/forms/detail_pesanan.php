<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pesanan Pembeli
        <small>SOKA Jamur</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Pesanan Pembeli</a></li>
		<li><a href="#">Detail Pesanan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Pesanan</h3>
			  <a href="<?= base_url('admin/pesanan/'); ?>" class="btn btn-danger btn-left">Tutup</a>
            </div>
            <div class="box-body">
        <table id="example1" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>Nama User</th>
          <th>Alamat</th>
		  <th>No HP</th>
          <th>Barang</th>
          <th>Jumlah</th>
		  <th>Tgl Pesan</th>
		  <th>Tgl Kirim</th>
          <th>Total</th>
		  <th>Status</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($detail as $row): ?>
          <tr>
            <td><?= $row['NAMA'];?></td>
            <td><?= $row['ALAMAT']; ?></td>
			<td><?= $row['NO_HP']; ?></td>
            <td><?= $row['NAMA_BARANG']; ?></td>
            <td><?= $row['JUMLAH_PESANAN']; ?></td>
			<td><?= $row['TGL_PESAN']; ?></td>
			<td><?= $row['TGL_KIRIM']; ?></td>
			<td><?= $row['TOTAL']; ?></td>
			<td>Status</td>
          </tr>
          <?php endforeach; ?>
        </tbody>
       
      </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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

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
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pesanan Soka Jamur</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        <table id="example1" class="table table-bordered table-striped ">
        <thead>
        <tr>
			<th>No</th>
			<th>Nama User</th>
			<th>Alamat</th>
			<th>Barang</th>
			<th>Jumlah</th>
			<th>Total</th>
			<th>Status</th>
			<th>Option</th>
        </tr>
        </thead>
        <tbody>
          <?php 
		  $no = 1;
		  foreach($pesan as $row){
		  ?>
          <tr>
			<td><?php echo $no++; ?></td>
            <td><?= $row['NAMA'];?></td>
            <td><?= $row['ALAMAT']; ?></td>
            <td><?= $row['NAMA_BARANG']; ?></td>
            <td><?= $row['JUMLAH_PESANAN']; ?></td>
			<td><?= $row['TOTAL']; ?></td>
			<td><?= $row['STATUS'];?></td>
			<td class="text-center"><a href="<?= base_url('admin/pesanan/detail_/'.$row['ID_PESAN']); ?>" class="btn btn-info btn-flat">Detail</a></td>
          </tr>
		  <?php } ?>
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

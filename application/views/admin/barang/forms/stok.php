 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Stok
        <small>SOKA Jamur</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Tambah Stok</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
		  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Barang</h3>
            </div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped ">
			<thead>
			<tr>
				<th>Nama Barang</th>
				<th>Stok</th>
				<th>Harga</th>
				<th class="text-center">Option</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($barang_ as $row): ?>
			<tr>
				<td><?= $row['NAMA_BARANG']; ?></td>
				<td><?= $row['STOK']; ?></td>
				<td><?= $row['HARGA']; ?></td>
				<td class="text-center"><a href="<?= base_url('admin/barang/add_stok/'.$row['ID_BARANG']); ?>" class="btn btn-info btn-flat">Tambah Stok</a></td>
			</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
		</div>
		</div>
        </div>
    </section>
    <script>
  $("#forms").addClass('active');
  $("#general").addClass('active');
</script>  
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
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">JAMUR</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
				<div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_jamur" placeholder>
                  </div>
                </div>
                <div class="form-group">
                  <label for="stok" class="col-sm-2 control-label">Stok</label>

                  <div class="col-sm-10">
                    <input type="stok" class="form-control" id="stok_jamur" placeholder>
                  </div>
                </div>
                <div class="form-group">
                  <label for="harga" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="harga_jamur" placeholder>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
            </form>
          </div>
		  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Jamur</h3>
            </div>
		<div class="box-body table-responsive">
			<table id="jamur" class="table table-bordered table-striped ">
			<thead>
			<tr>
				<th>Nama Barang</th>
				<th>Stok</th>
				<th>Harga</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($barang_jamur as $row): ?>
			<tr>
				<td><?= $row['NAMA_BARANG']; ?></td>
				<td><?= $row['STOK']; ?></td>
				<td><?= $row['HARGA']; ?></td>
			</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
		</div>
		</div>

        </div>
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">BAGLOG</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
				<div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_baglog" placeholder>
                  </div>
                </div>
                <div class="form-group">
                  <label for="stok" class="col-sm-2 control-label">Stok</label>

                  <div class="col-sm-10">
                    <input type="stok" class="form-control" id="stok_baglog" placeholder>
                  </div>
                </div>
                <div class="form-group">
                  <label for="harga" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="harga_baglog" placeholder>
                  </div>
                </div>
              </div>
			   <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
            </form>
          </div>
		  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Baglog</h3>
            </div>
			<div class="box-body table-responsive">
			<table id="jamur" class="table table-bordered table-striped ">
			<thead>
			<tr>
				<th>Nama Barang</th>
				<th>Stok</th>
				<th>Harga</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($barang_jamur as $row): ?>
			<tr>
				<td><?= $row['NAMA_BARANG']; ?></td>
				<td><?= $row['STOK']; ?></td>
				<td><?= $row['HARGA']; ?></td>
			</tr>
			<?php endforeach; ?>
			</tbody>
       
			</table>
		</div>
		</div>
        </div>
      </div>
    </section>
    <script>
  $("#forms").addClass('active');
  $("#general").addClass('active');
</script>  
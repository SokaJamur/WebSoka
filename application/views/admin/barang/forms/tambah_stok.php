<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Stok</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
           
            <?php echo form_open(base_url('admin/barang/add_stok/'.$barang['ID_BARANG']), 'class="form-horizontal"');  ?> 
			
              <div class="form-group">
                <div class="form-group">
                  <label for="nama"  class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama" disabled value="<?= $barang['NAMA_BARANG']; ?>" class="form-control" id="nama_jamur" placeholder>
                  </div>
                </div> 
                <div class="form-group">
                  <label for="stok"  class="col-sm-2 control-label">Stok</label>

                  <div class="col-sm-10">
                    <input type="number" min="0" oninput="validity.valid||(value='');" name="stok" class="form-control" id="stok_jamur" placeholder>
                  </div>
                </div>
                <div class="form-group">
                  <label for="harga" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-10">
                    <input type="number" min="0" name="harga" oninput="validity.valid||(value='');" value="<?= $barang['HARGA']; ?>" class="form-control" id="harga_jamur" placeholder>
                  </div>
                </div>
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Tambah" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section>
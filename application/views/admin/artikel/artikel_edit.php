<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Artikel</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
          <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?>
           
            <?php echo form_open(base_url('admin/dashboard/edit/'.$artikel['ID_ARTIKEL']), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="judul" class="col-sm-2 control-label">Judul</label>
                <div class="col-sm-9">
                  <input type="text" name="judul" value="<?= $artikel['JUDUL']; ?>" class="form-control" id="judul" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="isi" class="col-sm-2 control-label">Isi</label>
                <div class="col-sm-9">
                  <textarea style="width:520px; height:450px" name="isi"><?= $artikel['ISI']; ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="gambar" class="col-sm-2 control-label">Gambar</label>
                <div class="col-sm-9">
                  <input type="file" name="gambar" value="<?= $artikel['GAMBAR']; ?>" class="file" id="gambar" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Edit" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section>
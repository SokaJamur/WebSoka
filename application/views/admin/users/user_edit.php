<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit User</h3>
        </div>
        <div class="box-body my-form-body">
          <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?>
           
            <?php echo form_open(base_url('admin/users/edit/'.$user['ID_USER_']), 'class="form-horizontal"' )?> 
              <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-9">
                  <input type="text" name="nama" value="<?= $user['NAMA']; ?>" class="form-control" id="nama" placeholder="">
                </div>
              </div>
			  
			  <div class="form-group">
                <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-9">
                  <input type="text" name="alamat" value="<?= $user['ALAMAT']; ?>" class="form-control" id="alamat" placeholder="">
                </div>
              </div>
			  
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" name="email" value="<?= $user['EMAIL']; ?>" class="form-control" id="email" placeholder="">
                </div>
              </div>
			  
              <div class="form-group">
                <label for="no_hp" class="col-sm-2 control-label">No HP</label>
                <div class="col-sm-9">
                  <input type="number" name="no_hp" value="<?= $user['NO_HP']; ?>" class="form-control" id="no_hp" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Perbarui" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close(); ?>
          </div>
      </div>
    </div>
  </div>  

</section> 
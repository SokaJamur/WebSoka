 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

	<section class="content-header">
      <h1>
        User
        <small>SOKA Jamur</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">User</a></li>
      </ol>
    </section>

 <section class="content">
   <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data User</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No Hp</th>
          <th>Email</th>
          <th>Level</th>
          <th style="width: 150px;" class="text-right">Option</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($all_users as $row): ?>
          <tr>
            <td><?= $row['NAMA']; ?></td>
            <td><?= $row['ALAMAT']; ?></td>
            <td><?= $row['NO_HP']; ?></td>
            <td><?= $row['EMAIL']; ?></td>
            <td><span class="btn btn-primary btn-flat btn-xs"><?= ($row['LEVEL'] == 'admin')? 'admin': 'user'; ?><span></td>
            <td class="text-right"><a href="<?= base_url('admin/users/edit/'.$row['ID_USER_']); ?>" class="btn btn-info btn-flat <?= ($row['LEVEL'] == 'admin')? 'disabled': ''?>">Edit</a><a href="<?= base_url('admin/users/del/'.$row['ID_USER_']); ?>" class="btn btn-danger btn-flat <?= ($row['LEVEL'] == 'admin')? 'disabled': ''?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
       
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>  

<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script> 
<script>
$("#view_users").addClass('active');
</script>        

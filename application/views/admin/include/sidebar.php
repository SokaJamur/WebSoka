<?php 
$cur_tab = $this->uri->segment(2)==''?'dashboard': $this->uri->segment(2);  
?>  

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= ucwords($this->session->userdata('name')); ?></p>
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li id="dashboard" class="treeview">
          <a href="<?= base_url('admin/dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
      </ul>

      <ul class="sidebar-menu">
        <li id="users" class="treeview">
            <a href="<?= base_url('admin/users'); ?>">
            <i class="ion ion-person"></i> <span>Users</span>
            </a>
		</li>
		<li id="forms" class="treeview">
          <a href="<?= base_url('adminlte/general_form'); ?>">
            <i class="fa fa-pie-chart"></i> <span>Stok Barang</span>
          </a>
        </li>
        <li id="charts" class="treeview">
          <a href="<?= base_url('adminlte/inline'); ?>">
            <i class="ion ion-bag"></i>
            <span>Pesanan Pembeli</span>
		  </a>
        </li>
        <li id="adminlte" class="treeview">
          <a href="<?= base_url('adminlte/data_table'); ?>">
            <i class="ion ion-stats-bars"></i>
            <span>Laporan</span>
          </a>
		</li>
      </ul>


    </section>
    <!-- /.sidebar -->
  </aside>

  
<script>
  $("#<?= $cur_tab; ?>").addClass('active');
</script>

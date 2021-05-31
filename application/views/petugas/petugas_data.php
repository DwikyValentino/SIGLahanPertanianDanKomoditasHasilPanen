<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Petugas
  <small>Pengguna</small> 
  </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li><a href="#">Petugas</a></li>
      <!-- <li class="active">Blank page</li> -->
    </ol>
</section>
 
    <!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Petugas</h3>
            <div class="pull-right">
                <a href="<?=site_url('petugas/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i>Tambah Petugas
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Fullname</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
                    <tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->fullname?></td>
                        <td><?=$data->username?></td>
                        <td><?=$data->email?></td>
                        <td class="text-center" width="160px">
                            <form action="<?=site_url('petugas/delete')?>" method="post">
                                <a href="<?=site_url('petugas/edit/'.$data->id)?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Ubah
                                </a>
                                <input type="hidden" name="id" value="<?=$data->id?>">
                                <button onclick="return confirm('Apakah Anda yakin ingin menghapus User ini?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    <tr>
                    <?php 
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>

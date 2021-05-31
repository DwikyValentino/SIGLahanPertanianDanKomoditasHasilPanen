<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Luas Panen
  <small>Control Panel</small>
  </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li><a href="#">Luas Panen</a></li>
      <!-- <li class="active">Blank page</li> -->
    </ol>
</section>

<!-- Main content -->
  <section class="content">

  <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Luas Panen</h3>
            <div class="pull-right">
                <a href="<?=site_url('luaspanen/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-bar-chart"></i>Tambah Data
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Komoditas</th>
                        <th>Jumlah</th>
                        <th>Dari Tanggal</th>
                        <th>Sampai Tanggal</th>
                        <th>Kecamatan</th>
                        <th>Action</th>
                    <tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->namakomoditas?></td>
                        <td><?=$data->jumlah?></td>
                        <td><?=$data->awal?></td>
                        <td><?=$data->akhir?></td>
                        <td><?=$data->kecamatan?></td>
                        <td class="text-center" width="160px">
                            <form action="<?=site_url('luaspanen/delete')?>" method="post">
                                <a href="<?=site_url('luaspanen/edit/'.$data->id_komoditas)?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Ubah
                                </a>
                                <input type="hidden" name="id_komoditas" value="<?=$data->id_komoditas?>">
                                <button onclick="return confirm('Apakah Anda yakin ingin menghapus Data ini?')" class="btn btn-danger btn-xs">
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
    <!-- /.content -->
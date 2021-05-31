<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Produksi
  <small>Control Panel</small>
  </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li><a href="#">Produksi</a></li>
      <!-- <li class="active">Blank page</li> -->
    </ol>
</section>

<!-- Main content -->
  <section class="content">

  <div class="box">
        <div class="box-header">
            <h3 class="box-title">Edit Produksi</h3>
            <div class="pull-right">
                <a href="<?=site_url('produksi')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>Kembali
                </a>
            </div>
        </div>
        <div class="box-body ">

            <div class="row">
                <div class="col-md-4">
                    <form action="" method="post">
                        <div class="form-group <?=form_error('namakomoditas') ? 'has-error' : null?>">
                            <label>Nama Komoditas*</label>
                            <input type="hidden" name="id_komoditas" value="<?=$row->id_komoditas?>">
                            <select name="namakomoditas" class="form-control">
                                <option value="">- Pilih Jenis Komoditas () -</option>
                                <option value="Padi">Padi</option>
                                <option value="Kedelai">Kedelai</option>
                                <option value="Bawang Merah">Bawang Merah</option>
                                <option value="Cabai Besar">Cabai Besar</option>
                                <option value="Cabai Rawit">Cabai Rawit</option>
                                <option value="Jagung Hibrida">Jagung Hibrida</option>
                                <option value="Jagung Komposit">Jagung Komposit</option>
                                <option value="Kacang Tanah">Kacang Tanah</option>
                                <option value="Kacang Panjang">Kacang Panjang</option>
                                <option value="Tomat">Tomat</option>
                                <option value="Terong">Terong</option>
                            </select>
                            <?=form_error('namakomoditas')?>
                        </div>
                        <div class="form-group <?=form_error('jumlah') ? 'has-error' : null?>">
                            <label>jumlah *</label>
                            <input type="text" name="jumlah" value="<?=$this->input->post('jumlah') ? $this->input->post('jumlah') : $row->jumlah?>" class="form-control">
                            <?=form_error('jumlah')?>
                        </div>
                        <div class="form-group <?=form_error('awal') ? 'has-error' : null?>">
                            <label>Dari Tanggal *</label>
                            <input type="date" name="awal" value="<?=$this->input->post('awal') ? $this->input->post('awal') : $row->awal?>" class="form-control">
                            <?=form_error('awal')?>
                        </div>
                        <div class="form-group <?=form_error('akhir') ? 'has-error' : null?>">
                            <label>Sampai Tanggal *</label>
                            <input type="date" name="akhir" value="<?=$this->input->post('akhir') ? $this->input->post('akhir') : $row->akhir?>" class="form-control">
                            <?=form_error('akhir')?>
                        <div class="form-group <?=form_error('kecamatan') ? 'has-error' : null?>">
                            <label>Kecamatan *</label>
                            <select name="kecamatan" class="form-control">
                                <option value="">- Pilih Kecamatan () -</option>
                                <option value="Salem">Salem</option>
                                <option value="Bantarkawung">Bantarkawung</option>
                                <option value="Bumiayu">Bumiayu</option>
                                <option value="Paguyangan">Paguyangan</option>
                                <option value="Sirampog">Sirampog</option>
                                <option value="Tonjong">Tonjong</option>
                                <option value="Larangam">Larangan</option>
                                <option value="Ketanggungan">Ketanggungan</option>
                                <option value="Banjarharjo">Banjarharjo</option>
                                <option value="Losari">Losari</option>
                                <option value="Tanjung">Tanjung</option>
                                <option value="Kersana">Kersana</option>
                                <option value="Bulakamba">Bulakamba</option>
                                <option value="Wanasari">Wanasari</option>
                                <option value="Songgom">Songgom</option>
                                <option value="Jatibarang">Jatibarang</option>
                                <option value="Brebes">Brebes</option>
                            </select>
                            <?=form_error('kecamatan')?>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"> </i>Save
                            </button>
                            <button type="Reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

    </section>
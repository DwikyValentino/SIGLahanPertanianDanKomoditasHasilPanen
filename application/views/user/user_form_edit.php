<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Admin
  <small>Pengguna</small>
  </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li><a href="#">Admin</a></li>
      <!-- <li class="active">Blank page</li> -->
    </ol>
</section>

    <!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Ubah Admin</h3>
            <div class="pull-right">
                <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>Kembali
                </a>
            </div>
        </div>
        <div class="box-body ">
            <div class="row">
                <div class="col-md-4">
                    <form action="" method="post">
                        <div class="form-group <?=form_error('fullname') ? 'has-error' : null?>">
                            <label>Nama *</label>
                            <input type="hidden" name="user_id" value="<?=$row->user_id?>">
                            <input type="text" name="fullname" value="<?=$this->input->post('fullname') ? $this->input->post('fullname') : $row->fullname?>" class="form-control">
                            <?=form_error('fullname')?>
                        </div>
                        <div class="form-group <?=form_error('username') ? 'has-error' : null?>">
                            <label>Username *</label>
                            <input type="text" name="username" value="<?=$this->input->post('username') ? $this->input->post('username') : $row->username?>" class="form-control">
                            <?=form_error('username')?>
                        </div>
                        <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                            <label>Password</label><small>Biarkan kosong jika tidak diganti</small>
                            <input type="password" name="password" value="<?=$this->input->post('password')?>" class="form-control">
                            <?=form_error('password')?>
                        </div>
                        <div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
                            <label>Password Confirmation</label>
                            <input type="password" name="passconf" value="<?=$this->input->post('passconf')?>" class="form-control">
                            <?=form_error('passconf')?>
                        </div>
                        <div class="form-group <?=form_error('alamat') ? 'has-error' : null?>">
                            <label>Alamat *</label>
                            <textarea name="alamat" class="form-control"><?=$this->input->post('alamat') ? $this->input->post('alamat') : $row->alamat?></textarea>
                        </div>
                        <div class="form-group <?=form_error('email') ? 'has-error' : null?>">
                            <label>Email *</label>
                            <input type="text" name="email" value="<?=$this->input->post('email') ? $this->input->post('email') : $row->email?>" class="form-control">
                            <?=form_error('email')?>
                        </div>
                        <div class="form-group <?=form_error('phone') ? 'has-error' : null?>">
                            <label>Nomor HP *</label>
                            <input type="number" name="phone" value="<?=$this->input->post('phone') ? $this->input->post('phone') : $row->phone?>" class="form-control">
                            <?=form_error('phone')?>
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

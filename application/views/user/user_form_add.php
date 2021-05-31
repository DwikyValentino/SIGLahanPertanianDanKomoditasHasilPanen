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
            <h3 class="box-title">Tambah Admin</h3>
            <div class="pull-right">
                <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>Kembali
                </a>
            </div>
        </div>
        <div class="box-body ">
            <div class="row">
                <div class="col-md-4">
                    <?php // echo validation_errors() ?>
                    <form action="" method="post">
                        <div class="form-group <?=form_error('fullname') ? 'has-error' : null?>">
                            <label>Nama *</label>
                            <input type="text" name="fullname" value="<?=set_value('fullname')?>" class="form-control">
                            <?=form_error('fullname')?>
                        </div>
                        <div class="form-group <?=form_error('username') ? 'has-error' : null?>">
                            <label>Username *</label>
                            <input type="text" name="username" value="<?=set_value('username')?>" class="form-control">
                            <?=form_error('username')?>
                        </div>
                        <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                            <label>Password *</label>
                            <input type="password" name="password" value="<?=set_value('password')?>" class="form-control">
                            <?=form_error('password')?>
                        </div>
                        <div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
                            <label>Password Confirmation*</label>
                            <input type="password" name="passconf" value="<?=set_value('passconf')?>" class="form-control">
                            <?=form_error('passconf')?>
                        </div>
                        <div class="form-group <?=form_error('alamat') ? 'has-error' : null?>">
                            <label>Alamat *</label>
                            <textarea name="alamat" class="form-control"><?=set_value('alamat')?></textarea>
                        </div>
                        <div class="form-group <?=form_error('email') ? 'has-error' : null?>">
                            <label>Email *</label>
                            <input type="text" name="email" value="<?=set_value('email')?>" class="form-control">
                            <?=form_error('email')?>
                        </div>
                        <div class="form-group <?=form_error('phone') ? 'has-error' : null?>">
                            <label>Nomor HP *</label>
                            <input type="number" name="phone" value="<?=set_value('phone')?>" class="form-control">
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

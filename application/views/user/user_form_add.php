<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0 text-dark">Users</h1> -->
            </div><!-- /.col -->
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol> -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-tittle">Add User</h3>
            <div class="float-right">
            <div>
                <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                <?php // echo validation_errors(); ?>
                    <form action="" method="post">
                        <div class="form-group <?=form_error('fullname') ? 'has-error' : null?>">
                            <label>Name</label>
                            <input type="text" name="fullname" value="<?=set_value('fullname')?>" class="form-control" placeholder="Enter Name">
                            <?=form_error('fullname')?>
                        </div>
                        <div class="form-group <?=form_error('username') ? 'has-error' : null?>">
                            <label>E-mail</label>
                            <input type="email" name="username" value="<?=set_value('username')?>" class="form-control" placeholder="Enter Email">
                            <?=form_error('username')?>
                        </div>
                        <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                            <label>Password</label>
                            <input type="password" name="password" value="<?=set_value('password')?>" class="form-control" placeholder="Password">
                            <?=form_error('password')?>
                        </div>
                        <div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
                            <label>Password Confirmation</label>
                            <input type="password" name="passconf" value="<?=set_value('passconf')?>" class="form-control" placeholder="Confirm Password">
                            <?=form_error('passconf')?>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" placeholder="Address"><?=set_value('address')?></textarea>
                            <?=form_error('address')?>
                        </div>
                        <div class="form-group <?=form_error('level') ? 'has-error' : null?>">
                            <label>Level</label>
                            <select name="level" class="form-control">
                                <option value="">- Chose -</option>
                                <option value="1" <?=set_value('level') == 1 ? "selected" : null?>>Admin</option>
                                <option value="2" <?=set_value('level') == 2 ? "selected" : null?>>Users</option>
                            </select>
                            <?=form_error('level')?>
                        </div>
                        <div class="form-group">
                            <button type="submit "class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Save
                            </button>
                            <button type="Reset" class="btn btn-warning btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
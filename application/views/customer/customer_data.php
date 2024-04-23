<section>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Perusahaan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <div class="float-right">
                <div>
                    <a href="<?=site_url('customer/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-plus"></i> Create
                    </a>
                </div>
            </div>
        
        <div class="table-responsive p-0">
            <div class="info-box">
                <div class="info-box-content">
                    <table class="table table-bordered table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Perusahaan</th>
                                <th>No Telp</th>
                                <th>Email</th>
                                <th>Domain Website</th>
                                <!-- Tambahan -->
                                <th>Dokumen Perizinan</th>
                                <th>Sektor Perusahaan</th> 
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach($row->result() as $key => $data) { ?>
                            <tr>
                                <td style="width:5%;"><?=$no++?>.</td>
                                <td><?=$data->name?></td>
                                <td><?=$data->phone?></td>
                                <td><?=$data->email?></td>
                                <td><?=$data->address?></td>
                                <td></td>
                                <td><?=$data->sektor_perusahaan?></td>
                                <td class="text-center" width="160px">
                                    <a href="<?=site_url('customer/edit/'.$data->id_perusahaan)?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil-alt"></i> Update
                                    </a>
                                    <a href="<?=site_url('customer/del/'.$data->id_perusahaan)?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-alt"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
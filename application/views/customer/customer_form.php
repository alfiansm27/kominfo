<section>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?=ucfirst($page)?> Customer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right"></ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">

    <div class="card card-primary align-items-center">
            <div class="card-header col-lg-12">
                <h3 class="card-title ">Customer Form</h3>
                    <a href="<?=site_url('customer')?>" class="btn btn-primary float-right" style="align-items: center" routerLink="../list" role="button">
                        <i class="fa fa-arrow-left"></i>&nbsp;Back</a>
            </div>
        
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="row">
                <div class="col-lg-12 offset-md-12">
                    <form action="<?=site_url('customer/process')?>" method="post">
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input type="hidden" name="id" value="<?=$row->id_perusahaan?>">
                            <input type="text" name="customer_name" value="<?=$row->name?>" class="form-control" placeholder="Enter customer Name" required>
                        </div>
                        <div class="form-group">
                            <label>Sektor Perusahaan</label>
                            <select name="sektor_perusahaan" class="form-control" required>
                                <option value="">- Chose -</option>
                                <option value="Teknologi Informasi dan Komunikasi" <?=$row->sektor_perusahaan == 'Teknologi Informasi dan Komunikasi' ? 'selected' : ''?>>Teknologi Informasi dan Komunikasi</option>
                                <option value="F" <?=$row->sektor_perusahaan == 'Perdagangan' ? 'selected' : ''?>>Perdagangan</option>
                                <option value="M" <?=$row->sektor_perusahaan == 'Kesehatan' ? 'selected' : ''?>>Kesehatan</option>
                                <option value="F" <?=$row->sektor_perusahaan == 'Keuangan' ? 'selected' : ''?>>Keuangan</option>
                                <option value="M" <?=$row->sektor_perusahaan == 'Transportasi' ? 'selected' : ''?>>Transportasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" value="<?=$row->phone?>" class="form-control" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="addr" class="form-control" placeholder="Address" required><?=$row->address?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">
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
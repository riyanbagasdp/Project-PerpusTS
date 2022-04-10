<?php $this->load->view('layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Detail User</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Judul <?php echo $detailuser['nama'] ?> </h4>
                            <h6>Email : <?php echo $detailuser['email'] ?> </h6>
                            <h6>Telepon : <?php echo $detailuser['telepon'] ?> </h6>
                            <h6>Alamat : <?php echo $detailuser['alamat'] ?> </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
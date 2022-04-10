<?php $this->load->view('layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Detail Buku</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Judul <?php echo $detail['nama'] ?> </h4>
                            <h6>Penulis : <?php echo $detail['penulis'] ?> </h6>
                            <h6>Penerbit : <?php echo $detail['penerbit'] ?> </h6>
                            <h6>Kategori : <?php echo $detail['kategori'] ?> </h6>

                        </div>
                        <div class="col-4">
                            <img style="width:150px" src="<?php echo base_url($detail['cover'])?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
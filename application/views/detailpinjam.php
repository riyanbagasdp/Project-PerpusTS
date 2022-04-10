<?php $this->load->view('layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Detail Peminjam</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Judul <?php echo $detailpinjam['nama'] ?> </h4>
                            <h6>Penulis : <?php echo $detailpinjam['tglpinjam'] ?> </h6>
                            <h6>Penerbit : <?php echo $detailpinjam['nama'] ?> </h6>
                            <h6>Kategori : <?php echo $detailpinjam['bukupinjaman'] ?> </h6>
   

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Detail Buku Koleksi</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                        <form action="<?php echo base_url('collection/insert') ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Judul Buku</label>
                                <input type="text" class="form-control" id="nama" aria-describedby="namajudulbuku" name="nama">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" aria-describedby="namajudulbuku" name="penerbit">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="penulis" aria-describedby="namajudulbuku" name="penulis">
                                <label for="kategori" class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="kategori" aria-describedby="namajudulbuku" name="kategori">
                                <label for="cover" class="form-label">Cover</label>
                                <input type="file" class="form-control" id="cover" aria-describedby="namajudulbuku" name="cover">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
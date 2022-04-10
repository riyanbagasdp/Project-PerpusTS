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
                        <form action="<?php echo base_url('user/insert') ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="penerbit" aria-describedby="namauser" name="nama">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="penulis" aria-describedby="namauser" name="email">
                                <label for="telepon" class="form-label">Telepon</label>
                                <input type="text" class="form-control" id="kategori" aria-describedby="namauser" name="telepon">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="kategori" aria-describedby="namauser" name="alamat">
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
<?php $this->load->view('layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Data</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                        <form action="<?php echo base_url('peminjaman/update/'.$detailpinjam['id']) ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                            <label for="tglpinjam" class="form-label">Tanggal Pinjam</label>
                                <input type="date" class="form-control" id="tglpinjam" aria-describedby="namajudulbuku" name="tglpinjam" value="<?php echo $detailpinjam['tglpinjam'];?>">
                                <label for="nama" class="form-label">Nama Peminjam</label>
                                <input type="text" class="form-control" id="penerbit" aria-describedby="namajudulbuku" name="nama" value="<?php echo $detailpinjam['nama'];?>">
                                <label for="bukupinjaman" class="form-label">Buku Pinjaman</label>
                                <input type="text" class="form-control" id="penulis" aria-describedby="namajudulbuku" name="bukupinjaman" value="<?php echo $detailpinjam['bukupinjaman'];?>">
                                <label for="tglkembali" class="form-label">Tanggal Kembali</label>
                                <input type="date" class="form-control" id="kategori" aria-describedby="namajudulbuku" name="tglkembali" value="<?php echo $detailpinjam['tglkembali'];?>">
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
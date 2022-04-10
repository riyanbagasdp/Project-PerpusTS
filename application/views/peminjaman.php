<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
</head>
<body>
<?php $this->load->view('layout/header'); ?>
<div class="container">
<?php if ($this->session->flashdata('pesan') != '') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
    <div class="card">
        <div class="card-header">
            <h1>Data Peminjaman</h1>
        </div>
        <h2><a href="peminjaman/addpinjam" class="btn btn-danger">[+] Tambah</a></h2>

        <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Tanggal Pinjam</th>
                <th>Nama Peminjam</th>
                <th>Buku Pinjam</th>
                <th>
                    option
                </th>
                <th> </th>
            </tr>
            <?php
            foreach($list as $item){?>
                <tr>
                    <td> <?php echo $item->id; ?> </td>
                    <td> <?php echo $item->tglpinjam; ?> </td>
                    <td> <?php echo $item->nama; ?> </td>
                    <td> <?php echo $item->bukupinjaman; ?> </td>
                    <td id="tmbl">
                    <a href="peminjaman/detailpinjam/<?php echo $item->id; ?>" class="btn btn-primary">Detail</a>
                    <a href="peminjaman/editpinjam/<?php echo $item->id; ?>" class="btn btn-success">Edit</a>
                    <a onclick="confirm('Apakah anda yakin ingin menghapus')" class="btn btn-danger" href="<?php echo base_url('peminjaman/delete/'.$item->id)?>">Hapus</a>
                    
                </tr>
                <tr></tr>
                <style>
                    #tmbl{
                        width:20%;
                    }
                </style>
            <?php } ?>
            
        </table>
        </div>
    </div>
</div>

        
</body>
</html>
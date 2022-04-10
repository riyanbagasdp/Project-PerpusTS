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
    <div class="card">
        <div class="card-header">
            <h1>Data User</h1>
        </div>
        <div class="card-body">
        <h2><a href="user/adduser" class="btn btn-danger">[+] Tambah</a></h2>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
            </tr>
            <?php
            foreach($list as $item){?>
                <tr>
                    <td> <?php echo $item->id; ?> </td>
                    <td> <?php echo $item->nama; ?> </td>
                    <td> <?php echo $item->email; ?> </td>
                    <td> <?php echo $item->telepon; ?> </td>
                    <td id="tmbl">
                    <a href="user/edituser/<?php echo $item->id; ?>" class="btn btn-success">Edit</a>
                    <a href="user/detailuser/<?php echo $item->id; ?>" class="btn btn-primary">Detail</a>
                    <a onclick="confirm('Apakah anda yakin ingin menghapus')" class="btn btn-danger" href="<?php echo base_url('user/delete/'.$item->id)?>">Hapus</a>
                </tr>
            <?php
            } ?>
            
        </table>
        </div>
    </div>
</div>
    
        
    
  
  
</body>
</html>
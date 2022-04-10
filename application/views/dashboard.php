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
            <h1>Halo,Selamat Datang <?php echo $this->session->userdata('nama'); ?>!</h1>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <h2>Email : <?php echo $email; ?> </h2>
                <h2>Alamat : <?php echo $alamat; ?> </h2>
                <h2>Hobi : 
                    <ul>
                        <?php foreach($hobi as $i) { ?>
                        <li> <?php echo $i; ?> </li>
                        <?php } ?>
                    </ul>
                </h2>
            </blockquote>
            <a href="<?php echo base_url('dashboard/calculator'); ?>" ><button type="submit" class="btn btn-info" style="color:white;">calculator</button></a>

        </div>
    </div>
</div>
    
        
    
  
  
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container bg-light text-blue">
    <?php
    $bil1=null;
    $bil2=null;
    if (isset($_GET['bil1'])) {

        $bil1=$_GET['bil1'];
        $bil2=$_GET['bil2'];
        $hasil=0;
        $operasi=$_GET["operasi"];
        switch ($operasi) {
            case '+':
                $hasil = $bil1+$bil2;
                break;

        }
    }
    ?>
    <div class="rows">
        <form action="#" method="get">
            <center><h2>Kalkulator Penjumlahan</h2></center>
            <div class="form-group">
                <label>Bilangan 1:</label>
                <input type="text" name="bil1" class="form-control" value="<?php echo $bil1; ?>" required>
            </div>
            <div class="form-group">
                <label>Bilangan 2:</label>
                <input type="text" name="bil2" class="form-control" value="<?php echo $bil2; ?>"  required>
            </div>
            <br>
            <div class="form-group">
                <select class="form-control" name="operasi">
                    <option value="+">+</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
            <?php 
            $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; 
            ?>
            <button type="submit" class="btn btn-info"><a href="<?=$url?>" style="color:white; text-decoration: none;">Kembali Hitung</a></button>
            <button onclick="goBack()" class="btn btn-secondary">Go Back</button>
            <script>
                function goBack() {
                    window.history.back(window.history.back());
                }
            </script>

            
        </form>
        <br>
        <?php
        if (isset($_GET['bil1'])) {
            echo "<h1>$hasil</h1>";
        }
        ?>
    </div>
</div>
</body>
</html>
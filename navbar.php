<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="../style/navbar.css">

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="../halaman/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php  
    if(isset($_SESSION['level'])){
        $level=$_SESSION['level'];
        if($level=="admin"){
    ?>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../pelanggan/">Pelanggan</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../user/">Petugas</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../produk/">Produk</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../bayar/">Penjualan</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../report/">Laporan</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../logout.php" onclick="return confirm ('Apakah anda yakin akan logout?') ">Logout</a>
            </li>
        </ul>
    </div>
    <?php 
        } else {
    ?>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../pelanggan/">Pelanggan</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../produk/">Produk</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../bayar/">Penjualan</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../report/">Laporan</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="../logout.php" onclick="return confirm ('Apakah anda yakin akan logout?') ">Logout</a>
            </li>
        </ul>
    </div>
    <?php
        }
    }
    ?>
</nav>

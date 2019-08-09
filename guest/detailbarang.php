<!DOCTYPE html>
<html lang="en">
  <head>
    <title>kiba &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="container d-none d-lg-block">
      <div class="row">
        <div class="col-12 text-center mb-4 mt-5">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">KIBA Inventory<span class="text-primary">.</span> </a></h1>
          </div>
      </div>
    </div>
    <header class="site-navbar py-md-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          
          <div class="col-6 col-md-6 col-xl-2  d-block d-lg-none" >
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">kiba<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block" align="center">
                <li><a href="index.php#home-section" class="nav-link">Home</a></li>
                <li><a href="index.php#product-section" class="nav-link">product</a></li>
                <li><a href="index.php#about-section" class="nav-link">About Us</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    <br>
    <br>
    <?php
    include 'config/koneksi.php';
    $query = mysqli_query($koneksi,"select barang.*, kategori.kategori, ifnull(stok.stok,0) jumlah from kategori, barang left join stok on barang.idBarang = stok.idBarang where kategori.idKategori = barang.idKategori and barang.idBarang = '$_GET[id]' group by barang.idBarang 
    ");
    $data = mysqli_fetch_array($query);
    
    ?>
    <div class="site-section bg-light" id="product-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Detail Product</h2>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-4 detBackground" resizable>
            <img class="detCenter " src="../admin/public/img/brg/<?php echo $data['foto']?>" width=260>
          </div>
          <div class="col-md-7 detBackground" resizable>
            <table class="detMargin">
              <tr><td width="20%">Name	</td><td width="20">:</td><td><?php echo $data['namaBarang'];?></td></tr>
              <tr><td>Type	</td><td>: </td><td><?php echo $data['kategori'];?></td></tr>
              <tr><td>Stock	</td><td>: </td><td><?php echo $data['jumlah'];?></td></tr>
              <tr><td>Details	</td><td>: </td><td><?php echo $data['deskripsiBarang'];?></td></tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="footer py-5 border-top text-center">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <p class="mb-0">
            <!--
              <a href="#" class="p-3"><span class="icon-facebook"></span></a>
              <a href="#" class="p-3"><span class="icon-twitter"></span></a>
              <a href="#" class="p-3"><span class="icon-instagram"></span></a>
            -->
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="mb-0">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://github.com/bayu18ti" target="_blank" >Bayu</a> & <a href="https://github.com/kiki18ti" target="_blank"> Kiki</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>

  
     
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>
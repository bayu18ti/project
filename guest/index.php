<?php
include "config/koneksi.php";
?>

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
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" color="black">
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="container d-none d-lg-block" style="">
      <div class="row">
        <div class="col-12 text-center mb-4 mt-5">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0" >KIBA Inventory<span class="text-primary">.</span> </a></h1>
          </div>
      </div>
    </div>
    <header class="site-navbar py-md-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-md-6 col-xl-2  d-block d-lg-none" >
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">kiba<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-200 main-menu">
            <nav class="site-navigation position-relative text-center" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block" align="center">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#product-section" class="nav-link">product</a></li>
                <li><a href="#about-section" class="nav-link">About Us</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    

    <div class="site-blocks-cover" style="margin-top: 100px;" >
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-8" style="position: relative;" data-aos="fade-up">
            
            <img src="images/sampul.jpg" alt="Image" class="img-fluid img-absolute" style="width:auto;">

            <div class="row mb-4">
              <div class="col-lg-4 mr-auto">
                <h1>Best Inventory Solution You Ever Find</h1>
                <p class="mb-5">Kami menyediakan sistem yang akan membantu para pengusaha agar dapat mengelola gudangnya dengan mudah</p>
                <div>
                  <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                </div>
              </div>
              

          </div>
        </div>
      </div>
    </div>  


    <div class="site-section bg-light" id="product-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">product</h2>
          </div>
        </div>
		
        <div class="row align-items-stretch">
		<?php
            $query = mysqli_query($koneksi,"select * from barang");
            while($data = mysqli_fetch_array($query)){
     

         ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="text-primary icon-tags"></span></span>
              </div>
              <div align="center">
                <img src="../admin/public/img/brg/<?php echo $data['foto']; ?>" width=160>
                <p><a href="detailbarang.php?id=<?php echo $data['idBarang'] ?>">Learn More</a></p>
              </div>
            </div>

          </div>
          <?php
			}
		  ?>
        </div>
      </div>
    </div>
    


    <div class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">About Us</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-6">
            <img src="images/inv.jpg" alt="Image" class="img-fluid mb-5 mb-lg-0 rounded shadow">
          </div>
          <div class="col-lg-5 ml-auto pl-lg-5">
            <h2 class="text-black mb-4">KIBA<br>Best inventory solution</h2>
            <p class="mb-4">KIBA Inventory Solution is a start up that help your business with a simple and efficient storage  solution that is compatible with all type of business.</p>
            <p><a href="#" class="btn btn-primary">Learn More</a></p>
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
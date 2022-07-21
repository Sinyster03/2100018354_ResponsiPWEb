<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>



    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<section class="header">

   <a href="home.php" class="logo">Toko Bangunan Jaya Abadi</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="produk.php">produk</a>
      <a href="pemesanan.php">pemesanan</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
   
<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/tokobangunan1.jpeg) no-repeat">
            <div class="content">
               <span>Toko Bangun Jaya Abadi</span>
               <h3>Menjual alat & bahan bangunan</h3>
               <a href="produk.php" class="btn">lihat produk</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/tokobangunan2.jpeg) no-repeat">
            <div class="content">
               <span>Toko Bangun Jaya Abadi</span>
               <h3>yang berkualitas</h3>
               <a href="produk.php" class="btn">lihat produk</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/tokobangunan3.jpeg) no-repeat">
            <div class="content">
               <span>Toko Bangun Jaya Abadi</span>
               <h3>dan terpercaya</h3>
               <a href="produk.php" class="btn">lihat produk</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>


<!-- footer section starts -->

<section class="footer">
<div class="box-container">

<div class="box">
   <h3>quick links</h3>
   <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
   <a href="produk.php"> <i class="fas fa-angle-right"></i> produk</a>
   <a href="pemesanan.php"> <i class="fas fa-angle-right"></i> pemesanan</a>
</div>



<div class="box">
   <h3>contact info</h3>
   <a href="#"> <i class="fas fa-phone"></i> +6285793766037 </a>
   <a href="#"> <i class="fas fa-envelope"></i> mhabliislam28y@gmail.com </a>
   <a href="#"> <i class="fas fa-map"></i> Ciamis Jawabarat Indonesia</a>
</div>

<div class="box">
   <h3>follow us</h3>
   <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
   <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
</div>

</div>

<div class="credit"> created by <span>m habli islamy</span></div>

</section>
<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
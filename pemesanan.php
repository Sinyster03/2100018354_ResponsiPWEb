<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>pemesanan</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="lihat.php" class="logo">Toko Bangunan Jaya Abadi</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="produk.php">produk</a>
      <a href="pemesanan.php">pemesanan</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/footer-bg.jpg) no-repeat">
   <h1>Pemesanan</h1>
</div>

<!-- booking section starts  -->

<section class="pemesanan">

   <h1 class="heading-title"></h1>

   <form action="proses.php" method="post" class="pemesanan-form">

      <div class="flex">
         <div class="inputBox">
            <span>nama pemesan:</span>
            <input type="text" placeholder="masukan nama anda" name="NamaPemesan" id="NamaPemesan">
         </div>
         <div class="inputBox">
            <span>no telepon :</span>
            <input type="number" placeholder="masukan nomor telepon anda" name="NoTelepon" id="NoTelepon">
         </div>
         <div class="inputBox">
            <span>alamat penerima :</span>
            <input type="text" placeholder="masukan alamat anda" name="AlamatPenerima" id="AlamatPenerima">
         </div>
         <div class="inputBox">
            <span>nama barang :</span>
            <input type="text" placeholder="masukan nama barang" name="NamaBarang" id="NamaBarang">
         </div>
         <div class="inputBox">
            <span>jumlah barang :</span>
            <input type="number" placeholder="masukan jumlah barang / (kg)" name="JumlahBarang" id="JumlahBarang">
         </div>
      </div>

      <input type="submit" value="pesan" class="btn" name="send" >

   </form>

</section>

<!-- booking section ends -->

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
   <a href="#"> <i class="fas fa-phone"></i> +628579766037 </a>
   <a href="#"> <i class="fas fa-envelope"></i> mhabliislamy28@gmail.com </a>
   <a href="#"> <i class="fas fa-map"></i> Ciamis Jawabarat Indonesia</a>
</div>

<div class="box">
   <h3>follow us</h3>
   <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
   <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
</div>

</div>

<div class="credit"> created by <span>m habli islamy</span>  </div>

</section>
<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
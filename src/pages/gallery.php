<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="gallery.css">
</head>
<body>
<div class="gallery-nav">
  
  <?php include './../navBar/navBar.php' ?>
</div>
  <div class="gallery">
<!-- Header -->
<div class="header">
  <p>Gallery</p>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="../../public/image1.png" style="width:100%">
    <img src="../../public/image2.png" style="width:100%">
    <img src="../../public/image3.png" style="width:100%">
    <img src="../../public/image4.png" style="width:100%">
    <!-- <img src="#" style="width:100%">
    <img src="#" style="width:100%">
    <img src="#" style="width:100%">
    <img src="#" style="width:100%"> -->
  </div>
  <div class="column">
    <img src="../../public/image5.png" style="width:100%">
    <img src="../../public/image6.png" style="width:100%">
    <img src="../../public/image7.png" style="width:100%">
    <img src="../../public/image8.png" style="width:100%">
    <!-- <img src="#" style="width:100%">
    <img src="#" style="width:100%">
    <img src="#" style="width:100%"> -->
  </div>  
  <div class="column">
    <img src="../../public/image9.png" style="width:100%">
    <img src="../../public/image10.png" style="width:100%">
    <img src="../../public/image11.png" style="width:100%">
    <img src="../../public/image12.png" style="width:100%">
    <!-- <img src="#" style="width:100%">
    <img src="#" style="width:100%">
    <img src="#" style="width:100%">
    <img src="#" style="width:100%"> -->
  </div>
  <!-- <div class="column">
    <img src="galleryImages/image10.png" style="width:100%">
    <img src="galleryImages/image11.png" style="width:100%">
    
    <img src="#" style="width:100%">
    <img src="#" style="width:100%">
    <img src="#" style="width:100%">
  </div> -->
</div>
</div>
<?php include '../footer/footer.php' ?>

</body>
</html>
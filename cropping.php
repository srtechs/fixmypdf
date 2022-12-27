<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cropping</title>
    <?php
    include './Links/Links.php';
    ?>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<?php include './Links/header.php';?>
    <section class="cropping-section mb-5">
    <div class="container">
        <div class="crophead">
        <h1 class="jumbotron-heading">Media <span> Kit</span></h1>
          <p class="crop-para">Click and drag to make a crop selection</p>
        </div>
      </div>
      <div class="crop-center">
        <div class="crop shadow-nav"><img src="./assets/cropping-bg.png"></div>
      </div>

      <div class="icons-btn my-5 d-flex w-100 justify-content-center">
          <button class="btn select-pdf merge-pdf" onclick="openLink()">Crop PDF</button>
          <div class="btn-icon d-flex flex-column pl-2 position-relative" style="gap: 0.3rem;">
          <div class="notify"></div>
          <a href="./mergedPDFAll.php"><i class="fa-solid fa-plus" aria-hidden="true" style="color: #fff;"></i></a>
          <a href="./mergedPDFAll.php"><i class="fa-solid fa-arrow-down-z-a" aria-hidden="true" style="color: #fff;"></i></a>
          </div>
          </div> 
    </div>
    </section>
    <?php include './Links/footerall.php';?>
</body>

</html>
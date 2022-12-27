<!DOCTYPE html>
<html lang="en">

<head>
    <title>Compress PDF</title>
    <?php
    include './Links/Links.php';
    ?>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<?php include './Links/header.php';?>
    <section class="jumbotron text-center compresspdf">
        <div class="container">
            <h1 class="jumbotron-heading">Compress <span> PDF</span></h1>
            <div class="row py-3 gap-row">
                <div class="col-md-12 col-lg-4 border-end">
                    <a href="">
                    <h5 class="heading5">Extreme Compression</h5>
                    <p class="para-compress">Less quality, high compression</p>
                    </a>
                </div>
                <div class="col-md-12 col-lg-4 border-end">
                    <a href="">
                    <h5 class="heading5">Recommended Compression</h5>
                    <p class="para-compress">Good quality, good compression</p>
                    </a>
                </div>
                <div class="col-md-12 col-lg-4">
                    <a href="">
                    <h5 class="heading5 active">Less Compression</h5>
                    <p class="para-compress">High quality, less compression</p>
                    </a>
                </div>
            </div>
            <div class="images-flex d-flex justify-content-center py-4 mb-5">
                <div class="image-content">
                    <div class="icons">
                        <a href="#"><i class="fa-solid fa-trash-can" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa-solid fa-rotate-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="imagepdf">
                        <img src="./assets/pdf3.png" alt="">
                    </div>
                    <p class="lorem-text">Lorem ipsum is simply.PDF</p>
                </div>
                <div class="image-content">
                <div class="icons">
                        <a href="#"><i class="fa-solid fa-trash-can" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa-solid fa-rotate-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="imagepdf">
                        <img src="./assets/pdf3.png" alt="">
                    </div>
                    <p class="lorem-text">Lorem ipsum is simply.PDF</p>
                    <!-- <div class="icons">
                    <a href=""><i></i></a>
                    <a href=""><i></i></a>
                </div> -->
                </div>
                <div class="image-content">
                <div class="icons">
                        <a href="#"><i class="fa-solid fa-trash-can" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa-solid fa-rotate-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="imagepdf">
                        <img src="./assets/pdf3.png" alt="">
                    </div>
                    <p class="lorem-text">Lorem ipsum is simply.PDF</p>
                    <!-- <div class="icons">
                    <a href=""><i></i></a>
                    <a href=""><i></i></a>
                </div> -->
                </div>
            </div>
            <div class="icons-btn my-5 d-flex w-100 justify-content-center align-items-center">
                <button class="btn select-pdf merge-pdf" onclick="openLink()">Compress PDF</button>
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
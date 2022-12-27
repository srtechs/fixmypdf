<!DOCTYPE html>
<html lang="en">

<head>
    <title>Merge PDF</title>
    <?php
    include './Links/Links.php';
    ?>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include './Links/header.php'; ?>
    <section class="jumbotron text-center mt-2 merge-jumbotron">
        <div class="container">
            <h1 class="jumbotron-heading">Merge <span> PDF</span></h1>
            <p style="font-weight: 500;">To change the order of your PDFs, drag and drop the files as you want.</p>
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
                <div class="image-content merge-section-width-height">
                <div class="icons">
                        <a href="#"><i class="fa-solid fa-trash-can" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa-solid fa-rotate-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="imagepdf pb-5">
                        <img src="./assets/pdf2.png" alt="">
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
                        <img src="./assets/pdf1.png" alt="">
                    </div>
                    <p class="lorem-text">Lorem ipsum is simply.PDF</p>
                    <!-- <div class="icons">
                    <a href=""><i></i></a>
                    <a href=""><i></i></a>
                </div> -->
                </div>
            </div>
                <div class="icons-btn my-5 d-flex w-100 justify-content-center">
                    <button class="btn select-pdf merge-pdf" onclick="openLink()">Merge PDF</button>
                    <div class="btn-icon d-flex flex-column pl-2 position-relative" style="gap: 0.3rem;">
                        <div class="notify"></div>
                        <a href="./mergedPDFAll.php"><i class="fa-solid fa-arrow-down-z-a" aria-hidden="true" style="color: #fff;"></i></a>
                        <a href="./mergedPDFAll.php"><i class="fa-solid fa-plus" aria-hidden="true" style="color: #fff;"></i></a>
                    </div>
                </div>
        </div>
    </section>
    <?php include './Links/footerall.php'; ?>
</body>

</html>
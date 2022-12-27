<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Fix My PDF</title>
    <?php
    include './Links/Links.php';
    ?>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include './Links/header.php'; ?>
    <div class="section-1 d-flex align-items-center">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 align-items-center">
                    <div class="inner-content pt-5">
                        <h1 class="text-white heading">Every tool you need to <span class="text-dark">work with PDFs in one</span> Place</h1>
                        <p class="text-white home-para">Every tool you need to use PDFs, at your fingertips. All are 100% FREE and easy to use! Merge, split, compress, convert, rotate, unlock and watermark PDFs with just a few clicks.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section1-image w-100 d-none d-sm-none d-md-none d-lg-flex">
            <img src="./assets/images/section-1.png" class="w-100" alt="">
        </div>
    </div>
    <div class="w-100 d-flex d-md-flex d-lg-none bg-blue">
        <img src="./assets/images/mobile-white.png" class="w-100" alt="">
    </div>
    <div class="section-2">
        <div class="container pt-custom pb-5">
            <h2 class="text-blue heading pb-3">Trending Categories</h2>
            <div class="row gapmd">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 index-width-col">
                    <a href="./merge.php" class="index-w-h">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img class="mb-3 icon-image-index" src="./assets/images/7.png" alt="">
                                    <h3 class="my-2 heading5">Merge PDFs</h3>
                                    <p class="card-text pb-3" style="color: #6D6D6D;">Combine PDFs in the order you want with the easiest PDF merger available.</p>
                                </div>
                                <div class="flip-box-back">
                                    <img class="mb-3 icon-image-index" src="./assets/images/8.png" alt="">
                                    <h3 class="my-2" style="color: #ffffff;">Merge PDFs</h3>
                                    <p class="card-text-active" style="font-size: 14px;">Combine PDFs in the order you want with the easiest PDF merger available.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 index-width-col">
                    <a href="./splitStart.php" class="index-w-h">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img class="mb-3 icon-image-index" src="./assets/images/6.png" alt="">
                                    <h3 class="my-2 heading5">Split PDFs</h3>
                                    <p class="card-text pb-3" style="color: #6D6D6D;">Combine PDFs in the order you want with the easiest PDF merger available.</p>
                                </div>
                                <div class="flip-box-back">
                                    <img class="mb-3 icon-image-index" src="./assets/images/9.png" alt="">
                                    <h3 class="my-2" style="color: #ffffff;">Split PDFs</h3>
                                    <p class="card-text-active" style="font-size: 14px;">Combine PDFs in the order you want with the easiest PDF merger available.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 index-width-col">
                    <a href="./compress.php" class="index-w-h">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img class="mb-3 icon-image-index" src="./assets/images/5.png" alt="">
                                    <h3 class="my-2 heading5">Compress PDFs</h3>
                                    <p class="card-text pb-3" style="color: #6D6D6D;">Combine PDFs in the order you want with the easiest PDF merger available.</p>
                                </div>
                                <div class="flip-box-back">
                                    <img class="mb-3 icon-image-index" src="./assets/images/10.png" alt="">
                                    <h3 class="my-2" style="color: #ffffff;">Compress PDFs</h3>
                                    <p class="card-text-active" style="font-size: 14px;">Combine PDFs in the order you want with the easiest PDF merger available.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 index-width-col">
                    <a href="./mergePdfFiles.php" class="index-w-h">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img class="mb-3 icon-image-index" src="./assets/images/4.png" alt="">
                                    <h3 class="my-2 heading5">Cropping PDFs</h3>
                                    <p class="card-text pb-3" style="color: #6D6D6D;">Combine PDFs in the order you want with the easiest PDF merger available.</p>
                                </div>
                                <div class="flip-box-back">
                                    <img class="mb-3 icon-image-index" src="./assets/images/11.png" alt="">
                                    <h3 class="my-2" style="color: #ffffff;">Cropping PDFs</h3>
                                    <p class="card-text-active" style="font-size: 14px;">Combine PDFs in the order you want with the easiest PDF merger available.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100">
        <img src="./assets/images/section-2.png" class="w-100" alt="">
    </div>
    <div class="section-3 text-center d-flex justify-con align-items-center">
        <div class="container py-5 align-items-center">
            <div class="inner-home-content px-5">
                <h2 class="text-blue">The PDF software trusted by million of users</h2>
                <p class="">Fix my pdf is your number 1 web app for editing PDF with ease. Enjoy all the tools you need to work efficiently with your digital documents while keeping your data safe and secure.</p>
            </div>
        </div>
    </div>
    <?php include './Links/footer.php'; ?>
</body>

</html>
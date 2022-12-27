<?php
    session_start();
    $fileToDownload = $_SESSION["fileToDownload"];
?>
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
    <?php include './Links/header.php';?>
    <section class="jumbotron text-center mt-2 mb-0 pb-0">
        <div class="container">
            <h1 class="jumbotron-heading">PDF have<span> been splitted!</span></h1>
            <div class="icons-btn my-5 d-flex w-100 justify-content-center">
                <a href="download.php?file=<?=$fileToDownload?>"><button class="btn select-pdf merge-pdf">Download PDF</button></a>
                <div class="btn-icon d-flex flex-column pl-2 position-relative" style="gap: 0.3rem;">
                    <a href="#"><i class="fa-solid fa-link" aria-hidden="true" style="color: #fff;"></i></a>
                    <a href="#"><i class="fa-solid fa-trash-can" aria-hidden="true" style="color: #fff;"></i></a>
                </div>
            </div>
        </div>
    </section>

    <div class="merge-bg-all">
        <img src="./assets/Gray-BG-F1.png" class="w-100" alt="">
    </div>
    <section class="jumbotron text-center bg-gray px-0 mx-0 mb-0 pb-0">
        <div class="container py-5">
            <h2 class="jumbotron-heading">How can I thank you?<span> Spread the word!</span></h2>
            <p>If iLovePDF's Merge PDF has helped you, you can help us too </p>
            <ul class="social-icons">
                <li class="social-content bg1"> <a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                <li class="social-content bg2"> <a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                <li class="social-content bg3"> <a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                <li class="social-content bg4"> <a href="#"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="merge-bg-all">
            <img class="w-100" src="./assets/White-BG-F.png" alt="">
        </div>
    </section>

    <section class="jumbotron text-center">
        <div class="container mergerAllWidthSet" style="width: 77%;">
            <h2 class="jumbotron-heading">The PDF software trusted<span> by millions of users</span></h2>
            <p class="text-center">Fix my PDF is your number 1 web app for editing PDF with ease. Enjoy all the tools you need to work efficiently with your digital documents while
                keeping your data safe and secure.
            </p>
        </div>
    </section>
    <?php include './Links/footerall.php';?>
</body>

</html>
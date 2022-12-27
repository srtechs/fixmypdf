<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <?php
    include './Links/Links.php';
    ?>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<?php include './Links/header.php';?>
    <section class="banner-bg-img position-relative mb-5">
        <img src="./assets/contact-banner.png" alt="Banner" width="100%">
        <div class="banner-inner-text centermedia position-absolute">
            <h1 class="banner-heading2">Contact Us</h1>
            <p class="text-center feature-para blog-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <img class="position-absolute img-blog-curve contact-banner-curve" src="./assets/24.png" class="w-100" alt="">
        </div>
    </section>
    <div class="global-container my-5">
        <div>
            <!--
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
            <form class="signin-form d-flex justify-content-center align-items-center mb-5 flex-column">
                <!-- to error: add class "has-danger" -->
                <div class="form-group">
                    <input type="name" class="form-control color form-control-input form-control-sm shadow-nav" id="exampleInputName" aria-describedby="Name" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control color form-control-input form-control-sm shadow-nav" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <input type="text" name="subject" id="subject" class="color form-control form-control-input shadow-nav form-control-sm" aria-describedby="Subject" placeholder="Subject">
                </div>
                <div class="form-group textarea-before">
                    <textarea class="shadow-nav form-control form-control-input color form-control-sm" name="message" id="message" rows="6" placeholder="Message"></textarea>
                </div>
                <button class="btn select-pdf merge-pdf">Send Message</button>
            </form>
        </div>
    </div>
    <?php include './Links/footerall.php';?>
</body>

</html>
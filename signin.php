<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign In</title>
    <?php
    include './Links/Links.php';
    ?>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include './Links/header.php';?>
    <section class="banner-bg-img position-relative mb-5">
        <img src="./assets/Sign-in-Background.png" alt="Banner" width="100%">
        <div class="banner-inner-text position-absolute">
            <h1 class="banner-heading1">P</h1>
            <h1 class="banner-heading2">Fix my PDF</h1>
            <img class="position-absolute img-blog-curve" src="./assets/24.png" class="w-100" alt="">
        </div>
    </section>
    <div class="global-container my-5">
        <div>
            <h2 class="jumbotron-heading text-center pb-3">Login to<span> Your account</span></h2>
        </div>
        <div>
            <!--
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
            <form class="signin-form d-flex justify-content-center align-items-center flex-column">
                <!-- to error: add class "has-danger" -->
                <div class="form-group">
                    <input type="email" class="shadow-nav form-control form-control-input form-control-sm" id="email" aria-describedby="email" required placeholder="Enter your Email address">
                </div>
                <div class="form-group">
                    <input type="password" class="shadow-nav form-control form-control-sm form-control-input" id="password" required>
                    <!-- <a class="forgot-pass" href="#" style="float:right;font-size:12px;">Forgot password?</a> -->
                </div>
                <div class="form-group d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input shadow-nav" type="checkbox" id="inlineFormCheck">
                        <label class="form-check-label" for="inlineFormCheck">
                            Remember me
                        </label>
                    </div>
                    <a class="forgot-pass" href="#" style="float:right;">Forgot password?</a>
                </div>

                <button class="btn select-pdf merge-pdf">Log In</button>

                <div class="sign-up">
                    <p> Don't have an account? <a href="../fixmypdf/signup.php">Create an Account</a></p>
                    <p class="signin-para">By creating an account, you agree to Fix my PDF Terms of Service and Privacy Policy</p>
                </div>
            </form>
        </div>
    </div>
    <?php include './Links/footerall.php';?>
</body>

</html>
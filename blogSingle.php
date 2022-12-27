<!DOCTYPE html>
<html lang="en">

<head>
    <title>Single Blog</title>
    <?php
    include './Links/Links.php';
    ?>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<?php include './Links/header.php';?>
    <section class="single-blog">
    <div class="container">
        <div class="col-12" style="text-align: center">
          <img class="singal-blog-w-h" src="./assets/singleblog.png" />
        </div>
        <div class="single-blog-text-part">
          <h2 class="singleblog-heading">Lorem Ipsum is simply dummy</h2>
          <a class="blog-date" href="#"> <img class="calender-icon pr-2" src="./assets/blogcalender.png" alt=""> 23 Nov 2022</a>
          <p class="single-blog-para">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
          </p>
          <p class="single-blog-para">
          It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
          <p class="single-blog-para">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
          </p>
          <p class="single-blog-para">
          Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
          </p>
          </div>
    </div>
    </section>
    <?php include './Links/footerall.php';?>
</body>

</html>
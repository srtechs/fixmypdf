<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload File</title>
    <?php
    include './Links/Links.php';
    ?>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include './Links/header.php'; ?>
    <section class="jumbotron text-center mt-2" style="padding: 80px; min-height: 500px;">
        <div class="container">
            <h1 class="jumbotron-heading">Uploading <span>file 1 of 2</span></h1>
            <p class="file-name">Fixmypdf_marged.pdf (42.75 MB)</p>
            <p class="time-left">Time left 50 Scconds - Upload Speed 14 MB/S</p>
            <div class="progress shadow-nav mt-5">
                <div class="progress-bar progress-show" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="uploaded py-4">
                <p style="color: #0065BB">19% Uploaded</p>
            </div>
        </div>
    </section>
    <?php include './Links/footerall.php'; ?>
    <script>

            setTimeout(function() {
                window.location.href = "./mergedPDFAll.php"; 
            }, 5000);
    </script>
</body>

</html>
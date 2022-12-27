<?php
    session_start();
    $numberOfPages = $_SESSION["numberOfPages"];
    if($numberOfPages == 0) {
        header("Location: splitStart.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Split PDF</title>
    <?php
    include './Links/Links.php';
    ?>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include './Links/header.php';?>
    <section class="jumbotron text-center pb-0">
        <div class="container">
            <h1 class="jumbotron-heading">Split <span> PDF</span> file</h1>
            <!-- <p class="range-mode">Range Mode:</p>
            <div class="range-btn d-flex justify-content-center align-items-center" style="gap: 0.9rem;">
                <button class="btn select-pdf split-pdf">Customer Ranges</button>
                <button class="btn select-pdf split-pdf">Fixed Ranges</button>
            </div> -->
            <div class="ranges p-3">
                <div class="d-flex justify-content-center align-items-center gap-md">
                    <form method="POST" action="processSplit.php">
                        <div class="form-group">
                            <label class="label-input" for="exampleInputEmail1" style="width: 100%; text-align: left;padding: 0 52px;">Total Pages = <span id="totalPages"><?=$numberOfPages?></span> , Select Range</label>
                            <div class="d-flex justify-content-center align-items-center gap">
                                <div class="input-1 shadow-nav">
                                    <p class="range-text">From Page</p>
                                    <input type="number" class="form-control" id="firstPage" name="firstPage" value="1">
                                </div>
                                <div class="input-2 shadow-nav">
                                    <p class="range-text">To Page</p>
                                    <input type="number" class="form-control" id="lastPage" name="lastPage" value="<?=$numberOfPages?>">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="label-input" for="exampleInputEmail1" style="width: 100%; text-align: left;padding: 0 10px;">Range 2</label>
                            <div class="d-flex justify-content-start align-items-center gap">
                                <div class="input-1 shadow-nav">
                                    <p class="range-text">From Page</p>
                                    <input type="number" class="form-control" id="quantity" name="quantity" value="11">
                                </div>
                                <div class="input-2 shadow-nav">
                                    <p class="range-text">To Page</p>
                                    <input type="number" class="form-control" id="quantity" name="quantity" value="20">
                                </div>
                            </div>
                        </div> -->
                </div>
                <!-- <button class="btn select-pdf split-pdf add-range"><img class="mr-2" src="./assets/range-icon.png" alt="Plus">Add Range</button> -->
            </div>
        </div>
    </section>

    <section class="jumbotron text-center pt-0">
        <div class="container">
            <!-- <div class="images-flex d-flex justify-content-center py-4 mb-5" style="width: 100%; flex-wrap: nowrap;">
                <div class="d-flex justify-content-center w-100" style="gap: 0.3rem;">
                    <div class="image-content shadow-nav img1 border-0 w-100">
                        <div class="imagepdf">
                            <img src="./assets/pdf3.png" alt="">
                        </div>
                        <p class="lorem-text">1</p>
                    </div>
                    <div class="buttons-range">
                        <button class="btn select-pdf split-pdf add-range">Range 1</button>
                    </div>
                    <div class="load">
                        <i class="fa-solid fa-ellipsis" aria-hidden="true"></i>
                    </div>
                    <div class="image-content shadow-nav img2 border-0 w-100">
                        <div class="imagepdf">
                            <img src="./assets/pdf3.png" alt="">
                        </div>
                        <p class="lorem-text">10</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center w-100" style="gap: 0.3rem;">
                    <div class="image-content shadow-nav img1 border-0 w-100">
                        <div class="imagepdf">
                            <img src="./assets/pdf3.png" alt="">
                        </div>
                        <p class="lorem-text">11</p>
                    </div>
                    <div class="buttons-range">
                        <button class="btn select-pdf split-pdf add-range">Range 2</button>
                    </div>
                    <div class="load">
                        <i class="fa-solid fa-ellipsis" aria-hidden="true"></i>
                    </div>
                    <div class="image-content shadow-nav border-0 img2 w-100">
                        <div class="imagepdf">
                            <img src="./assets/pdf3.png" alt="">
                        </div>
                        <p class="lorem-text">20</p>
                    </div>
                </div>
            </div> -->
            <div class="icons-btn my-5 d-flex w-100 justify-content-center">
                <button type="submit" class="btn select-pdf merge-pdf">Split PDF</button>
                <!-- <div class=" btn-icon d-flex flex-column pl-2 position-relative" style="gap: 0.3rem;">
                    <div class="notify"></div>
                    <a href="./mergedPDFAll.php"><i class="fa-solid fa-plus" aria-hidden="true" style="color: #fff;"></i></a>
                    <a href="./mergedPDFAll.php"><i class="fa-solid fa-arrow-down-z-a" aria-hidden="true" style="color: #fff;"></i></a>
            </div> -->
            </div>
            </form>

        </div>
    </section>
    <?php include './Links/footerall.php';?>
</body>

</html>
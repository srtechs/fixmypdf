<?php
    include("cleardir.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Merge PDF</title>
    <?php
     include './Links/Links.php';
    ?>
</head>

<body>
    <?php include './Links/header.php';?>
    <section class="jumbotron text-center merge-jumbotron mt-2" style="min-height: 500px;">
        <div class="container">
            <h1 class="jumbotron-heading pb-2">Merge <span> PDF</span> files</h1>
            <p class="pb-2" style="font-weight: 500;">Combine PDFs in the order you want with the easiest PDF merger available.</p>
            <!-- <a href="./mergepdf.php"><button class="mt-2 btn select-pdf">Select PDF files</button></a> -->
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <form id="frmPond" method="POST" enctype="multipart/form-data">
                        <input type="file" class="filepond" name="filepond[]" multiple data-allow-reorder="true" data-max-file-size="10MB" data-max-files="3" required>
                        <button type="submit" class="btn btn-primary">Merge PDFs</button>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>
    <?php include './Links/footerall.php';?>
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-pdf-preview/dist/filepond-plugin-pdf-preview.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

    <script>
    $(function() {
        FilePond.registerPlugin(FilePondPluginPdfPreview, FilePondPluginFileValidateType);

        const fileElement = document.querySelector(".filepond");

        const pond = FilePond.create(fileElement);

        FilePond.setOptions({
            allowMultiple: true,
            allowReorder: true,
            instantUpload: false,
            allowProcess: false,
            allowPdfPreview: true,
            pdfPreviewHeight: 200,
            pdfComponentExtraParams: 'toolbar=0&view=fit&page=1',
            allowFileTypeValidation: true,
            acceptedFileTypes: ['application/pdf'],
            server: {
                url: 'http://localhost/fixmypdf/',
                process: 'processMerge.php',
            },
        });

        $("#frmPond").on("submit", (e) => {
            e.preventDefault();
            pond.processFiles().then(files => {
                window.location.replace('merged.php');
            });
        });

    });
    </script>
    <!-- JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>

</html>
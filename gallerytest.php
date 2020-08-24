
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gallery - ICPN</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!--DA IMPORTARE PER GALLERY-->
    <link href="assets/css/labs.css" rel="stylesheet">
    <link href="assets/css/masonry.css" rel="stylesheet">
    <?php include 'partials/head-style.php'; ?>
</head>

<body>
<!-- ======= Header Navbar ======= -->
<?php include 'partials/header.php'; ?>

<main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Gallery</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Gallery</li>
                </ol>
            </div>

        </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
        <div class="container">
            <div class="wrapper">
                <div class="masonry">
                    <?php
                    $images = scandir("assets/img/portfolio/", 1);
                    foreach ($images as $result) {
                        echo "<div class='brick'><img src='assets/img/portfolio/".$result."' ></div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include 'partials/footer.php'; ?>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<?php include 'partials/foot-script.php'; ?>

</body>

</html>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    ?>
    <script>
        window.location.href = "index.php";
    </script>
    <?php
}
?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>
<!-- Left Panel -->
<?php include("include/header.php"); ?>
<!-- Left Panel -->
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <?php include "include/top_head.php"; ?>
    <!-- Header -->


    <div class="content">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="jumbotron bg-transparent">
                    <h1 class="display-4">Hello, Faculty!</h1>
                    <p class="lead mt-4" style="line-height: 1.7">This is a simple hero unit, a simple jumbotron-style component for calling extra
                        attention to featured content or information. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Cupiditate dolorem doloribus facere! Aut autem beatae commodi dicta eum
                        facilis hic itaque laborum mollitia, pariatur porro sunt suscipit veritatis vero voluptate!
                        Cupiditate, dignissimos eos est eum eveniet hic magni placeat quasi quibusdam quisquam, quos
                        repellendus saepe.</p>
                    <hr class="my-4">
                    <p style="line-height: 1.7">It uses utility classes for typography and spacing to space content out within the larger
                        container. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolore eius et laborum
                        minus, nemo nesciunt rem sed tenetur totam. Aperiam architecto asperiores atque beatae delectus
                        eum excepturi facere, incidunt ipsum non perspiciatis placeat praesentium repellat repudiandae
                        sed, soluta, tempora tenetur totam unde velit veritatis?</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- .content -->

    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 Ela Admin
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Colorlib</a>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- /#right-panel -->

<!-- Right Panel -->


<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


</body>

</html>

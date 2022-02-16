<?php
    session_start();
    require_once "../root.php";
    require_once "../admin/db.php";

    $sql = "SELECT * FROM profile";
    $posts = $conn->query($sql);
    $posts = $posts->fetch_All(MYSQLI_ASSOC);
    extract($posts[0]);

    $sql2 = "SELECT * FROM contact";
    $contact = $conn->query($sql2);
    $contact = $contact->fetch_All(MYSQLI_ASSOC);
    extract($contact[0]);

    $imgurl = $my_root.'uploads/'.$h_img;
    $banner_imgurl = $my_root.'uploads/'.$b_img;
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php $name_array = explode(" ", $fullname); ?>
        <?=$name_array[0];?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- load vendor css start -->

    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="<?=$my_root;?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$my_root;?>assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="<?=$my_root;?>assets/css/vendor/animate.css">
    <link rel="stylesheet" href="<?=$my_root;?>assets/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=$my_root;?>assets/css/vendor/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=$my_root;?>assets/css/vendor/venobox.css">

    <!-- load vendor css end -->

    <link rel="stylesheet" href="<?=$my_root;?>assets/css/style.css">
    <link rel="stylesheet" href="<?=$my_root;?>assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- load jquery -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/af2821b0/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/vendor/jquery-3.1.1.min.js"></script>
</head>
  
<body>
<div class="main-layout">

<!-- navigation section start -->
<nav id="navbar" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#james-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand scroll" style="text-decoration: none;" href="#hero-banner">
                <!-- <img class="img-responsive logo" src="assets/images/logo/logo.png" alt=""> -->
                <!-- <?php $name_array = explode(" ", $fullname); ?> -->
                <h1 class="banner-title" style="color:#ff8a00;"><?=$name_array[0];?></h1>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="james-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#hero-banner" class="scroll">Welcome</a></li>
                <li><a href="#about-section" class="scroll">About me</a></li>
                <li><a href="#knowledge-section" class="scroll">Knowledge</a></li>
                <li><a href="#experience-section" class="scroll">Experience</a></li>
                <li><a href="#portfolio-section" class="scroll">Portfolio</a></li>
                <li><a href="#blog-section" class="scroll">Blog</a></li>
                <li><a href="#contact-section" class="scroll">Contact</a></li>
                <?php if (isset($_SESSION['login'])):?>
                    <li><a href="<?=$my_root.'admin/logout.php';?>" class="scroll">Logout</a></li>

                <?php else:?>
                    <li><a href="#login-form" class="scroll">Login</a><li>                                
                <?php endif;?>
            </ul>
        </div> <!-- /.navbar-collapse -->
    </div> <!-- /.container-fluid -->
</nav>
<!-- navigation section end -->
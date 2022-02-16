<?php 
    require_once "header.php";
?>

<!-- hero banner start -->
<div id="hero-banner" class="hero-banner parallax bg-img-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-banner-content">
                    <span class="banner-subtitle">Hi, my name is </span>
                    <h2 class="banner-title"><?=$fullname;?></h2>
                    <span class="banner-subtitle"><?=$expertise;?></span>
                </div>
            </div> <!--/.col-->
        </div> <!--/.row-->
    </div> <!--/.conainter-->
</div> <!--/#herobanner-->
<script type="text/javascript">
    $('.bg-img-1').css('background-image','url("<?=$banner_imgurl;?>")');
</script>

<!-- hero banner end -->
<?php include_once "template/about.php";?>
<?php include_once "template/knowledge.php";?>
<?php include_once "template/experience.php";?>
<?php include_once "template/portfolio.php";?>
<?php include_once "template/reference.php";?>
<?php include_once "template/blog.php";?>
<?php include_once "template/contact.php";?>

<?php if (isset($_SESSION['login'])):?>   

<?php else:?>
    <?php require_once "../login.php";?>
<?php endif;?>

<?php require_once "footer.php";?>

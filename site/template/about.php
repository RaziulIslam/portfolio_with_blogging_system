<?php 
    require_once "../admin/db.php";
?>

<!-- about section start -->
<div id="about-section" class="about-section pad120">
    <div class="container">

        <!-- indicactor start -->
        <div class="row">
            <div class="col-xs-12">
                <a href="#about-section" class="indicator light right scroll">
                    <p><i class="fa fa-long-arrow-down"></i></p>
                    <p><i class="fa fa-user"></i></p>
                </a>
            </div> <!--/.col-->
        </div> <!--/.row-->
        <!-- indicactor end -->

        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <img src="<?=$imgurl;?>" class="img-responsive translateY150 sm-mb30 xs-mb30" alt="">
            </div> <!--/.col-->
            <div class="col-md-7">
                <div class="section-title text-right">
                    <h3 class="title-text">About me</h3>
                    <h5 class="subtitle-text"><?=$introduction." ";?></h5>
                </div>
                <div class="content text-right">
                    <p class="mb50"><?=$objective?></p>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                            <div class="bio-table mb40">
                                <table class="table">
                                    <tr>
                                        <td>Full Name</td>
                                        <td>:</td>
                                        <td><?=$fullname;?></td>
                                    </tr>
                                    <tr>
                                        <td>Age</td>
                                        <td>:</td>
                                        <td><?=$age;?></td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>:</td>
                                        <td><?=$address;?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><?=$email;?></td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>:</td>
                                        <td><?=$phone;?></td>
                                    </tr>
                                </table>
                            </div> <!--/.bio-table-->
                        </div> <!--/.col-->
                    </div> <!--/.row-->
                    <a href="https://drive.google.com/file/d/19ILBJ7NZVBPar_cB_2QeFUYjtJAI2Uvy/view?usp=sharing" class="btn btn-primary" target="_blank">Download Resume</a>
                </div>
            </div> <!--/.col-->
        </div> <!--/.row-->
    </div> <!--/.container-->
</div> <!-- /#about-section -->
<!-- about section end -->

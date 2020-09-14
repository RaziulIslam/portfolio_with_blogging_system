<?php
$sql = "SELECT * FROM post WHERE post_type='portfolio' AND status='publish' ORDER BY id ASC";
$portfolio = $conn->query($sql);
$portfolio=($portfolio->num_rows >0)?$portfolio->fetch_All(MYSQLI_ASSOC): '';

?>

<!-- portfolio section start -->
<div id="portfolio-section" class="portfolio-section pad120 bg-color-brand alter-text">
    <div class="container">
        <!-- indicactor start -->
        <div class="row">
            <div class="col-xs-12">
                <a href="#portfolio-section" class="indicator brand left scroll">
                    <p><i class="fa fa-long-arrow-down"></i></p>
                    <p><i class="fa fa-image"></i></p>
                </a>
            </div> <!--/.col-->
        </div> <!--/.row-->
        <!-- indicactor end -->

        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3 class="title-text">Portfolio</h3>
                </div>
            </div> <!--/.col-->
        </div> <!--/.row-->

        <div class="row">
            <div class="col-xs-12">
                <div class="portfolio-wrap">
                    <?php 

                    if(is_array($portfolio)):
                        for($i=0; $i<5; $i++):
                            
                            $data = isset($portfolio[$i])?$portfolio[$i]:$portfolio[0];
                            extract($data);
                            $portfolio_imgurl = $my_root.'uploads/'.$f_img;

                            switch ($i) {
                                case 0:
                                    $design = <<<DGN1
                                    <div class="portfolio-item grid-item">
                                    <div class="portfolio-thumb">
                                        <img src="$portfolio_imgurl" alt="">
                                        <div class="overley">
                                            <div class="portfolio-title">
                                                <a href="$portfolio_imgurl" class="img-lightbox"><i class="fa fa-search"></i></a>
                                                <h4>$title</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

DGN1;
                                    break;

                                    case 1:
                                    $design = <<<DGN1
                                    <div class="portfolio-item grid-item grid-item--width2">
                                    <div class="portfolio-thumb">
                                        <img src="$portfolio_imgurl" alt="">
                                        <div class="overley">
                                            <div class="portfolio-title">
                                                <a href="$portfolio_imgurl" class="img-lightbox"><i class="fa fa-search"></i></a>
                                                <h4>$title</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

DGN1;
                                    break;

                                    case 2:
                                    $design = <<<DGN1
                                    
                                
                                <div class="portfolio-item grid-item">
                                    <div class="portfolio-thumb">
                                        <img src="$portfolio_imgurl" alt="">
                                        <div class="overley">
                                            <div class="portfolio-title">
                                                <a href="$portfolio_imgurl" class="img-lightbox"><i class="fa fa-search"></i></a>
                                                <h4>$title</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

DGN1;
                                    break;
                                

                                    case 3:
                                    $design = <<<DGN1
                                    
                                
                                  <div class="portfolio-item grid-item">
                                    <div class="portfolio-thumb">
                                        <img src="$portfolio_imgurl" alt="">
                                        <div class="overley">
                                            <div class="portfolio-title">
                                                <a href="$portfolio_imgurl" class="img-lightbox"><i class="fa fa-search"></i></a>
                                                <h4>$title</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

DGN1;
                                    break;


                                    case 4:
                                    $design = <<<DGN1
                                    
                                
                                <div class="portfolio-item grid-item">
                                    <div class="portfolio-thumb">
                                        <img src="$portfolio_imgurl" alt="">
                                        <div class="overley">
                                            <div class="portfolio-title">
                                                <a href="$portfolio_imgurl" class="img-lightbox"><i class="fa fa-search"></i></a>
                                                <h4>$title</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

DGN1;
                                    break;
                                default:
                                    # code...
                                    break;
                            }
                            echo $design;
                            ?>


                            <?php

                        endfor;
                    endif;
                    ?>
                </div> <!--/.experience-content-wrap-->
            </div> <!--/.col-->
        </div> <!--/.row-->

    </div> <!--/.container-->
</div> <!--/#experience-section-->
<!-- portfolio section end -->

<!-- blog sectioin start -->
<div id="blog-section" class="blog-section pad120">
    <div class="container">

        <!-- indicactor start -->
        <div class="row">
            <div class="col-xs-12">
                <a href="#blog-section" class="indicator light left scroll">
                    <p><i class="fa fa-long-arrow-down"></i></p>
                    <p><i class="fa fa-medium"></i></p>
                </a>
            </div> <!--/.col-->
        </div> <!--/.row-->
        <!-- indicactor end -->

        <!-- section title start -->
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3 class="title-text">My blog</h3>
                </div>
            </div> <!--/.col-->
        </div> <!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="blog-post-list">

                    <?php
                    require_once "singlepost.php";

                    /* get blog list from DB */
                    require_once "../admin/db.php";
                            // var_dump($conn);
                    $sql ="SELECT * FROM post WHERE status='publish' ORDER BY publish_date DESC";
                    $posts=$conn->query($sql);
                    $posts=$posts->fetch_All(MYSQLI_ASSOC);
                    // echo '<pre>';
                    // var_dump($posts[0]);
                    $counter = 1;
                    foreach ($posts as $value):
                        extract($value);
                        $imgurl = $my_root.'uploads/'.$f_img;
// strip tags to avoid breaking any html
                        $string = strip_tags($content);

                        if (strlen($string) > 150) {

    // truncate string
                            $stringCut = substr($string, 0, 90);

    // make sure it ends in a word so assassinate doesn't become ass...
                            $content = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a onclick="singlepagedata('.$id.')">Read More</a>'; 
                        }
                        if(($counter%2)==1):
                            ?>

                            <div class="blog-post-item normal">
                                <div class="col-md-6 col-sm-6">
                                    <div class="thumb-wrap">
                                        <img class="img-responsive" src="<?=$imgurl;?>" alt="">
                                        <div class="blog-post-content">
                                            <a onclick="singlepagedata(<?=$id;?>)">
                                                <h4 class="blog-post-title"><?=$title;?></h4>
                                            </a>
                                            <span class="blog-post-meta"><i class="fa fa-calendar"></i> <?=date('M, d Y', $publish_date);?></span>
                                            <p><?=$content;?></p>
                                        </div>
                                    </div>
                                </div> <!--/.col-->
                            </div>
                            <?php 
                        else:
                            ?>
                            <div class="blog-post-item reverse">
                                <div class="col-md-6 col-md-offset-6 col-sm-6">
                                    <div class="thumb-wrap">
                                        <img class="img-responsive" src="<?=$imgurl;?>" alt="">
                                        <div class="blog-post-content">
                                            <a onclick="singlepagedata('<?=$id;?>')"><h4 class="blog-post-title"><?=$title;?></h4></a>
                                            <span class="blog-post-meta"><i class="fa fa-calendar"></i> <?=date('M, d Y', $publish_date);?></span>
                                            <p><?=$content;?></p>
                                        </div>
                                    </div>
                                </div> <!--/.col-->
                            </div>


                            <?php
                        endif;  
                        $counter++;      
                    endforeach;  
                    ?>



                </div>
            </div> <!--/.col-->
        </div> <!--/.row-->

    </div> <!--/.container-->
</div> <!--/#blog-section-->
<!-- blog sectioin end -->



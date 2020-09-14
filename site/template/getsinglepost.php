<?php
require_once "../../root.php";

$id =$_POST['id'];
require_once "singlepost.php";

/* get blog list from DB */
require_once "../../admin/db.php";
                            // var_dump($conn);
$sql ="SELECT * FROM post WHERE id=$id AND status='publish' ORDER BY publish_date DESC";
$posts=$conn->query($sql);
$posts=$posts->fetch_All(MYSQLI_ASSOC);
extract($posts[0]);

if($f_img!='')
{
$imgurl = $my_root.'uploads/'.$f_img;


}
else{
$imgurl = $my_root.'uploads/noimage.jpg';

}
$publish_date=date('M, d Y', $publish_date);
$var_heredoc =<<<SINGLEPOST

<div class="blog-post-content" style="z-index:500;">
    <a href="blog.html"><h4 class="blog-post-title">$title</h4></a>
        <span class="blog-post-meta"><i class="fa fa-calendar"></i>
        $publish_date
        </span>
</div>
<hr><br>
<div class="row">
    <div class="col-md-12">
        <div class="blog-post-list">
            <div class="blog-post-item normal">
                <div class="col-md-12 col-sm-12">
                    <div>
                        <img class="img-responsive" src="$imgurl" alt="">
                        <br/><br/><br/><br/>
                            <div class="col-md-2 col-sm-2">
                            </div>
                            <div class="col-md-10 col-sm-10">
                                                
                                <p>$content</p>
                            </div>
                            <div class="col-md-2 col-sm-2">
                            </div>
                        </div>
                    </div> <!--/.col-->
                </div>
            </div>
        </div>
    </div>



SINGLEPOST;
        echo $var_heredoc;
        die();
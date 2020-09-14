
<?php
$sql = "SELECT * FROM knowledge ";
$skillsql = "SELECT * FROM skills";
$result = $conn->query($sql);
$result=($result->num_rows >0)?$result->fetch_All(MYSQLI_ASSOC): '';


$skills = $conn->query($skillsql);
$skills=($skills->num_rows >0)?$skills->fetch_All(MYSQLI_ASSOC): '';

?>

<!-- knowledge section start -->
<div id="knowledge-section" class="knowledge-section pad120 bg-color-dark alter-text">
    <div class="container">
        <!-- indicactor start -->


        <div class="row">
            <div class="col-xs-12">
                <a href="#knowledge-section" class="indicator dark left scroll">
                    <p><i class="fa fa-long-arrow-down"></i></p>
                    <p><i class="fa fa-laptop"></i></p>
                </a>
            </div> <!--/.col-->

        </div> <!--/.row-->
        <!-- indicactor end -->

        <!-- section title start -->
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3 class="title-text">Knowledge</h3>
                </div>
            </div> <!--/.col-->
        </div> <!--/.row-->
        <!-- section title end -->

        <div class="row">
         <?php
         if(is_array($result)):
             foreach ($result as  $data):
                extract($data);
                ?>

                <div class="col-md-4 col-sm-4">
                    <div class="feature-box mb40">
                        <div class="feature-title">
                            <i class="fa fa-<?=$icon;?>"></i>
                            <h4><?=$title;?></h4>
                        </div>
                        <div class="feature-content">
                            <p><?=$short_info;?></p>
                        </div>
                    </div>
                </div> <!--/.col-->

                <?php
            endforeach;
        endif;
        ?>
        <!--/.col-->
    </div> <!--/.row-->

    <!-- section title start -->
    <div class="row">
        <div class="col-xs-12">
            <div class="section-title">
                <h3 class="sm-title-text">My skills</h3>
            </div>
        </div> <!--/.col-->
    </div> <!--/.row-->
    <!-- section title end -->

    <div class="row">
       <?php
       if(is_array($skills)):

         foreach ($skills as  $skill):
            extract($skill);
            ?>
            <div class="col-md-6">
                <div class="skill">
                    <h4><?=$area?> <span><?=$percentage;?></span></h4>
                    <div class="progress">
                        <div class="progress-bar" data-percent="<?=$percentage;?>"></div>
                    </div> <!--/.progress-->
                </div> <!--/.skills-->
            </div> <!--/.col-->
            <?php
        endforeach;
    endif;
    ?>
</div> <!--/.row-->

</div> <!--/.container-->
</div> <!--/.#knowledge-section-->
<!-- knowledge section end -->

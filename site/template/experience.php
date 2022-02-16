
<!-- experience sectiton start -->
<div id="experience-section" class="experience-section pad120">
    <div class="container">
        <!-- indicactor start -->
        <div class="row">
            <div class="col-xs-12">
                <a href="#experience-section" class="indicator light right scroll">
                    <p><i class="fa fa-long-arrow-down"></i></p>
                    <p><i class="fa fa-trophy"></i></p>
                </a>
            </div> <!--/.col-->
        </div> <!--/.row-->
        <!-- indicactor end -->

        <div class="row">
            <div class="col-md-7 col-md-offset-5">
                <div class="section-title text-right">
                    <h3 class="title-text">Experience</h3>
                    <h5 class="subtitle-text">Hello! I’m <?=$fullname?>. I am a web developer.It took ages for me to find myself. Here I am. I love to learn different skills at different fields. It feels like time is not enough. Still, I am learning.</h5>
                </div>
            </div> <!--/.col-->
        </div> <!--/.row-->

        <div class="row">
            <div class="col-xs-12">
                <div class="experience-content-wrap" id="experience"></div> 
                <!--/.experience-content-wrap-->
                <script>
                    function get_experience_ajax(page_id=1){
                        $.ajax({
                            type: "POST",
                            url: "<?=$my_root.'site/template/getexperience.php';?>", 
                            data:{page_id:page_id},
                            success: function(result){
                                var obj = jQuery.parseJSON(result);
                                $('#experience').html(obj.posts);
                            }
                        });
                    }

                   get_experience_ajax();
                </script>
            </div> <!--/.col-->
        </div> <!--/.row-->
    </div> <!--/.container-->
</div> <!--/.#experience-section-->
<!-- experience sectiton end -->

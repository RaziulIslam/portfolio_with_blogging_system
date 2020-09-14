<?php 
require_once "singlepost.php";

?>
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
        <div>
            <div class="col-md-12">
                <div style="float: right;">
                    <label>Search blog</label>
                    <input type="text" name="blog" id="blog" class="form-control">
                    <div id="blogList"><ul class="list-unstyled">
                    </ul>
                </div>    
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="blog-post-list">
                <div id="pagination">                    </div>
                <div id="posts">                    </div>

                <script>
                    function get_blogs_ajax(page_id=1)
                    {
                        var query = $('#blog').val();
                        if (query != '') {

                           $.ajax({
                            type: "POST",
                            url: "<?=$my_root.'site/template/searchblog.php';?>", 
                            data:{page_id:page_id,query:query},
                            success: function(result){
                              var obj = jQuery.parseJSON(result);

                              // console.log(obj);

                              $('#pagination').html(obj.page);
                              $('#posts').html(obj.posts);


                          }
                      });
                       }
                       else{
                           $.ajax({
                            type: "POST",
                            url: "<?=$my_root.'site/template/getblogs.php';?>", 
                            data:{page_id:page_id,query:query},
                            success: function(result){
                              var obj = jQuery.parseJSON(result);

                              // console.log(obj);

                              $('#pagination').html(obj.page);
                              $('#posts').html(obj.posts);


                          }
                      });
                       }

                   }

                   get_blogs_ajax();

                   $('#blog').keyup(function(){
                    page_id =1;
                    var query = $(this).val();
                     $.ajax({
                        type: "POST",
                        url: "<?=$my_root.'site/template/searchblog.php';?>", 
                        data:{page_id:page_id,query:query},
                        success: function(result){
                          var obj = jQuery.parseJSON(result);

                              // console.log(obj);

                              $('#pagination').html(obj.page);
                              $('#posts').html(obj.posts);


                          }
                      });

               });

           </script>

       </div>
   </div> <!--/.col-->
</div> <!--/.row-->

</div> <!--/.container-->
</div> <!--/#blog-section-->
<!-- blog sectioin end -->



<?php

session_start();
extract($_SESSION);
if(!$login)
{
    header("Location: $my_root");
}
include_once "header.php";
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Post</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
<div class="container">
    <div class="row">
        
        <div class="col-md-8 col-md-offset-2" style="margin-left: 10px;">
            
            <h1>Create post</h1>
            
            <form action="" method="POST">
                       
                <div class="form-group">
                    <label for="title">Title <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title" />
                </div>
                
                <div class="adjoined-bottom">
        <div class="grid-container">
            <div class="grid-width-100">
                <div id="editor">
                    <h1>Hello world!</h1>
                    <p>I'm an instance of <a href="https://ckeditor.com">CKEditor</a>.</p>
                </div>
            </div>
        </div>
    </div>
                
                <div class="form-group">
                    <p><span class="require">*</span> - required fields</p>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                    <button class="btn btn-default">
                        Cancel
                    </button>
                </div>
                
            </form>
        </div>
        
    </div>
</div>



<?php
include_once "footer.php";
?>



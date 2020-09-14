<?php
include_once "header.php";

extract($_SESSION);
if(!$login)
{
	header("Location: $my_root");
}
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add New Post</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <form action="savenew.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="InputTitle">Title</label>
        <input name="title" type="text" class="form-control" id="InputTitle"  placeholder="Enter Title" required>
    </div>
    <div class="form-group">
        <label for="InputTitle">Sub Title</label>
        <input name="subtitle" type="text" class="form-control" id="InputsubTitle"  placeholder="Enter Sub Title" >
    </div>

    <div class="form-group">
        <label for="InputContent">Content</label><br>
        <textarea name="content" id="editor"></textarea>
        <script>
            ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
        </script>

    </div>

    <div class="form-group">
        <label for="InputTitle">Category</label>
        <select>
            <option value="">Uncategory</option>
        </select>
    </div>
    <div class="form-group">
        <div class="imageupload panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Upload Image</h3>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default active">File</button>
                        <button type="button" class="btn btn-default">URL</button>
                    </div>
                </div>
                <div class="file-tab panel-body">
                    <label class="btn btn-default btn-file">
                        <span>Browse</span>
                        <!-- The file is stored here. -->
                        <input name="image-file" type="file">
                    </label>
                    <button type="button" class="btn btn-default" style="display: none;">Remove</button>
                </div>
                <div class="url-tab panel-body">
                    <div class="input-group">
                        <input class="form-control hasclear" placeholder="Image URL" type="text">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-default" style="display: none;">Remove</button>
                    <!-- The URL is stored here. -->
                    <input name="image-url" value="" type="hidden">
                </div>
            </div>

    </div>


    <div class="form-group">
        <label for="InputStatus">Status</label>
        <select name="status">
            <option value="draft">Draft</option>            
            <option value="pending">Pending</option>
            <option value="publish">Publish</option>

        </select>
    </div>

    <div class="form-group">
        <label for="InputStatus">Type</label>
        <select name="post_type">
            <option value="blog">Blog</option>            
            <option value="experience">Experience</option>
            <option value="portfolio">Portfolio</option>

        </select>
    </div>
    <div class="form-group">
        <label for="InputTitle">Duration</label>
        <input name="duration" type="text" class="form-control" id="Inputduration"  placeholder="Enter Time Duration if experience post type" >
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

 


<?php
include_once "footer.php";
?>



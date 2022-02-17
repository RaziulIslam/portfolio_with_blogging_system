<!-- PHP if statement start -->
<?php
    include_once "header.php";

    extract($_SESSION);
    if(!$login){
        header("Location: $my_root");
    }
    include_once "db.php";

    $id=$_GET['id'];
    /* Get details Post*/

    $get_details_post_sql = "SELECT * FROM post WHERE id=$id";
    $post_details = $conn->query($get_details_post_sql);
    $post_details = $post_details->fetch_All(MYSQLI_ASSOC);

    if($post_details):
        extract($post_details[0]);
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Post</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <form action="<?php echo $my_root.'admin/update.php';?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="InputTitle">Title</label>
            <input name="title" type="text" class="form-control" id="InputTitle" value="<?=$title;?>"  placeholder="Enter Title" required>
        </div>

        <div class="form-group">
            <label for="InputTitle">Sub Title</label>
            <input name="subtitle" type="text" value="<?=$sub_title;?>"  class="form-control" id="InputsubTitle"  placeholder="Enter Sub Title" >
        </div>

        <div class="form-group">
            <label for="InputContent">Content</label><br>
            <textarea  name="content" id="edit_editor"></textarea>
            <script>
                CKEDITOR.replace( 'edit_editor', {
                    language: 'en',
                    uiColor: '#9AB8F3'
                });
                content_data =<?php echo json_encode($content );?>;
                CKEDITOR.instances['edit_editor'].setData(content_data);
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
                <div class="file-tab panel-body post_thumb">
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
                <option value="draft" <?=($status == 'draft') ? 'selected' : '';?>>Draft</option>            
                <option <?=($status == 'pending') ? 'selected' : '';?> value="pending">Pending</option>
                <option <?=($status == 'publish') ? 'selected' : '';?> value="publish">Publish</option>
            </select>
        </div>

        <div class="form-group">
            <label for="InputStatus">Type</label>
            <select name="post_type">
                <option value="blog" <?=($post_type == 'blog') ? 'selected' : '';?>>Blog</option>          
                <option <?=($post_type == 'experience') ? 'selected' : '';?> value="experience">Experience</option>
                <option <?=($post_type == 'portfolio') ? 'selected' : '';?> value="portfolio">Portfolio</option>
            </select>
        </div>

        <div class="form-group">
            <label for="InputTitle">Duration</label>
            <input name="duration" type="text" class="form-control" id="Inputduration"  placeholder="Enter Time Duration if experience post type" value="<?=$duration;?>">
        </div>

        <input type="hidden" name='postId' value="<?=$id;?>">
        <input type="submit" class="btn btn-primary" value="update">
    </form>

<?php
    else:
?>
        <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Post</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
<?php
    echo '<h2>Sorry No post details found.</h2>';
    endif;
    include_once "footer.php";
?>
<!-- PHP if statement end here -->
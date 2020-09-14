<?php
include_once "header.php";

extract($_SESSION);
if(!$login)
{
	header("Location: $my_root");
}
require_once "getprofile.php";

?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Profile Update</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <form action="saveprofile.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="InputTitle">Introduction</label>
        <textarea name="intro" class="form-control"  row="15" id="InputTitle"  placeholder="Enter Intro" required><?=$introduction;?></textarea>
    </div>

     <div class="form-group">
        <label for="InputObject">Objective</label>
        <textarea name="objective" class="form-control"  row="15" id="InputObjective"  placeholder="Enter Objective" required><?=$objective;?></textarea>
    </div>
    <div class="form-group">
        <label for="InputName">Name</label>
        <textarea name="fullname"  class="form-control"  row="15" id="InputName"  placeholder="Enter Name" required><?=$fullname;?></textarea>
    </div>
    <div class="form-group">
        <label for="InputExpertise">Expertise</label>
        <textarea name="expertise"  class="form-control"  row="15" id="InputExpertise"  placeholder="Enter Area" required><?=$expertise;?></textarea>
    </div>
    <div class="form-group">
        <label for="InputAge">Age</label>
        <textarea name="age"  class="form-control"  row="15" id="InputAge"  placeholder="Enter Age" required><?=$age;?></textarea>
    </div>
    <div class="form-group">
        <label for="InputEmail">Email</label>
        <textarea name="email"  class="form-control"  row="15" id="InputEmail"  placeholder="Enter Email" required><?=$email;?></textarea>
    </div>
    <div class="form-group">
        <label for="InputAddress">Address</label>
        <textarea name="address"  class="form-control"  row="15" id="InputAddress"  placeholder="Enter Address" required><?=$address;?></textarea>
    </div>
    <div class="form-group">
        <label for="InputPhone">Phone no</label>
        <textarea name="phone"  class="form-control"  row="15" id="InputPhone"  placeholder="Enter Phone" required><?=$phone;?></textarea>
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


    <button type="submit" class="btn btn-primary">Update</button>
</form>

 


<?php
include_once "footer.php";
?>



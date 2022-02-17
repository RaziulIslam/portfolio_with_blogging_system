<?php
    include_once "header.php";

    extract($_SESSION);
    if(!$login){
        header("Location: $my_root");
    }
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Settings</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <form action="addreferences.php" method="post" >
                <div class="form-group">
                    <label for="InputObject">Brand Text</label>
                    <textarea name="content" class="form-control" row="30" id="content"  placeholder="Enter content" style="margin: 0px 140px 0px 0px; width: 100%; height: 157px;"></textarea>
                </div>

                <div class="form-group">
                    <label for="InputAddress">Address</label>
                    <input name="address" class="form-control" row="15" id="address" placeholder="Enter Address">
                </div>

                <div class="form-group">
                    <label for="InputEmail">Email </label>
                    <input name="email" class="form-control" row="15" id="email" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="InputPhone">Phone </label>
                    <input name="phone" type="tel" class="form-control" row="15" id="phone" placeholder="Enter phone no ">
                </div>

                <div class="form-group">
                    <label for="InputFbLink">Facebook Link </label>
                    <input name="fblink" class="form-control" row="15" id="fblink" placeholder="Enter facebook link">
                </div>

                <div class="form-group">
                    <label for="InputTwitterLink">Twitter Link </label>
                    <input name="twitterlink" class="form-control" row="15" id="twitterlink" placeholder="Enter twitter link">
                </div>

                <div class="form-group">
                    <label for="InputInstaLink">Insta Link </label>
                    <input name="instalink" class="form-control" row="15" id="instalink" placeholder="Enter insta link">
                </div>

                <div class="form-group">
                    <label for="InputLinkedinLink">Linked In Link </label>
                    <input name="linkedinlink" class="form-control" row="15" id="linkedinlink" placeholder="Enter facebook link">
                </div>
                <button style="float: right;" type="button" onclick="add_contact()" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function add_contact(){
        var content = document.getElementById("content").value;
        var address = document.getElementById("address").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var fblink = document.getElementById("fblink").value;
        var twitterlink = document.getElementById("twitterlink").value;
        var instalink = document.getElementById("instalink").value;
        var linkedinlink = document.getElementById("linkedinlink").value;
        
        var xhr = new XMLHttpRequest();
        var formData = new FormData();

        formData.append("content",content);
        formData.append("address",address);
        formData.append("email",email);
        formData.append("phone",phone);
        formData.append("fblink",fblink);
        formData.append("twitterlink",twitterlink);
        formData.append("instalink",instalink);
        formData.append("address",address);
        formData.append("linkedinlink",linkedinlink);

        xhr.onreadystatechange = function(){
            if(xhr.readyState === 4 && xhr.status === 200){
                //var response = JSON.parse(xhr.responseText);
                //alert(response.userName);
            }
        }

        xhr.open('post',"<?=$my_root.'admin/savecontact.php';?>", true);
       // xhr.setRequestHeader("Content-Type","multipart/form-data");
       xhr.send(formData);
        //get_reference();
    }

    function get_reference(){
        var reference_list_html ='';
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function(){
            if(xhr.readyState === 4 && xhr.status === 200){
                var response = JSON.parse(xhr.responseText);
                for (var i = 0; i < response.length; i++) {
                    var value = response[i];
                    
                    document.getElementById("reference_list").innerHTML  +='<tr><td>#</td>'+                    
                    '<td>'+value.name+'</td>'+
                    '<td>'+value.designation+'</td>'+
                    '<td>'+value.content+'</td>'+
                    '</tr>';
                }
            }
        }

        xhr.open('post',"<?=$my_root.'admin/getreferences.php';?>", true);
        
        xhr.send();
        document.getElementById("reference_list").innerHTML = reference_list_html;
    }
   // get_reference();
   
</script>

<?php 
    include_once "footer.php";
?>

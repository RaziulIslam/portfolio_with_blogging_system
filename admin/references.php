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
			<h1 class="page-header">Manage Your References</h1>
		</div>
		<!-- /.col-lg-12 -->

	</div>

	<div class="row">
		<div class="col-lg-4">
			<form action="getreferences.php" method="post" >

				

				<div class="form-group">
					<label for="InputObject">testimonial-content</label>
					<textarea name="content" class="form-control"  row="30" id="content"  placeholder="Enter content" style="margin: 0px 140px 0px 0px; width: 100%; height: 157px;" ></textarea>
				</div>
				<div class="form-group">
					<label for="InputName">testimonial-name</label>
					<input name="name"  class="form-control"  row="15" id="name"  placeholder="Enter Name"  >
				</div>
				<div class="form-group">
					<label for="Inputdesignation">designation</label>
					<input name="designation"  class="form-control"  row="15" id="designation"  placeholder="Enter designation"  >
				</div>
				<div class="form-group">
					<div class="imageupload panel panel-default">
						<div class="panel-heading clearfix">

							<h3 class="panel-title pull-left">Upload Client Image</h3>
							<div class="btn-group pull-right">
								<button type="button" class="btn btn-default active">File</button>
							</div>
						</div>
						<div class="file-tab panel-body post_thumb">
							<label class="btn btn-default btn-file">
								<span>Browse</span>
								<!-- The file is stored here. -->
								<input name="client-image-file" id="clientImg" type="file">
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
					<div class="imageupload panel panel-default">
						<div class="panel-heading clearfix">
							<h3 class="panel-title pull-left">Upload company Image</h3>
							<div class="btn-group pull-right">
								<button type="button" class="btn btn-default active">File</button>
							</div>
						</div>
						<div class="file-tab panel-body post_thumb_b">
							<label class="btn btn-default btn-file">
								<span>Browse</span>
								<!-- The file is stored here. -->
								<input name="company-image-file" id="companyImg" type="file">
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
							<input name="banner-image-url" value="" type="hidden">
						</div>
					</div>

				</div>


				<button type="button" onclick="add_new_reference()" class="btn btn-primary">Add</button>
			</form>
		</div>
		<div class="col-lg-8">
			<table class="table" >
				<th>Action</th>
				<th>Name</th>
				<th>Designation</th>
				<th>Content</th>
				<tbody id="reference_list">
					
				</tbody>

			</table>

		</div>
	</div>

</div>


<script type="text/javascript">
	function add_new_reference()
	{
		var content =document.getElementById("content").value;
		var name=document.getElementById("name").value;
		var designation = document.getElementById("designation").value;

		var xhr = new XMLHttpRequest();

		var formData = new FormData();
		formData.append("content",content);
		formData.append("name",name);
		formData.append("designation",designation);

		formData.append("client-image-file", document.getElementById("clientImg").files[0]);
		//formData.append("company-image-file", document.getElementById("companyImg").files[0]);

		xhr.onreadystatechange=function(){
			if(xhr.readyState === 4 && xhr.status===200){
				//var response = JSON.parse(xhr.responseText);
				//alert(response.userName);
			}
		}


		xhr.open('post',"<?=$my_root.'admin/savereferences.php';?>", true);
       // xhr.setRequestHeader("Content-Type","multipart/form-data");
        xhr.send(formData);
  //       document.getElementById("content").innerHTML ='';
		// document.getElementById("name").innerHTML='';
		// document.getElementById("designation").innerHTML='';
        get_reference();
}

	function get_reference()
	{
		
		var reference_list_html ='';
		var xhr = new XMLHttpRequest();

		xhr.onreadystatechange=function(){
			if(xhr.readyState === 4 && xhr.status===200){
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
	get_reference();

</script>
<?php 
include_once "footer.php";
?>

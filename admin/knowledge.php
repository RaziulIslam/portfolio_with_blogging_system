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
			<h1 class="page-header">Manage Your Knowledge</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>

	<div class="row">
		<div class="col-lg-4">
			<form action="addknowledge.php" method="post">
				<div class="form-group">
					<label for="InputName">Title</label>
					<input name="title" class="form-control" row="15" id="InputName" placeholder="Enter Name" required>
				</div>

				<div class="form-group">
					<label for="InputObject">Short Desc</label>
					<textarea name="short_info" class="form-control" row="15" id="short_info"  placeholder="Enter Objective" required></textarea>
				</div>

				<div class="form-group">
					<label for="InputObject">Icon</label>
					<input name="icon" class="form-control" row="15" id="icon" placeholder="icon name write here" required>
				</div>
				<button type="button" onclick="add_new_knowledge()" class="btn btn-primary">Add</button>
			</form>
		</div>
		<div class="col-lg-8">
			<table class="table" >
				<th>Action</th>
				<th>Title</th>
				<th>Short Info</th>
				<th>Icon</th>
				<tbody id="knowledge_list">
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	function add_new_knowledge(){
		var title = $("input[name='title']").val();
		var short_info = $("textarea[name='short_info']").val();
		var icon = $("input[name='icon']").val();

		$.ajax({
			type: "POST",
			url: "<?=$my_root.'admin/addknowledge.php';?>", 
			data:{title:title,short_info:short_info,icon:icon},
			success: function(result){
				$("input[name='title']").val('');
				$("textarea[name='short_info']").val('');
				$("input[name='icon']").val('');
				get_knowledge();
			}
		});
	}

	function get_knowledge(){
		var knowledge_list_html = '';
		$.ajax({
			url: "<?=$my_root.'admin/getknowledge.php';?>", 
			success: function(result){
				var obj = jQuery.parseJSON(result);

				$.each(obj, function( index, value ) {
					knowledge_list_html +='<tr><td>#</td>'+					
					'<td>'+value.title+'</td>'+
					'<td>'+value.short_info+'</td>'+
					'<td><i class="fa fa-'+value.icon+'" aria-hidden="true"></i></td>'+
					'</tr>';
				});
				
				$('#knowledge_list').html(knowledge_list_html);
			}
		});
	}
	get_knowledge();
</script>

<?php 
	include_once "footer.php";
?>

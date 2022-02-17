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
				<h1 class="page-header">Manage Your Skills</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4">
				<form action="addknowledge.php" method="post" >
					<div class="form-group">
						<label for="InputName">Skill Area</label>
						<input name="area" class="form-control" row="15" id="InputName"  placeholder="Enter Name" required >
					</div>

					<div class="form-group">
						<label for="InputObject">Mark Yourself Out of 100</label>
						<input type="number" name="percentage" class="form-control" row="2" id="short_info" placeholder="Enter Mark" required>
					</div>
					<button type="button" onclick="add_new_skill()" class="btn btn-primary">Add</button>
				</form>
			</div>

			<div class="col-lg-8">
				<table class="table">
					<th>Action</th>
					<th>Title</th>
					<th>Parcentage</th>
					<tbody id="skill_list">
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function add_new_skill(){
			var area = $("input[name='area']").val();
			var percentage = $("input[name='percentage']").val();

			$.ajax({
				type: "POST",
				url: "<?=$my_root.'admin/addskill.php';?>", 
				data:{area:area,percentage:percentage},
				success: function(result){
					$("input[name='area']").val('');
					$("input[name='percentage']").val('');
					get_skill();					
				}
			});
		}

		function get_skill(){
			var skill_list_html ='';
			$.ajax({
				url: "<?=$my_root.'admin/getskill.php';?>", 
				success: function(result){
					var obj = jQuery.parseJSON(result);

					$.each(obj, function( index, value ) {
						skill_list_html +='<tr><td>#</td>'+					
						'<td>'+value.area+'</td>'+
						'<td>'+value.percentage+'</td>'+
						'</tr>';
					});

					$('#skill_list').html(skill_list_html);
					$('#inputName').reset();
				}
			});
		}
		get_skill();
	</script>

<?php 
	include_once "footer.php";
?>

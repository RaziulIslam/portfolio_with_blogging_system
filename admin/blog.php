<?php
include_once "header.php";

extract($_SESSION);
if(!$login)
{
	header("Location: $my_root");
}
include_once "db.php";
/* get post list from database */

$get_post_sql ="SELECT * FROM `post` ORDER BY publish_date desc";
$posts=$conn->query($get_post_sql);
$posts=$posts->fetch_All(MYSQLI_ASSOC);



?>

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Post List</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->


	<table class="table">
  <thead>
    <tr>
      <th scope="col">Action</th>
      <th scope="col">#</th>
      <th scope="col">Post Type</th>      
      <th scope="col">Title</th>
      <th scope="col">Publish Date</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	$counter =1;
  	foreach($posts as $data):
  		extract($data);
  	?>
	<tr>
    <th><a href="<?=$my_root.'admin/edit.php/?id='.$id;?>">
      <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    </a></th>
      <th scope="row"><?=$counter;?></th>
      <td><?=$post_type;?></td>
      <td><?=$title;?></td>      
      <td><?=date('d  F Y ', $publish_date);?></td>
      <td><?=$status;?></td>
    </tr>
  	<?php 
$counter++;
  	endforeach;
  	?>
    
    
  </tbody>
</table>




	<?php
	include_once "footer.php";
	?>



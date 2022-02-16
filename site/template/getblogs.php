<?php
	require_once "../../root.php";
	/* get blog list from DB */
	require_once "../../admin/db.php";

	$page_id = $_POST['page_id'];
	$limit = 2;
	$offset = ($page_id - 1) * $limit;
	$search_query = $_POST['query'];

	if($search_query != ''){
		$search_query_sql = " AND like '%$search_query%'";
	}
	else{
		$search_query_sql = ' ';
	}

	$get_total_count_sql = "SELECT count(id) FROM post WHERE status='publish' $search_query_sql AND post_type='blog' ORDER BY publish_date DESC";
	$get_total_count = $conn->query($get_total_count_sql);
	$get_total_count = $get_total_count->fetch_row()[0];

	$sql = "SELECT * FROM post WHERE status='publish' AND post_type='blog' $search_query_sql ORDER BY publish_date DESC LIMIT $limit OFFSET $offset";
	$posts = $conn->query($sql);
	$posts = $posts->fetch_All(MYSQLI_ASSOC);
	$initial_page = 1;

	if($page_id > 1){
		$start_page_html = '<li><a onclick="get_blogs_ajax('.$initial_page.')"> |<< </a></li>
		<li><a onclick="get_blogs_ajax('.($page_id - 1).')"> << </a></li>';
	}
	else{
		$start_page_html ='';
	}
	$max_pagenumber = round($get_total_count / $limit);

	$i = (($page_id - 2) < 1) ? 1 : ($page_id - 2); 
	$endpoint = (($i + 4) > $max_pagenumber) ? $max_pagenumber : ($i + 4);
	$i = (($endpoint - $i) < 5) ? (($endpoint - 4) < 1 ) ? 1 : ($endpoint - 4) : $i;
	$page_html = '';
	for($i; $i <= $endpoint; $i++) {
		
		if($page_id == $i){
			$page_html .= '<li class="active"><a onclick="get_blogs_ajax('.$i.')">'.$i.'</a></li>';
		}
		else{
			$page_html .= '<li><a onclick="get_blogs_ajax('.$i.')">'.$i.'</a></li>';
		}
	}

	$last_page_html = ($max_pagenumber > $endpoint) ? '<li><a onclick="get_blogs_ajax('.$max_pagenumber.')"> >>| </a></li>' : '';

	$next_page_html = '';
	if($page_id < ($max_pagenumber)){
		$next_page_html = '<li><a onclick="get_blogs_ajax('.($page_id + 1).')"> >> </a></li>';
	}

	$pagination = <<<PAGINATION

	<ul class="pagination">
		$start_page_html
	</ul> 

	<ul class="pagination">
		$page_html
	</ul> 

	<ul class="pagination">
		$next_page_html
	</ul> 
	<ul class="pagination">
		$last_page_html
	</ul> 

PAGINATION;

	$posts = create_posts_html($posts,$my_root );

	echo json_encode([
		'page'=>$pagination,
		'posts'=>$posts
	]);

	die();

	function create_posts_html($posts,$my_root){
		$final_posts_html = '';
		$counter = 1;

		foreach ($posts as $value){
			extract($value);
			$imgurl = $my_root.'uploads/'.$f_img;

			// strip tags to avoid breaking any html
			$string = strip_tags($content);

			if (strlen($string) > 150) {
				// truncate string
				$stringCut = substr($string, 0, 90);

				// make sure it ends in a word so assassinate doesn't become ass...
				$content = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a onclick="singlepagedata('.$id.')">Read More</a>'; 
			}

			if(($counter % 2) == 1){
				$design =' normal';
				$design_offset =' ';
			}
			else{
				$design = ' reverse';
				$design_offset = ' col-md-offset-6';

			}

			if($f_img != ''){
				$imgurl = $my_root.'uploads/'.$f_img;
			}
			else{
				$imgurl = $my_root.'uploads/noimage.jpg';
			}

			$publish_date = date('M, d Y', $publish_date);

				$final_posts_html .=	<<< POSTDESIGN

					<div class="blog-post-item $design">
						<div class=" $design_offset col-md-6 col-sm-6">
							<div class="thumb-wrap">
								<img class="img-responsive" src="$imgurl" alt="">
								<div class="blog-post-content">
									<a onclick="singlepagedata($id)"><h4 class="blog-post-title">$title</h4></a>
									<span class="blog-post-meta"><i class="fa fa-calendar"></i> $publish_date </span>
									<p>$content</p>
								</div>
							</div>
						</div> 
					</div>
POSTDESIGN;

			$counter++;
		}
		return $final_posts_html;
	}
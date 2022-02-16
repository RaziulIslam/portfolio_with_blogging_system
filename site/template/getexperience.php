<?php
	require_once "../../root.php";

	/* get blog list from DB */
	require_once "../../admin/db.php";

	$page_id = $_POST['page_id'];

	$get_total_count_sql = "SELECT count(id) FROM post WHERE status='publish' AND post_type='experience' ORDER BY publish_date DESC";
	$get_total_count = $conn->query($get_total_count_sql);
	$get_total_count = $get_total_count->fetch_row()[0];

	$sql = "SELECT * FROM post WHERE status='publish' AND post_type='experience' ORDER BY publish_date DESC ";
	$posts = $conn->query($sql);
	$posts = $posts->fetch_All(MYSQLI_ASSOC);
	$initial_page = 1;
	// $first_page_html =($page_id>1)?'<li><a onclick="get_blogs_ajax('.1.')"> |<< </a></li>':'';

	$posts=create_posts_html($posts,$my_root );

	echo json_encode([
		'posts'=>$posts
	]);

	die();

	function create_posts_html($posts,$my_root ){
		$final_posts_html ='';
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

			if($f_img != ''){
				$imgurl = $my_root.'uploads/'.$f_img;
			}
			else{
				$imgurl = $my_root.'uploads/noimage.jpg';
			}

			$publish_date = date('M, d Y', $publish_date);

			if(($counter % 2) == 1){
				$design =' col-md-3 col-sm-3';
				$design_offset =' ';

		$final_posts_html .=	<<< POSTDESIGN

			<div class="experience-item row mb40">
				<div class="col-md-3 col-sm-3">
					<div class="duration">$duration</div>
				</div>
				<div class="col-md-9 col-sm-9">
					<div class="content $design_offset">
						<h4 class="title">Web Developmet</h4>
						<p class="designation">Trainee</p>
						<p>LICT TOP-UP IT Training for Web Development at Bdjobs.com Limited,BDBL Building, 12 Kawran Bazar, Dhaka 1215. Topic coverd CSS, HTML, JAVA Script, JQuery, Wordpress, MySQL, PHP, Laravel.</p>
					</div>
				</div>
			</div>
POSTDESIGN;
		}
		else{
			$design =' col-md-9 col-sm-9';
			$design_offset =' text-right';

			$final_posts_html .=	<<< POSTDESIGN

			<div class="experience-item row mb40">
				<div class="col-md-9 col-sm-9">
					<div class="content text-right">
						<h4 class="title">Web Developer</h4>
						<p class="designation">Participator</p>
						<p>Participated in the National HACKATHON 2014 & National HACKATHON 2016.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="duration">$duration</div>
				</div>
			</div>
POSTDESIGN;

			}

			$counter++;
		}
		return $final_posts_html;
	}
?>
<?php
    require_once "../../root.php";
    /* get blog list from DB */
    require_once "../../admin/db.php";
    $page_id = $_POST['page_id'];

    $limit = 4;
    $offset = ($page_id - 1) * $limit;

    $sql = "SELECT * FROM post WHERE post_type='portfolio' AND status='publish' ORDER BY id ASC LIMIT $limit OFFSET $offset";
    $portfolio = $conn->query($sql);
    $portfolio = ($portfolio->num_rows > 0) ? $portfolio->fetch_All(MYSQLI_ASSOC): '';

    $get_total_count_sql = "SELECT count(id) FROM post WHERE post_type='portfolio' AND status='publish' ORDER BY id ASC";
        $get_total_count = $conn->query($get_total_count_sql);
        $get_total_count = $get_total_count->fetch_row()[0];

    $pagination = create_pagination_html($get_total_count,$page_id,$limit);
    $profiles = create_posts_html($portfolio,$my_root );
    echo json_encode([
        'page'=>$pagination,
        'profiles'=>$profiles
    ]);

    die(); 

    function create_posts_html($portfolio,$my_root ){
        $design='<div class="portfolio-wrap">';

        if(is_array($portfolio)){
            for($i = 0; $i < 5; $i++){
                $data = isset($portfolio[$i]) ? $portfolio[$i] : $portfolio[0];
                extract($data);
                //var_dump($title);
                //die();
                $portfolio_imgurl = $my_root.'uploads/'.$f_img;

                switch ($i) {
                    case 0:
                    $design .= <<<DGN1
                    <div class="portfolio-item grid-item">
                        <div class="portfolio-thumb">
                            <img src="$portfolio_imgurl" alt="">
                                <div class="overley">
                                    <div class="portfolio-title">
                                        <a href="$portfolio_imgurl" class="img-lightbox"><i class="fa fa-search"></i></a>
                                            <h4>$title</h4>
                                    </div>
                                </div>
                        </div>
                    </div>

DGN1;
                        break;

                    case 1:
                        $design .= <<<DGN1
                        <div class="portfolio-item grid-item grid-item--width2">
                            <div class="portfolio-thumb">
                                <img src="$portfolio_imgurl" alt="">
                                    <div class="overley">
                                    <div class="portfolio-title">
                                        <a href="$portfolio_imgurl" class="img-lightbox"><i class="fa fa-search"></i></a>
                                        <h4>$title</h4>
                                        </div>
                                    </div>
                            </div>
                        </div>

DGN1;
                        break;

                    case 2:
                        $design .= <<<DGN1
                        <div class="portfolio-item grid-item">
                            <div class="portfolio-thumb">
                                <img src="$portfolio_imgurl" alt="">
                                    <div class="overley">
                                        <div class="portfolio-title">
                                        <a href="$portfolio_imgurl" class="img-lightbox"><i class="fa fa-search"></i></a>
                                        <h4>$title</h4>
                                        </div>
                                    </div>
                            </div>
                        </div>

DGN1;
                        break;

                    case 3:
                    $design .= <<<DGN1
                    <div class="portfolio-item grid-item">
                        <div class="portfolio-thumb">
                            <img src="$portfolio_imgurl" alt="">
                                <div class="overley">
                                    <div class="portfolio-title">
                                        <a href="$portfolio_imgurl" class="img-lightbox"><i class="fa fa-search"></i></a>
                                        <h4>$title</h4>
                                    </div>
                            </div>
                        </div>
                    </div>
DGN1;
                        break;

                    case 4:
                    $design .= <<<DGN1
                    <div class="portfolio-item grid-item">
                        <div class="portfolio-thumb">
                            <img src="$portfolio_imgurl" alt="">
                                <div class="overley">
                                    <div class="portfolio-title">
                                        <a href="$portfolio_imgurl" class="img-lightbox"><i class="fa fa-search"></i></a>
                                        <h4>$title</h4>
                                    </div>
                                </div>
                        </div>
                    </div>

DGN1;
                        break;
                    default:
                        break;
                }
                            //echo $design;
            }
        }

        $design.='</div>' ; 
        return $design;
    }


    function create_pagination_html($get_total_count,$page_id,$limit){
        $initial_page = 1;

        if($page_id > 4){
            $start_page_html ='<li><a onclick="get_profile('.$initial_page.')"> |<< </a></li>
            <li><a onclick="get_profile('.($page_id-1).')"> << </a></li>';
        }
        else{
            $start_page_html = '';
        }

        $max_pagenumber = ceil($get_total_count / $limit);

        $i = (($page_id - 2) < 1) ? 1 :($page_id - 2); 
        $endpoint =(($i + 4) > $max_pagenumber) ? $max_pagenumber : ($i + 4);
        $i = (($endpoint - $i) <5) ? (($endpoint - 4) < 1) ? 1 : ($endpoint - 4) : $i;
        $page_html = '';
        for($i; $i <= $endpoint; $i++) {
            if($page_id == $i){
                $page_html .='<li class="active"><a onclick="get_profile('.$i.')">'.$i.'</a></li>';
            }
            else{
                $page_html .='<li><a onclick="get_profile('.$i.')">'.$i.'</a></li>';
            }
        }

        $last_page_html = ($max_pagenumber > $endpoint) ? '<li><a onclick="get_profile('.$max_pagenumber.')"> >>| </a></li>' : '';

        $next_page_html = '';
        if($page_id < ($max_pagenumber)){
            $next_page_html ='<li><a onclick="get_profile('.($page_id+1).')"> >> </a></li>';
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
        return $pagination;
    }

    
?>

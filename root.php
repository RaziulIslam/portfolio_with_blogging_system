<?php

    if($_SERVER['SERVER_NAME'] == 'localhost'){
        // After 'http://'.$_SERVER['HTTP_HOST']. put absolute path of home page here
        $my_root = 'http://'.$_SERVER['HTTP_HOST'].'/raziul_portfolio/portfolio_with_blogging_system/';
    } else{
        $my_root = 'http://'.$_SERVER['HTTP_HOST'].'/';
    }
?>
<?php
// session_start();
// var_dump($_SESSION);
// session_destroy();

if($_SERVER['SERVER_NAME']=='localhost')
{
$my_root ='http://'.$_SERVER['HTTP_HOST'].'/tup_php6/james/';

}
else{
    $my_root ='http://'.$_SERVER['HTTP_HOST'];
}


session_start();
session_destroy();
	header("Location: $my_root");
<?php
if($_SERVER['SERVER_NAME']=='localhost')
{
    $my_root ='http://'.$_SERVER['HTTP_HOST'].'/tup_php6/';

}
else{
    $my_root ='http://'.$_SERVER['HTTP_HOST'].'/';
}
?>
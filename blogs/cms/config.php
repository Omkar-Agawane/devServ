<?php
if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['is_logged_in'])) {
    if ($_SESSION['is_logged_in']==false) {
        header('Location:./log');
    }
    else{
        //header('Location:http://localhost/teafweb.com/public_html/blog.teafweb.com/cms/log.php');
    }

}



define("WEBSITE", "localhost/teafweb.in/");
define("SERVER", "localhost");
define("USERNAME", "teafwebi");
define("PASSWORD", "123456@Teaf");
define("DATABASE", "teafwebi_blog");


/*
define("WEBSITE", "localhost/teafweb.in/");
define("SERVER", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "teafwebi_tblog");*/



?>

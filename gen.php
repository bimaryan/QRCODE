<?php
//1
if(isset($_REQUEST['content'])){
    //2
    $size          = $_REQUEST['size'];
    $content       = $_REQUEST['content'];
    $correction    = strtoupper($_REQUEST['correction']);
    $encoding      = $_REQUEST['encoding'];
      
    //3
    $rootUrl = "https://chart.googleapis.com/chart?cht=qr&chs=$size&chl=$content&choe=$encoding&chld=$correction";
      
    //4
    echo '<img src="'.$rootUrl.'">';
}
?>

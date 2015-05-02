<!DOCTYPE HTML>
<html>
<?php
function getmicrotime() { list($usec, $sec) = explode(" ",microtime()); return ((float)$usec + (float)$sec); }
$time_start = getmicrotime(); 
?>
<head>
 <title></title>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <link href="style.css" type="text/css" rel="stylesheet">
 <script type="text/javascript" src="scripts.js"></script>
</head>
<p class="logo"><a href="#"><img src="img/logo.png" style="border: 0;" alt="logo" /></a></p>
<?php
if(@$title!="" && @$title!="title" )
 echo'<title>Comics: '.$title.' &nbsp;&nbsp;Chapter: '.$chapter.' &nbsp;&nbsp;Page: '.substr($page,0,-4).'</title>';
include "read.php";
include "navi.php";

//include "counter.php";

include "buttons.php";
include "image.php";
if($title!="" && $title!="title")
{
 include "buttons.php";
 include "navi.php";
}

$time_end = getmicrotime();
$time = round($time_end - $time_start, 4); 
echo '<p class="script">Genaration time: '.$time.' seconds<br>
      Script version: 1.0</p>';
?>
</html>
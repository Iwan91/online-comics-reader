<?php
if ($page!="" && $page!="page" && file_exists("comics/$title/$chapter/$page"))
{
 if($count3>$count2)
 {
 echo '<p class="image"><a href="?title='.$title.'&chapter='.$chapter.'&page='.$pages[$next].'"><img src="comics/'.$title.'/'.$chapter.'/'.$page.'" alt="'.$title.' '.$chapter.' '.$page.'"></a></p>';
 }
 else
 {
 echo '<p class="image"><img src="comics/'.$title.'/'.$chapter.'/'.$page.'" alt="'.$title.' '.$chapter.' '.$page.'"></p>';
 }
}

?>

<?php
if ($page!="" && $page!="page" && file_exists("comics/$title/$chapter/$page"))
{
 echo '<p class="button">';
 if($count2>1)echo '<a href="?title='.$title.'&chapter='.$chapter.'&page='.$pages[$back].'"><img src="img/back.gif" alt="back"></a>&nbsp;';
 if($count3>$count2)echo '<a href="?title='.$title.'&chapter='.$chapter.'&page='.$pages[$next].'"><img src="img/next.gif" alt="next"></a>';;
 echo'</p>';

}
?>

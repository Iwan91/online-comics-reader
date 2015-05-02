<?php
if($title!="" && $title!="title")
{
?>

<form name="manga" method="get" action="?">
  <p class="names">Comics:
   <select onchange="checktitle(this.options[this.selectedIndex].value)" name="title" class="selectbox">
      <option value="title">Tytuł</option>
      <?php
        for($i=0;$i<count($titles);$i++)
      {
        $file2=str_replace("_", " ", "$titles[$i]");
        if ($titles[$i]!=$title)
         {
         echo '<option value='.$titles[$i].'>'.$file2.'</option>';
         }
         else
         {
         echo '<option value='.$titles[$i].' selected="selected">'.$file2.'</option>';
         }
        }
      ?>
</select>
   Chapter:
   <select onchange="checkchapter('<?php echo"$title";?>',this.options[this.selectedIndex].value)" name="chapter" class="selectbox">
     <option value="chapter">Chapter</option>
      <?php
         for($i=0;$i<count($chapters);$i++)
      {
      if ($chapters[$i]!=$chapter)
         {
         echo '<option value='.$chapters[$i].'>'.$chapters[$i].'</option>';
         }
        else
        {
         echo '<option value='.$chapters[$i].' selected="selected">'.$chapters[$i].'</option>';
        }
      }
      ?>
<script type="text/javascript">check1('<?php echo"$title";?>','<?php echo"$chapter";?>','<?php echo"$chapters[0]";?>')</script>
</select>
   Page:
   <select onchange="checkpage('<?php echo"$title";?>','<?php echo"$chapter";?>',this.options[this.selectedIndex].value)" name="page" class="selectbox">
      <option value="page">Page</option>
      <?php
           for($i=0;$i<count($pages);$i++)
        {
         $count++;
         $file2=substr($pages[$i],0,-4);
         if ($pages[$i]!=$page)
         {
         echo '<option value='.$pages[$i].'>'.$file2.'</option>';
         }
        else
        {
         echo '<option value='.$pages[$i].' selected="selected">'.$file2.'</option>';
         $count2=$count;
        }
        }
         $count3=count($pages);
         $next=$count2;
         $back=$count2-2;
      ?>
  </select>
<?php echo'of '.$count3.'';?>
</p>
</form>

<script type="text/javascript">check2('<?php echo"$title";?>','<?php echo"$chapter";?>','<?php echo"$page";?>','<?php echo"$pages[0]";?>')</script>
<?php
}
else
{
?>
<form name="manga" method="get" action="?">
   <p class="names">Comics:
   <select onchange="checktitle(this.options[this.selectedIndex].value)" name="title" class="selectbox">
      <option value="title">Select title</option>
      <?php
        for($i=0;$i<count($titles);$i++)
      {
        $file2=str_replace("_", " ", "$titles[$i]");
        if ($titles[$i]!=$title)
         {
         echo '<option value='.$titles[$i].'>'.$file2.'</option>';
         }
         else
         {
         echo '<option value='.$titles[$i].' selected="true">'.$file2.'</option>';
         }
        }
      ?>
</select>
</p>
</form>
<?php
}
?>

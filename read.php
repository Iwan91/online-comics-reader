<?php
     $title = @$_GET['title'];
     $chapter=@$_GET['chapter'];
     $page=@$_GET['page'];

      $path="comics/";
      $dir = @opendir($path);
      while($file = readdir($dir))
       {
        if($file != '.' && $file != '..')
        {
         $titles[]=$file;
        }
       }
      closedir($dir);
      if (count($titles)>1) sort($titles);
        
        

      if($title!="" && $title!="title")
      {
      $path="comics/$title/";
      $dir = @opendir($path);
      while($file = readdir($dir))
      {
       if($file != '.' && $file != '..')
       {
        $chapters[]=$file;
        }
       }
      closedir($dir);
      if (count($chapters)>1) sort($chapters);
      }



      if($title!="" && $title!="title")
      {
      $path="comics/$title/$chapter/";
      $dir = @opendir($path);
       while($file = readdir($dir))
       {
        if($file != '.' && $file != '..')
        {
        $pages[]=$file;
        }
       }
       closedir($dir);
       if (count($pages)>1) sort($pages);
       $count=0;
      }


?>

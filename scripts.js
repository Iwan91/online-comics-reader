function checktitle(title)
{
 window.location = "?title="+title+"&chapter=chapter&page=page";
}

function checkchapter(title,chapter)
{
 window.location = "?title="+title+"&chapter="+chapter+"&page=page";
}

function checkpage(title,chapter,page)
{
 window.location = "?title="+title+"&chapter="+chapter+"&page="+page;
}

function check1 (title,chapter,first)
{
 if(chapter=="chapter" && title!="")
 {
  window.location = "?title="+title+"&chapter="+first+"&page=page";
 }
}
function check2 (title,chapter,page,first)
{
 if(page=="page" && title!="")
 {
  window.location = "?title="+title+"&chapter="+chapter+"&page="+first;
 }
}


<!DOCTYPE html>
<html>
<head>
<title>
From 20:03 May 20 2017.
</title>
</head>

<body>
<?php
echo ("<script type=\"text/javascript\">");
echo ("function fresh_page()");    
echo ("{");
echo ("window.location.reload();");
echo ("}"); 
echo ("setTimeout('fresh_page()',800);");
echo ("</script>");

$h=strtotime("20:03 May 20 2017");
$e1=-ceil(($h-time()));
$e2=-ceil(($h-time())/60);
$e3=-ceil(($h-time())/60/60);
$e4=-ceil(($h-time())/60/60/24);
?>
<div style="background-color:gray; color:white; padding:16%;">
<h1>
<p align = "center">
About...
<hr width="33%" align="center" />
</h1>
<p align = "center"><?PHP echo $e4 ."<br />"."<br />";?>
<p/>
<p align = "center"><?PHP echo $e3 ."<br />"."<br />";?>
<p/>
<p align = "center"><?PHP echo $e2 ."<br />"."<br />";?>
<p/>
<p align = "center"><?PHP echo $e1 ."<br />"."<br />";?>
<p/>
<hr width="33%" align="center" />
<p align = "center"&">
© 2017-<?php echo date("Y")?>
</div>
</body>
</html>

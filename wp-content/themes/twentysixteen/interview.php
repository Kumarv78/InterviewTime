
<?php
$name=$_GET['name'];
$email=$_GET['email'];
$c=mysql_connect("127.0.0.1" ,  "root" , "vk");
if($c)
{
print "mysql connected"  .  "<br />\n";
}
else
{
print "mysql not connected : " . mysql_error()  .  "<br />\n";
}

if ( mysql_select_db("wordpress") )
{
print "DB used"  .  "<br />\n";
}
else
{
print "DB not Used : " . mysql_error()  .  "<br />\n";
}

$dinsert="INSERT INTO interview_candidates(Name,Email) values('$name','$email');";
if ( mysql_query($dinsert) )
{
print "Data Inserted"  .  "<br />\n";
header("Location:http://localhost/wordpress/index.php/success-page/"); 
}
else
{
print "Data not inserted : " . mysql_error()  .  "<br />\n";
}


?>

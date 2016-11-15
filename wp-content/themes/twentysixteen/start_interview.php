<?php
 $id=$_GET['$id'];
 $id=$id+1;
 $c=mysql_connect("127.0.0.1" ,  "root" , "vk");
 if($c){
 $db=mysql_select_db("wordpress");	 
 $q = "SELECT *from interview_candidates WHERE id='$id';";
 
 $cq=mysql_query($q);
 $values = mysql_fetch_array($cq);
 while($values['Invited']=="Interviewd")
  {
	  $id=$id+1;
	  $cq=mysql_query("SELECT *from interview_candidates WHERE id='$id';");
      $values = mysql_fetch_array($cq);
  }
 $mailid=$values['Email'];
 $name=$values['Name'];
 $id=$values['ID'];
 print_r($mailid.$name.$id);
  
 $to = "$mailid";
$subject = "Interview Time";

$message = "
<html>
<head>
<title>Interview Time</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>$name</th>
</tr>
</table>
       <p>You are having the Colored Cow interview after 10 mins so please report to interview room within 10 mins.</p>
	    <p>Best of Luck!!!</p>		
<p>Team Interview Time</p>
<p>Developed by Vijay</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <TeamInterview@gmail.com>' . "\r\n";
$headers .= 'Cc: ColoredCow@gmail.com' . "\r\n";

$m=mail($to,$subject,$message,$headers);
 if($m!=True){
	 print("opps! it seems the mail API is not working !! ");
	 print("the message sent was");
	 print($message);
 
    $update="update interview_candidates set Invited='Interviewd' where id=$id;";
    mysql_query($update);
    header("Location:http://localhost/wordpress/index.php/next-interview");
    
 }
 }
 else
{
	echo "<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
}

?>
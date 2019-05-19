<?php

include("dbconnect.php");
$Name = $_REQUEST['Name'];
$Area = $_REQUEST['Area'];
$Email = $_REQUEST['Email'];
$Contact = $_REQUEST['Contact'];
$State = $_REQUEST['State'];
$City = $_REQUEST['City'];
/*
 * Inserting data to table
 * */

$query = mysqli_query($db_connect,"INSERT INTO fform (Name,Area,Email,Contact,State,City) VALUES ('$Name','$Area','$Email','$Contact','$State','$City')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:franchise.html");
?>
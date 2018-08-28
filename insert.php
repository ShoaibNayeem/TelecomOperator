<?php
require_once('connection.php');
if(isset($_POST['submit'])){
$plan_name = $_POST['plan_name'];
$monthly_rental = $_POST['monthly_rental'];
$free_internet = $_POST['free_internet'];
$free_calls = $_POST['free_calls'];
$call_charges = $_POST['call_charges'];
$sms_charges = $_POST['sms_charges'];
$data_charges = $_POST['data_charges'];
$roaming_charges = $_POST['roaming_charges'];


$query = mysql_query("insert into user(plan_name,monthly_rental,free_internet,free_calls,call_charges,sms_charges,data_charges,roaming_charges) values($plan_name,$monthly_rental,$free_internet,$free_calls,$call_charges,$sms_charges,$data_charges,$roaming_charges )");
if($query)
{
echo "<p>Inserted Succesfully</p>";
}
else
{
		echo "<p>Cannot insert the data</p>";
}



mysql_close($connection); 
?>
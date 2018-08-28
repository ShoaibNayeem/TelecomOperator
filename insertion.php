<?php
require_once('connection.php');
<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="css/insert.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<div class="form_div">
<div class="title">
<h2>Insert Data In Database Using PHP.</h2>
</div>
<form action="insert.php" method="post">

<h2>Form</h2>
<label>Name:</label>
<input class="input" name="plan_name" type="text" value="">
<label>plan_name:</label>
<input class="input" name="monthly_rental" type="text" value="">
<label>monthly_rental:</label>
<input class="input" name="free_internet" type="text" value="">
<label>free_internet:</label>
<input class="input" name="free_calls" type="text" value="">
<label>free_calls:</label>
<input class="input" name="call_charges" type="text" value="">
<label>call_charges:</label>
<input class="input" name="sms_charges" type="text" value="">
<label>sms_charges:</label>
<input class="input" name="data_charges" type="text" value="">
<label>data_charges:</label>
<input class="input" name="roaming_charges" type="text" value="">
<label>roaming_charges:</label>

<input class="submit" name="submit" type="submit" value="Insert">
</form>
</div>
</div>
</body>
</html>
?>
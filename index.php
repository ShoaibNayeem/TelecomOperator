<?php

require_once('connection.php');

$result = mysqli_query($con,"SELECT * FROM user");

echo "<table border='1'>
<tr>
<th>plan_name</th>
<th>monthly_rental</th>
<th>free_internet</th>
<th>free_calls</th>
<th>call_charges</th>
<th>sms_charges</th>
<th>data_charges</th>
<th>roaming_charges</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['plan_name'] . "</td>";
echo "<td>" . $row['monthly_rental'] . "</td>";
echo "<td>" . $row['free_internet'] . "</td>";
echo "<td>" . $row['free_calls'] . "</td>";
echo "<td>" . $row['call_charges'] . "</td>";
echo "<td>" . $row['sms_charges'] . "</td>";
echo "<td>" . $row['data_charges'] . "</td>";
echo "<td>" . $row['roaming_charges'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

<?php
$con=mysqli_connect("localhost","root”,”root_password”, "site");
if(mysqli_connect_errno()) {
	echo "no.";
}
$sanitized_query="SELECT * FROM lawyers";
$result = mysqli_query($con,$sanitized_query);
$toreturn = "[";
while ($row = mysqli_fetch_array($result)) {
	if ($toreturn != "[") {$toreturn .= ",";}
	$toreturn .= '{"fname":"' . $row["fname"] . '",';
	$toreturn .= '"lname":"' . $row["lname"] . '",';
	$toreturn .= '"image":"' . $row["image"] . '",';
	$toreturn .= '"bio":"' . $row["bio"] . '"}';
}
$toreturn .= ']';
echo $toreturn . " ";
mysqli_close($con);
?>

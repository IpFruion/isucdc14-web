<?php
$con=mysqli_connect("localhost","root”,”root_password”, "site");

if(mysqli_connect_errno()) {
	echo "no.";
}
$sanitized_query = "SELECT * FROM candc";
$result = mysqli_query($con,$sanitized_query);
$toreturn = "[";
while ($row = mysqli_fetch_array($result)) {
	if ($toreturn != "[") {$toreturn .= ",";}
	$toreturn .= '{"client":"' . $row["client"] . '",';
	$toreturn .= '"description":"' . $row["description"] . '",';
	$toreturn .= '"pic":"' . $row["pic"] . '",';
	$toreturn .= '"outcome":"' . $row["outcome"] . '"}';
}
$toreturn .= ']';
echo $toreturn . " ";
mysqli_close($con);
?>

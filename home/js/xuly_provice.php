<?php
	require_once("../../lib/connect.php");
	$provinceid = $_POST["provinceid"];
	$result=mysqli_query($conn,"select districtid,name,type from district where provinceid='$provinceid'");
	while ($data=mysqli_fetch_array($result)) {
		echo "<option>$data[type] $data[name]</option>";
	}
	mysqli_close($conn);
?>
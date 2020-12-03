<?php
  $query = "SELECT DISTINCT province FROM university";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query failed.");
  }
  while ($row = mysqli_fetch_assoc($result)) {
	echo "<option value=" . '"' ;
	echo $row["province"];
	echo '" >';
	echo $row["province"];
	echo "</option>";
   }
   mysqli_free_result($result);
?>
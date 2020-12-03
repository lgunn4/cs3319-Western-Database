<?php
  $query = "SELECT * FROM university ORDER BY province";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query failed.");
  }
  while ($row = mysqli_fetch_assoc($result)) {
	echo "<option value=" . '"' ;
	echo $row["unique_id"];
	echo '" >';
	echo $row["official_name"];
	echo "</option>";
   }
   mysqli_free_result($result);
?>
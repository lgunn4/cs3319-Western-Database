<?php
    $query = "SELECT official_name, nickname from university LEFT OUTER  JOIN other_university_course ON unique_id=university_unique_id WHERE code IS NULL";

    $result = mysqli_query($connection, $query); 
    if (!$result) {
        die("databases query failed. ");
    }

    if ($result->num_rows == 0) {
        echo "All universities in the system have courses associated with them!";
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>";
            echo $row["official_name"];
            echo "</td>";
            echo "<td>";
            echo $row["nickname"];
            echo "</td>";
            echo "</tr>";
        }
    }

?>
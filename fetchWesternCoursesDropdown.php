<?php
    $query = 'SELECT course_num, course_name FROM western_cs_course';
    $result = mysqli_query($connection,$query);

    if (!$result) {
        die("databases query failed.");
    }
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value=" . '"' ;
        echo $row["course_num"];
        echo '" >';
        echo $row["course_num"] . " - " . $row["course_name"];
        echo "</option>";
    }
    mysqli_free_result($result);

?>
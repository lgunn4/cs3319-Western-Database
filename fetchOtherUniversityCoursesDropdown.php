<?php
    $query = 'SELECT nickname, official_name, university_unique_id, code, name FROM other_university_course JOIN university ON university_unique_id=unique_id';
    $result = mysqli_query($connection,$query);

    if (!$result) {
        die("databases query failed.");
    }
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value=" . '"' ;
        echo $row["university_unique_id"] . "-" . $row["code"];
        echo '" >';
        echo $row["nickname"] . " - " . $row["code"] . ": " . $row["name"];
        echo "</option>";
    }
    mysqli_free_result($result);

?>
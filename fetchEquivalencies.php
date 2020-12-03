<?php
    $dateChosen = $_POST["pickadate"];

    $query = 'SELECT course_name, course_num, wcc.weight AS "wcc_weight", name, official_name, ouc.weight AS "ouc_weight", other_university_course_code, date_decided FROM course_equivalent JOIN western_cs_course wcc ON course_num=western_course_num JOIN university ON other_university_unique_id=unique_id JOIN other_university_course ouc ON university_unique_id=unique_id AND code=other_university_course_code WHERE date_decided<="' . $dateChosen . '"';

    $result = mysqli_query($connection, $query); 
    if (!$result) {
        die("databases query failed. ");
    }


    echo '<h5>Equivalencies:</h5>';
    
    if ($result->num_rows == 0) {
        echo "<p>No equivalencies were decided before or on this date</p>";
    } else {
        echo '<table class="table">
                <thead>
                    <tr>
                        <th scope="col">Western Course Code</th>
                        <th scope="col">Western Course Name</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Other University Name</th>
                        <th scope="col">Other Course Name</th>
                        <th scope="col">Other Course Number</th>
                        <th scope="col">Other Weight</th>
                        <th scope="col">Date Decided</th>
                    </tr>
                <thead>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>"; 
            echo '<td><a href="westernCourse.php?courseNum=';
            echo $row["course_num"];
            echo '" >';
            echo $row["course_num"];
            echo"</td>";
            echo "</a>";
            echo '<td>';
            echo $row['course_name'];
            echo '</td>';
            echo '<td>';
            echo $row['wcc_weight'];
            echo '</td>';
            echo '<td>';
            echo $row['official_name'];
            echo '</td>';
            echo '<td>';
            echo $row["name"];
            echo"</td>";
            echo "<td>";
            echo $row["other_university_course_code"];
            echo"</td>";
            echo "<td>";
            echo $row["ouc_weight"];
            echo"</td>";
            echo "<td>";
            echo $row["date_decided"];
            echo"</td>";
            echo "<tr>"; 
        }     

        echo "</table>";
    }

    mysqli_free_result($result);


?>
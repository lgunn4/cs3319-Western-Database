  <?php
    $courseNum = $_GET['courseNum'];
    $query = 'select * from western_cs_course WHERE course_num="' . $courseNum . '"';

    $result = mysqli_query($connection, $query); 
    if (!$result) {
        die("databases query failed. ");
    }
     
	$row = mysqli_fetch_assoc($result);
    $courseNum = $row["course_num"];

    echo'<div class="row">
            <div class="col">
                <h5>Course Information</h5>
            </div>
            <div class="col-4">
                <a href="editWesternCourse.php?courseNum=' . $courseNum  . '"> <button type="button" class="btn btn-secondary">Edit</button></a>
                <a href="deleteWesternCourse.php?courseNum=' . $courseNum  . '"> <button type="button" class="btn btn-danger">Delete</button></a>
                <a href="addEquivalency.php"> <button type="button" class="btn btn-success">Add Equivalency</button></a>
            </div>
        </div>';
    echo '<p class="font-weight-bold">Course Name: </p>
          <p class="font-weight-light">' . $row["course_name"] . '</p>';
    echo '<p class="font-weight-bold">Course Number: </p>
          <p class="font-weight-light">' . $row["course_num"] . '</p>' ;
    echo '<p class="font-weight-bold">Course Weight: </p>
          <p class="font-weight-light">' . $row["weight"] . '</p>';

    $query = 'SELECT name, official_name, ouc.weight, other_university_course_code, date_decided FROM course_equivalent JOIN western_cs_course ON course_num=western_course_num JOIN university ON other_university_unique_id=unique_id JOIN other_university_course ouc ON university_unique_id=unique_id AND code=other_university_course_code AND course_num="' . $courseNum . '"';

    $result = mysqli_query($connection, $query); 
    if (!$result) {
        die("databases query failed. ");
    }

    echo "<h5>Course Equivalencies:</h5>";
    
    if ($result->num_rows == 0) {
        echo "<p>This course does not have any equivalencies</p>";
    } else {
        echo '<table class="table">
                <thead>
                    <tr>
                        <th>University Name</th>
                        <th>Course Name</th>
                        <th>Course Number</th>
                        <th>Weight</th>
                        <th>Date Decided</th>
                    </tr>
                </thead>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>"; 
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
            echo $row["weight"];
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
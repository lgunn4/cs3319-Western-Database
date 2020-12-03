<?php
    $courseNum = $_GET['courseNum'];
    $query = 'SELECT * FROM course_equivalent JOIN western_cs_course ON course_num=western_course_num  WHERE course_num="' . $courseNum . '"';


    echo '<h5>Delete Course: '. $courseNum . '?</h5>';

    $result = mysqli_query($connection, $query); 
    if (!$result) {
        die("databases query failed. ");
    }

    $row = mysqli_fetch_assoc($result);
    
    if ($result->num_rows != 0) {
        echo '<p class="font-weight-light">This course has outside courses associated with it. Are you sure you want to delete this course? </p>';
    } else {
        echo '<p class="font-weight-light">are you sure you want to delete this course?</p>';
    }
    echo '<div class="row">
            <div class="col-1">
                <button class="btn btn-danger" name="submitSelection" id="submitSelection">Delete</button>
            </div>
            <div class="col-1">
                <p class="font-weight-bold"><a href="westernCourse.php?courseNum=' . $courseNum . '">Go Back</a></p>
            </div>
        </div>';
?>
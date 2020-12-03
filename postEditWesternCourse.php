<?php 
    $name = $_POST["name"];
    $weight = $_POST["weight"];
    $suffix = $_POST["suffix"];
    $courseNum = $_GET['courseNum'];

    $query = 'UPDATE western_cs_course SET course_name="' . $name . '", weight="' . $weight . '", suffix="' . $suffix . '" WHERE course_num="' . $courseNum . '"';

    $result = mysqli_query($connection, $query); 
    if (!$result) {
        die("databases query failed. ");
    } else {
        echo "Successfully Updated the Course!";
        header('Location: westernCourse.php?courseNum=' . $courseNum ); 
        exit;
    }
?>
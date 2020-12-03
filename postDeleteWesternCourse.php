<?php 
    $courseNum = $_GET['courseNum'];

    $query = 'DELETE FROM western_cs_course WHERE course_num="' . $courseNum . '"';

    $result = mysqli_query($connection, $query); 
    if (!$result) {
        die("databases query failed. ");
    } else {
        echo "Successfully Deleted the Course!";
        header('Location: westernCourses.php?'); 
        exit;
    }
?>
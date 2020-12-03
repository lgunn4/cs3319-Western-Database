<?php 
    $westernCourseCode = $_POST["pickawesterncourse"] ;
    list($anotherUniversity, $anotherCourseCode) = explode("-", $_POST["pickanothercourse"]);

    $query = 'SELECT * FROM course_equivalent WHERE western_course_num="' . $westernCourseCode . '" AND other_university_course_code="' . $anotherCourseCode . '" AND other_university_unique_id="' . $anotherUniversity . '"';
    $result = mysqli_query($connection, $query); 

    if ($result->num_rows > 0) {
        $query = 'UPDATE course_equivalent SET date_decided=NOW() WHERE western_course_num="' . $westernCourseCode . '" AND other_university_course_code="' . $anotherCourseCode . '" AND other_university_unique_id="' . $anotherUniversity . '"';    
    } else {
        $query = 'INSERT INTO course_equivalent VALUES ("' . $westernCourseCode . '", "' . $anotherCourseCode . '", "' . $anotherUniversity . '", NOW())';       

    }
    
    $result = mysqli_query($connection, $query); 
        if (!$result) {
            die("Adding Equivalency Failed");
        } else {
            echo "Successfully Updated the Equivalency!";
            header('Location: equivalency.php?'); 
        }

?>
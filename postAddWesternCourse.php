<?php 
    $name = $_POST["name"] ;
    $weight = $_POST["weight"];
    $suffix = $_POST["suffix"];
    $courseNum = $_POST['course_num'];

    $query = 'SELECT * FROM western_cs_course WHERE course_num="cs' . $courseNum . '"';
    $result = mysqli_query($connection, $query); 

    if($result->num_rows > 0) {
        echo '<script>alert("This course number already exists. Please enter a new valid number")</script>';

    } else {
        $query = 'INSERT into western_cs_course(course_num, course_name, weight, suffix) VALUES ("cs' . $courseNum . '","' . $name . '",' . $weight . ',"' . $suffix . '")';

        $result = mysqli_query($connection, $query); 
        if (!$result) {
            die("Adding the new Course Failed");
        } else {
            echo "Successfully Added the Course!";
            header('Location: westernCourse.php?courseNum=cs' . $courseNum ); 
            exit;
        }
    }
?>
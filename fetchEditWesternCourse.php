<?php
    $courseNum = $_GET['courseNum'];
    $query = 'select * from western_cs_course WHERE course_num="' . $courseNum . '"';

    $result = mysqli_query($connection, $query); 
    if (!$result) {
        die("databases query failed. ");
    }

    $row = mysqli_fetch_assoc($result);
    echo '<div class="row">
            <div class="col">
                <h5>Edit Course - ' . $row['course_name'] . '</h5>
            </div>
          </div>';


    echo '<div class="row">
            <div class="col-4">
                <div class="form-group>
                    <label for="name">Course Number: </label>
                    <input type="text" class="form-control" readonly id="course_num" name="course_num" value="' . $row["course_num"] . '"></input>
                </div>
                <div class="form-group">
                    <label for="name">Course Name: </label>
                    <input type="text" class="form-control" id="name" name="name" value="' . $row["course_name"] . '"></input>
                </div>
                <div class="form-group">
                    <label for="weight">Weight: </label>
                    <input class="form-control" id="weight" name="weight" type="number" step="0.1" value="' . $row["weight"] . '"></input>
                </div>
                <div class="form-group">
                    <label for="suffix">Suffix: </label>
                    <input class="form-control" type="text" id="suffix" name="suffix" value="' . $row["suffix"] . '"></input>
                </div>
                
            </div>
        </div>';
?>
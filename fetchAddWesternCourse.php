<?php
    $courseNum = $_GET['courseNum'];
    $query = 'select * from western_cs_course WHERE course_num="' . $courseNum . '"';

    $result = mysqli_query($connection, $query); 
    if (!$result) {
        die("databases query failed. ");
    }

    $row = mysqli_fetch_assoc($result);
    
    echo '<h5>Add a Course' . $row['course_name'] . '</h5>';


    echo '<div class="row">
            <div class="col-4">
                <div class="form-group>
                    <label for="name">Course Number: </label>
                    <div class="row">
                        <div class="col-1"
                            <h5 class="font-weight-normal">cs</h5>
                        </div>
                        <div class="col">
                            <input class="form-control" type="text" id="course_num" name="course_num" value="' . $row["course_num"] . '"></input>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Course Name: </label>
                    <input class="form-control" type="text" id="name" name="name" value="' . $row["course_name"] . '"></input>
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
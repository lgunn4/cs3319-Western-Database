<?php
    $orderBy = $_POST["orderBy"];
    $order = $_POST["order"];
    $query = "select * from western_cs_course ORDER BY $orderBy $order";

    $result = mysqli_query($connection, $query); 
   if (!$result) {
     die("databases query failed. ");
    }
     //put the artwork in an unordered bulleted list

    echo '<table class="table">
            <thead>
                <tr>
                    <th scope="col">Course Number</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Suffix</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>';
	while ($row = mysqli_fetch_assoc($result)) {
        $courseNum = $row["course_num"];

        echo "<tr>"; 
        echo '<td><a href="westernCourse.php?courseNum=';
        echo $courseNum;
        echo '" >';
        echo $row["course_num"];
        echo"</td>";
        echo "</a><td>";
        echo $row["course_name"];
        echo"</td>";
        echo "<td>";
        echo $row["weight"];
        echo"</td>";
        echo "<td>";
        echo $row["suffix"];
        echo"</td>";
        echo '<td>';
            echo '<a href="editWesternCourse.php?courseNum=' . $row["course_num"] . '">
                    <button type="button" class="btn btn-secondary">Edit</button>
                  </a>';
            echo '<a href="deleteWesternCourse.php?courseNum=' . $row["course_num"] . '">
                    <button type="button" class="btn btn-danger">Delete</button>
                  </a>';
        echo'</td>';
        echo "<tr>"; 
	}     

    echo "</table>";

    mysqli_free_result($result);



?>
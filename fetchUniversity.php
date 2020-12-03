<?php    
    $universityID = $_POST["pickauniversity"];
    $query = 'SELECT * FROM university WHERE unique_id="' . $universityID . '"';
    
    $result = mysqli_query($connection, $query); 
    if (!$result) {
        die("databases query on university failed. ");
    }
     
	$row = mysqli_fetch_assoc($result);

    echo '<p class="font-weight-bold">Name: </p>
        <p class="font-weight-light">' . $row["official_name"] . '</p>

        <p class="font-weight-bold">ID: </p>
        <p class="font-weight-light">' . $row["unique_id"] .  '</p>

        <p class="font-weight-bold">City: </p>
        <p class="font-weight-light">' . $row["city"] .  '</p>

        <p class="font-weight-bold">Province: </p>
        <p class="font-weight-light">' . $row["province"] . '</p>

        <p class="font-weight-bold">NickName: </p>
        <p class="font-weight-light">' . $row["nickname"] . '</p>
        
        <p class="font-weight-bold">Mascot: </p> 
        
        ';



    if ($row["uniimage"] == NULL) {
        echo '
            <div class="row">
                <div class="col-4">
                    <form action="" method="POST" >
                        <div class="form-group">
                            <label for="uniimage">Add an Image URL: </label>
                            <input class="form-control" type="text" name="uniimage" id="uniimage">
                            <input type="hidden" id="universityID" name="universityID" value="' . $universityID .  '" >
                        </div>
                        <button class="btn btn-primary" name="submitSelection" id="submitSelection">Submit</button>
                    </form>
                </div>
            </div>
        ';
    } else {
        echo '<img src="'. $row["uniimage"] .'" class="img-thumbnail" >';
    }

    echo '<hr/>';


    $query = 'SELECT * FROM university JOIN other_university_course ON unique_id=university_unique_id WHERE unique_id="' . $universityID . '"';
    $result = mysqli_query($connection, $query); 
    if (!$result) {
        die("databases query on university failed. ");
    }
    echo "<h5>Courses: </h5>";
    if($result->num_rows > 0) {
        echo '<table class="table">
                <thead>
                    <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Year Offered</th>
                        <th scope="col">Weight</th>
                    </tr>
                </thead>';
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>"; 
            echo '<td>';
            echo $row["code"];
            echo '</td>';
            echo '<td>';
            echo $row["name"];
            echo"</td>";
            echo "<td>";
            echo $row["year_offered"];
            echo"</td>";
            echo "<td>";
            echo $row["weight"];
            echo"</td>";
            echo "<tr>"; 
        
        }
    } else {
        echo "<p>This university does not have any courses</p>";
    }
    

    
?>
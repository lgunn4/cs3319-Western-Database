<?php
    $provinceCode =  $_POST['pickaprovince'];
    
    $query = 'SELECT official_name, nickname FROM university WHERE province="' . $provinceCode . '"';


    echo '<p class="font-weight-bold">Province: </p>
          <p class="font-weight-light">' . $provinceCode . '</p>
          
          <h5>Universities</h5>';
    
    $result = mysqli_query($connection, $query); 
    if (!$result) {
        die("databases query on university failed. ");
    }
    if($result->num_rows > 0) {
        echo '<table class="table">
                <thead>
                    <tr>
                        <th>Nickname</th>
                        <th>Official Name</th>
                    </tr>
                </thead>';
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>"; 
            echo '<td>';
            echo $row["nickname"];
            echo '</td>';
            echo '<td>';
            echo $row["official_name"];
            echo"</td>";
            echo "<td>";
            echo "</tr>";
        }
    } else {
        echo "<p>This province does not contain any universities</p>";
    }
?>
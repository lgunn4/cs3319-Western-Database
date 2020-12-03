<?php 
    $uniimage = $_POST["uniimage"] ;
    $universityID = $_POST["universityID"];
    
    $query = 'UPDATE university SET uniimage="' . $uniimage . '" WHERE unique_id="' . $universityID . '"';

    $result = mysqli_query($connection, $query); 
    if (!$result) {
        echo $query;
        die("databases query failed. ");
    } else {
        echo "Successfully Updated the University!";
        header('Location: universityInfo.php'); 
        exit;
    }
?>
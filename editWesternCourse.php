<!DOCTYPE html>
<html>
<head>
    <?php
        include "head.php";
    ?>
</head>

<body>


<?php 
    include 'header.php';
?>
<div class="container">

<form action="" method="post">
    <?php
        include "connecttodb.php";
        include "fetchEditWesternCourse.php";
        include "disconnectdb.php";
    ?>

    
    <button class="btn btn-primary" name="submitSelection" id="submitSelection">Submit</button>

</form>

<br/>
<hr/>
<br/>
<?php
    if (isset($_POST['submitSelection'])) {
      include 'connecttodb.php';
      include 'postEditWesternCourse.php';
      include "disconnectdb.php";
    }
?>


</div>
</body>
</html>
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
        include "fetchDeleteWesternCourse.php";
        include "disconnectdb.php";
    ?>
</form>
<?php
    if (isset($_POST['submitSelection'])) {
      include 'connecttodb.php';
      include 'postDeleteWesternCourse.php';
      include "disconnectdb.php";
    }
?>


</div>
</body>
</html>
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

<?php
   include "connecttodb.php";
   include "fetchWesternCourse.php";
   include "disconnectdb.php";
?>

</div>
</body>
</html>
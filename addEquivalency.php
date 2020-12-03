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
<h5>Add Equivalency</h5>
<div class="row">
    <div class="col-4">
        <form action="" method="post">
            <div class="form-group">
                <label for="pickawesterncourse">Pick a Western Course: </label>
                <select class="form-control" name="pickawesterncourse" id="pickawesterncourse">
                    <option value="-1">Select Here</option>
                    <?php 
                        include "connecttodb.php";
                        include "fetchWesternCoursesDropdown.php";
                        include "disconnectdb.php";
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="pickanothercourse">Pick a Course from a different University: </label>
                <select class="form-control" name="pickanothercourse" id="pickanothercourse">
                    <option value="-1">Select Here</option>
                    <?php 
                        include "connecttodb.php";
                        include "fetchOtherUniversityCoursesDropdown.php";
                        include "disconnectdb.php";
                    ?>
                </select>
            </div>
           
            <button class="btn btn-primary" name="submitSelection" id="submitSelection">Submit</button>
        </form>
    </div>
</div>

<hr/>
<?php
    if (isset($_POST['submitSelection'])) {
        include "connecttodb.php";
        include "postAddEquivalency.php";
        include "disconnectdb.php";
    } //end of if
?>
</div>
</body>
</html>
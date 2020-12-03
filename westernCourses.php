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
<div class="row">
    <div class="col">
        <h5>Western Cs Courses</h5>
    </div>
    <div class="col-2">
        <a href="addWesternCourse.php"><button class="btn btn-success">+ Add a Course</button></a>
    </div>
</div>

</br>
<p class="font-weight-bold">How would you like to view the data?</p>
</br>
<form action="" method="post">
    <div class="row">
        <div class="col">
            <p class="font-weight-bold">Order By:</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="orderBy" id="courseNum" value="course_num" checked>
                <label class="form-check-label" for="course_num">Course Number</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="orderBy" id="courseName" value="course_name">
                <label class="form-check-label" for="course_name">Course Name</label>
            </div>
        </div>
        <div class="col">
            <p class="font-weight-bold">Order:</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="order" id="ascending" value="ASC" checked>
                <label class="form-check-label" for="course_num">Ascending</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="order" id="descending" value="DESC">
                <label class="form-check-label" for="course_num">Descending</label>
            </div>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col">
            <button name="submitSelection" id="submitSelection" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>   
</form>

<br/>
<hr/>
<br/>
<?php
    if (isset($_POST['submitSelection'])) {
      include "connecttodb.php";
      include "fetchWesternCourses.php";
      include "disconnectdb.php";
    }
?>

</div>
</body>
</html>
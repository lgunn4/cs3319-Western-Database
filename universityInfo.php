<!DOCTYPE html>
<html>
<head>
    <?php
        include "head.php";
    ?>
</head>

<body>
<script src="postFormUniversity.js"></script>

<?php
	include 'header.php';
?>
<div class="container">
<script src="postFormUniversity.js"></script>

<h5>Outside Universities</h5>
<div class="row">
    <div class="col-4">
        <form action="" method="post">
        <div class="form-group">
            <label for="pickauniversity">Pick a University: </label>
            <select class="custom-select" name="pickauniversity" id="pickauniversity">
                <option value="-1">Select Here</option>
                <?php
                    include "connecttodb.php";
                    include "fetchUniversities.php";
                    include "disconnectdb.php";
                ?>
            </select>
        </div>
</form>
    </div>
</div>
<hr/>
<?php
    if (isset($_POST['pickauniversity'])) {
        include "connecttodb.php";
        include "fetchUniversity.php";
        include "disconnectdb.php";
    } //end of if
?>

<?php
    if (isset($_POST['submitSelection'])) {
        echo $universityID;
        include "connecttodb.php";
        include "postAddUniversityImage.php";
        include "disconnectdb.php";
    }
?>



</div>
</body>
</html>
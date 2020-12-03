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
        <h5>Equivalencies:</h5>
    </div>
    <div class="col-2">
        <a href="addEquivalency.php">
            <button class="btn btn-success">
                Add Equivalency
            </button>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <form action="" method="post">
            <div class="form-group">
                <label for="pickadate">Choose a Date:</label>
                <input class="form-control" type="date" id="pickadate" name="pickadate">
            </div>
            <button class="btn btn-primary" name="submitSelection" id="submitSelection">Submit</button>
        </form>
    </div>
</div>
<hr/>
<?php
    if (isset($_POST['submitSelection'])) {
        include "connecttodb.php";
        include "fetchEquivalencies.php";
        include "disconnectdb.php";
    } //end of if
?>
</div>
</body>
</html>
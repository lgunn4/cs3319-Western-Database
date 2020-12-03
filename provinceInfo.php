<!DOCTYPE html>
<html>
<head>
    <?php
        include "head.php";
    ?>
</head>

<body>
<script src="postFormProvince.js"></script>

<?php
	include 'header.php';
?>
<div class="container">

<h5>Province Information</h5>
<div class="row">
    <div class="col-4">
        <form action="" method="post">
            <div class="form-group">
                <label for="pickaprovince">Select a Province: </label>
                <select class="form-control" name="pickaprovince" id="pickaprovince">
                    <option value="-1">Select Here</option>
                    <?php
                        include "connecttodb.php";
                        include "fetchProvinces.php";
                        include "disconnectdb.php";
                    ?>
                </select>
            </div>
        </form>
    </div>
</div>
<hr/>
<?php
    if (isset($_POST['pickaprovince'])) {
        include "connecttodb.php";
        include "fetchProvince.php";
        include "disconnectdb.php";
    } //end of if
?>
</div>
</body>
</html>
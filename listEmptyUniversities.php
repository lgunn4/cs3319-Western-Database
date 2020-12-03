<!-- Page to list empty Universities in our Database -->

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
        <h3>Universities in our System without courses</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">University name</th>
                    <th scope="col">Nickname</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "connecttodb.php";
                include "fetchEmptyUniversities.php";
                include "disconnectdb.php";
            ?>
            </tbody>

        </table>
    </div>
</body>
</html>
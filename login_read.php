<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>

<div class="container vertical-center">

    <div class="offset-sm-1 col-sm-10"
         style="background-color: white;
                border: 3px solid black;
                box-shadow: 5px 5px 5px;

">
        <h1 class="text-center">Read</h1>
        <table class='col-sm-12' border='1'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <?php ReadData(); ?>
        </table><br>

    </div>
<?php include "includes/footer.php"; ?>
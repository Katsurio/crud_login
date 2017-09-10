<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php DeleteRow(); ?>

<?php include "includes/header.php"; ?>
<div class="container">
    <div class="col-sm-6 offset-sm-3"
         style="background-color: white;
         border: 3px solid black;
         box-shadow: 5px 5px 5px;">

        <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="post">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">

                <select name="id" id="">
                    <?php ShowALLData(); ?>
                </select>
            </div>

            <input class="btn btn-warning col-sm-10 offset-sm-1" type="submit" name="submit" value="DELETE">
        </form><br>
    </div>
<?php include "includes/footer.php"; ?>

<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php CreateRow(); ?>

<?php include "includes/header.php"; ?>
<div class="container">
    <div class="offset-sm-3 col-sm-6"
         style="background-color: white;
                border: 3px solid black;
                box-shadow: 5px 5px 5px;">

        <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-warning" type="submit" name="submit" value="CREATE">
        </form>
    </div>
<?php include "includes/footer.php"; ?>
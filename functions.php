<?php include "db.php"; ?>
<?php

function ShowALLData()
{
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function UpdateRow()
{
    if (isset($_POST['submit'])) {
        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query FAILED" . mysqli_error($conn));
        } else {
            echo "Record updated.";
        }
    }
}

function CreateRow()
{
    if (isset($_POST['submit'])) {
        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO users(username, password) ";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($conn, $query);
        if (!$result) {
            die('Query FAILED: ' . mysqli_error());
        } else {
            echo "Record created.";
        }
    }
}


function ReadData()
{
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error());
    }

    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <pre>
            <?php print_r($row); ?>
        </pre>
        <?php
    }
}

function DeleteRow()
{
    if (isset($_POST['submit'])) {
        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query FAILED" . mysqli_error($conn));
        } else {
            echo "Record deleted.";
        }
    }
}

?>
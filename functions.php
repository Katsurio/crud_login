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
    mysqli_close($conn);
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
        mysqli_close($conn);
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
            die('Query FAILED: ' . mysqli_error($conn));
        } else {
            echo "Record created.";
        }
        mysqli_close($conn);
    }
}

function ReadData()
{
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('Query FAILED' . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];

        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $username . "</td>";
        echo "<td>" . $password . "</td>";
        echo "</tr>";
    }
    mysqli_close($conn);
}

function DeleteRow()
{
    if (isset($_POST['submit'])) {
        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password']; // Not sure if I
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query FAILED" . mysqli_error($conn));
        } else {
            echo "Record deleted.";
        }
        mysqli_close($conn);
    }
}
?>
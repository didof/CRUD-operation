<?php

session_start();
$name = "";
$location = "";
$update = false;
$id=0;

$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));

if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if( isset($_POST['save']) ) {
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("INSERT INTO data (name, location) VALUES ('$name', '$location')") or
    die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: survivorList.php");
}

if ( isset($_GET['delete']) ) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "warning";
}

if ( isset($_GET['edit']) ) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error);
    $row = $result->fetch_array();
    $name = $row['name'];
    $location = $row['location'];
}

if ( isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("UPDATE data SET name='$name', location='$location' WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "success";

    header("location: survivorList.php");
}

// special thanks to:
// https://www.youtube.com/watch?v=3xRMUDC74Cw
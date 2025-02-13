<?php 
    if (isset($_GET['id'])) {
        include("connect.php");
        $id = $_GET['id'];
        $query = "DELETE FROM databuku WHERE id=$id";

        if (mysqli_query($conn, $query)) {
            header('Location: dashboard.php');
        } else {
            die("Something went wrong");
        }
    }
?>
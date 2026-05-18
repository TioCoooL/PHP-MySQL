<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "codelab";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_GET['userid'])) {
        
        $id_to_delete = $_GET['userid'];

        $sql = "DELETE FROM users WHERE userid = '$id_to_delete'";

        if (mysqli_query($conn, $sql)) {
            header("Location: task_08.php"); 
            exit();
        }
    } 
    mysqli_close($conn);
?>
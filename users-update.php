<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "codelab";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $userid = $_POST['userid'];
        $passcode = $_POST['passcode'];

        $sql = "UPDATE users SET passcode = '$passcode' WHERE userid = '$userid'";

        if (mysqli_query($conn, $sql)) {
            header("Location: task_08.php");
            exit();
        } 
    }

    mysqli_close($conn);
?>
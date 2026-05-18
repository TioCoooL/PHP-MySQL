<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codelab";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $userid = $_POST['userid'];
    $passcode = $_POST['passcode'];
    $retype = $_POST['retype'];

    if ($passcode === $retype) {
        
        $sql = "INSERT INTO users (userid, passcode) VALUES ('$userid', '$passcode')";

        if (mysqli_query($conn, $sql)) {
            echo "<div style='background-color: #e0ffff; padding: 15px; border-left: 6px solid #2196F3; max-width:50%'>";
            echo "1 New record created successfully. <a href='users-form.php' style='color: black; text-decoration: none;'><b>Back</b></a>";
            echo "</div>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
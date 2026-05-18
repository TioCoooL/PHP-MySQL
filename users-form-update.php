<!DOCTYPE html>
<html>
<head>
    <title>Users Data Update</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "codelab";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

    if (isset($_GET['userid'])) {
        $id = $_GET['userid'];
        $sql = "SELECT * FROM users WHERE userid = '$id'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $current_userid = $row['userid'];
            $current_passcode = $row['passcode'];
        }
    }
?>

<div class="w3-container w3-margin-top" style="max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding-bottom: 16px;">
    <h2>Users Data Update</h2>
    <p>This form is used to update user data!</p>
    
    <form action="users-update.php" method="POST">
        
        <label><b>User ID</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" name="userid" value="<?php echo $current_userid; ?>" readonly>

        <label><b>Passcode</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" name="passcode" value="<?php echo $current_passcode; ?>" required>

        <div class="w3-right">
            <button type="submit" class="w3-button w3-green">Update</button>
            <a href="task_08.php" class="w3-button w3-red">Cancel</a>
        </div>
        
    </form>
</div>

</body>
</html>
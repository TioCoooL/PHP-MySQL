<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body class="w3-light-grey">
        <?php
            // 1. Connect to the Database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "codelab";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                
                $sql = "SELECT userid, passcode, avatar FROM users WHERE userid = '$id'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    
                    $row = mysqli_fetch_assoc($result);
                    
                    $name = $row['userid'];
                    $detail = $row['userid']; 
                    $img = "https://www.w3schools.com/w3css/" . $row['avatar'];

                    echo '<div class="w3-container" style="max-width: 400px; margin: 0 auto;">';
                    
                    
                    echo '<a href="task_07.php" class="w3-button w3-margin-top"><b>&larr; Back to Characters</b></a><br><br>';
                    
                    echo '<div class="w3-card-4 w3-margin w3-white w3-center">';
                    echo '<img src="' . $img . '" alt="' . $name . '" style="width:100%;">';
                    echo '<div class="w3-container w3-padding-16">';
                    echo '<h3><b>' . $name . '</b></h3>';
                    echo '<p>' . $detail . '</p>';
                    echo '</div>';
                    echo '</div>';
                    
                    echo '</div>';
                    
                } 
            } 
            mysqli_close($conn);
        ?>
    </body>
</html>
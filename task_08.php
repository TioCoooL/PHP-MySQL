<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "codelab";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT userid, passcode, avatar FROM users";
            $result = mysqli_query($conn, $sql);
            
            echo '<p><b>Characters</b></p>';
            echo '<div class="w3-container" style="width: 70%">';
            echo '<table class="w3-table-all w3-hoverable">';
            echo '<tr class="w3-blue">';
            echo '<th>No.</th>';
            echo '<th>Avatar</th>';
            echo '<th>User ID</th>';
            echo '<th>Passcode</th>';
            echo '<th>Actions</th>';
            echo '</tr>';


            if (mysqli_num_rows($result) > 0) {
                
                $y = 1; 
                
                while($row = mysqli_fetch_assoc($result)) {
                    
                    $avatar_url = "https://www.w3schools.com/w3css/" . $row['avatar'];
                    
                    echo '<tr class="w3-hover-blue">';
                    echo "<td>$y</td>";
                    echo "<td><img src='$avatar_url' alt='Avatar' class='w3-circle' style='width:50px; height:50px;'></td>";
                    
                    echo "<td>" . $row['userid'] . "</td>";

                    echo "<td>" . $row['passcode'] . "</td>";

                    echo '<td>';
                    echo '<a href="task_08_profile.php?id=' . $row['userid'] . '" class="glyphicon glyphicon-folder-open" style="margin-right: 15px;"></a>';
                    echo '<a href="users-form-update.php?userid=' . $row['userid'] . '" class="glyphicon glyphicon-pencil" style="margin-right: 15px;"></a>';
                    echo '<a href="users-delete8.php?userid=' . $row['userid'] . '" class="glyphicon glyphicon-trash"></a>';
                    echo '</td>';
                    echo '</tr>';    
                    
                    $y++; 
                }
            } else {
                echo '<tr><td colspan="5">No records found.</td></tr>';
            }

            echo '</table>';
            echo '</div>';

            mysqli_close($conn);
        ?>
    </body>
</html>
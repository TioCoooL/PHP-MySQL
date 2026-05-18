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


            foreach ($chars as $x => $char) {
                $y = $x + 1;
                echo '<tr class="w3-hover-blue">';
                echo "<td>$y</td>";
                echo "<td><img src='$char[2]' alt='$char[0]' class='w3-circle' style='width:50px; height:50px;'></td>";
                echo "<td>$char[0]</td>";
                echo "<td>$char[1]</td>";
                echo '<td>';
                echo '<a href="profile.php?id=' . $x . '" class="glyphicon glyphicon-folder-open" style="margin-right: 15px;">';
                echo '</a>';
                echo '<a href="#" class="glyphicon glyphicon-trash">';
                echo '</a>';
                echo '</td>';
                echo '</tr>';    
            }

            echo '</table>';
            echo '</div>';
        ?>
    </body>
</html>
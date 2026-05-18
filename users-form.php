<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Users Form</title>
</head>
<body>
    <div class="w3-container w3-border w3-margin" style="max-width: 50%;">
        <h2>Users Form</h2>
        <p>This form is used to add new user !</p>
        <form class="w3-container" action="users-add.php" method="post">
            <label for="userid"><b>User ID</b></label>
            <input class="w3-input w3-border" type="text" id="userid" name="userid" required>

            <label for="passcode"><b>Passcode</b></label>
            <input class="w3-input w3-border" type="password" id="passcode" name="passcode" required>

            <label for="retype"><b>Retype Passcode</b></label>
            <input class="w3-input w3-border" type="password" id="retype" name="retype" required>

            <div class="w3-right w3-margin">
                <button class="w3-button w3-green" type="submit">Insert</button>
                <button type="reset" class="w3-button w3-red">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
    session_start();

    if (isset($_GET['logged'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        require_once "settings.php";
        $conn = @mysqli_connect($host,$user,$pwd,$sql_db);

        if ($conn) {

            $query = "select * from login_credentials where username = '$username' and password = '$password';";

            $result = mysqli_query($conn,$query);
            $count = mysqli_num_rows($result);

            if ($count == 1) {
                $_SESSION['username'] = $username;
                header("location:manager.php");
            } else {
                echo "<p>Wrong username and password</p>";
            }

        } else {
            echo "<p> Unable to connect to the database </p>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8"/>
        <title>Login</title>

        <link rel="stylesheet" href="styles/form.css" />


        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
    
    </head>
    <body>

        <form action="manager_login.php?logged=yes" method="post">
            <h1>Login</h1>

            <!-- Username -->
            <p>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required />
            </p>

            <!-- Password -->
            <p>
                <label for="password">Password</label>
                <input type="text" name="password" id="password" required />
            </p>

            <!-- Submit -->
            <p>
                <input type="submit" value="submit" id="submit" class="submit-reset" />
            </p>

            <p>No account? <a href="manager_registration.php">Register</a></p>
            

        </form>
    </body>
    </html>

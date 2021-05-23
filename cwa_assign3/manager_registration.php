<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8"/>
        <title>Registration</title>
        <link rel="stylesheet" href="styles/form.css" />

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
    
    </head>
    <body>


        <?php

            if (isset($_GET["filled"])) {


                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                require_once "settings.php";
                $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
    
                if ($conn) {
                    
                    $create_query = "create table if not exists login_credentials( id int auto_increment primary key, email varchar(100) not null, username varchar(100) not null, password varchar(200) not null, unique key unique_username (username) );";

                    $result = mysqli_query($conn,$create_query);

                    // if ($result) {
                    //     echo "<p> Table Created </p>";
                    // } else {
                    //     echo "<p> Something is wrong with the query", $create_query, "</p>";
                    // }
    
                    $insert_query = "insert into login_credentials(id, email, username, password) values(NULL,'$email','$username','$password');";

                    $result2 = mysqli_query($conn, $insert_query);

                    if ($result2) {
                        echo "<p>You have registered successfully</p>";
                    } else {
                        echo "<p> This username already exists </p>";
                    }
    
    
                } else {
    
                    echo "<p> Unable to connect to the database. </p>";
    
                }

            }


        ?>

        <form action="manager_registration.php?filled=yes" method="post">
            <h1>Registration</h1>

            <!-- Username -->
            <p>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required />
            </p>

            <!-- Email -->
            <p>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required />
            </p>

            <!-- Password -->
            <p>
                <label for="password">Password</label>
                <input type="text" name="password" id="password" required />
            </p>

            <!-- Submit -->
            <p>
                <input class="submit-reset" type="submit" value="submit" id="submit" />
            </p>

            <p>Account exists? <a href="manager_login.php">Login</a></p>

        </form>


        

    </body>
</html>
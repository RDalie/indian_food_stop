<!-- Enhancement 1 Creating a Manager Login Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta information -->
    <meta charset="utf-8" />
    <meta name="description" content="enhancements" />
    <meta name="keywords" content="enhancements"/>
    <meta name="author" content="Rabya Tayal" />

    <!-- Title -->
    <title>Enhancements</title>

    <!-- CSS -->
    <link rel="stylesheet" href="styles/style.css"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">

</head>
<body class="enhancements">

        <!-- Include Menu -->
        <?php
            include_once 'menu.inc';
        ?>
    <main>

        <h1>Enhancements3</h1>
        <ol>
            <li class="ol-li">
                Manager Security:
                <ul>
                <li>
                Manager Registration: The page <a href="manager_registration.php">manager registration</a> asks user to register with a unique username, email and password. If the username is already in use, an error shows up saying the username exists.
                </li> 
                <li>
                Manager Login: After registration the user can login using <a href="manager_login.php">manager login.</a> This checks if the login credentials exist in a database called login_credentials and redirects the user to manager.php
                </li>

                <li>
                It is not possible for the user to open manager.php directly.
                </li>

                <li>
                Logout: The logout button on manager.php destroys the data stored in $_SESSION and redirects the user to the login page.
                </li>
                </ul>
            </li>
            <li class="ol-li">
                        Manager Reports: Compound Queries, Three additional buttons have been added on manager.php which display a table using more advanced mysql queries.
                <ul>
                    <li>
                    The Most Popular Product Ordered: Groups orders by product, showing a count of each group and sorts them in descending order and selects the topmost column to show the most popular product ordered.
                    </li>
                    <li>
                    Fulfilled Orders between two dates: The user can input two dates on manager.php and get a display of orders between thoser two dates.
                    </li>
                    <li>
                    The Average Number of Orders Per Day: Uses a subquery within a query to select avg of a column from a derived table. This represents the average number of orders ordered per day. This can be viewed using manager.php after logging in.
                    </li>
                </ul>
            </li>
        </ol>
      </main>
</body>
</html>
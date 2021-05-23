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

        <h1>Enhancements2</h1>
        <ol>
          <li class="ol-li">Enhancement 1: Timer: A timer was implemented on <a href="payment.html">payment.html</a> This starts at 15 minutes and redirects the user to home page when time is up. JavaScript's function setInterval was used to do the update the timer every second. Template strings were used to display the clock. 

          The code for timer is in enhancements.js  

          In order to implement it, a programmer needs to select an element on the html page which will display the timer, choose an initial start time and then update it after a particular interval. Then, after the time is up, an alert is displayed informing the user and javascript's inbuilt object window is used to redirect the user to homepage.
          
          <li class="ol-li">Enhancement 2: The user has the choice to input a different address for billing and this is optional. If the user wants to do this, they can check a box and the billing address section dynamically appears on <a href="enquire.html">enquire.html</a>

          The code for this enhancement is in enhancements2.js. A separate file was used because enhancements.js has a timer which should only work on payment.html whereas this enhancement works on enquire.html 

          In order to implement this, a programmer needs to register an event at the checkbox which checks if it has been changed by the user. Whenever it's changed the inner html content of the relevant html section is changed in order to display the billing address section. In order to store the data entered in this section, validate.js checks if the inner html of the relevant tag is empty, and accordingly uses session storage to store the billing address data if it's not empty. 


        </li>
        </ol>
      </main>
</body>
</html>
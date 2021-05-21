<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Meta information -->
        <meta charset="utf-8" />
        <meta name="description" content="About" />
        <meta name="keywords" content="dinner, breakfast, lunch, Indian, food, meals"/>
        <meta name="author" content="Rabya Tayal" />

        <!-- Title -->
        <title>About Me</title>

        <!-- Style Links -->
        <link rel="stylesheet" href="styles/style.css"/>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">

    </head>

    <body id = "about-me-body">
        <!-- Include Menu -->
        <?php
            include_once 'menu.inc';
        ?>

        <main id="about-me" >

            <!-- Intro Section -->
            <section class="intro">

                <h1>About Me</h1>

                <!-- Figure -->
                <figure >
                    <img src="images/me.png" alt="Rabya" id="rabya-img"/>
                    <figcaption>Rabya Tayal (She/her)</figcaption>
                </figure>

                <!-- Definition List -->
                <dl>
                    <dt>Name:</dt>
                    <dd>Rabya Tayal</dd>
                    <dt>Student Id:</dt>
                    <dd>103144215</dd>
                    <dt>Course:</dt>
                    <dd>Bachelor of Computer Science</dd>
                    <dt>Email:</dt>
                    <dd><a href="mailto:103144215@student.swin.edu.au">103144215@student.swin.edu.au</a></dd>
                </dl>

            </section>

            <!-- TIME-TABLE IN AN HTML-5 TABLE -->
            <section class="time-table">

                <h1>Time-Table</h1>

                <table >

                    <thead>
        
                        <!-- header row -->
                        <tr>
                            <th>Time</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                        </tr>
                    </thead>
        
                    <tr>
                        <td rowspan="2" class="time">8 am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td rowspan="6" class="tne10005">TNE10005 Practical</td>
                        <td></td>
                        <td></td>
                        <td ></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td rowspan="2" class="time">9 am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    
                    <tr>
                        <td rowspan="2" class="time">10 am</td>
                        <td rowspan="4" class="cos10009">COS10009 Live Online</td>
                        <td></td>
        
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td></td>
                        <td rowspan="4" class="cos10009">COS10009 Lab</td>
                        <td></td>
                    </tr>
        

                    <tr>
                        <td rowspan="2" class="time">11 am</td>
                        <td></td>
                        <td></td>

                    </tr>
        
                    <tr>
                        <td rowspan="4" class="cos10011">COS10011 Live Online</td>
                        <td rowspan="2" class="cos10011">COS10011 Lab</td>
                        <td></td>

                    </tr>
        
                    <tr>
                        <td rowspan="2" class="time">12 pm</td>
                        <td></td>
                        <td></td>

                    </tr>
                    
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td rowspan="2" class="time">1 pm</td>
                        <td></td>
                        <td rowspan="4" class="cos10003">COS10003 Live Online</td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td rowspan="2" class="time">2 pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td></td>
                        <td rowspan="4" class="cos10003">COS10003 Tutorial 1</td>
                        <td ></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td rowspan="2" class="time">3 pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td rowspan="2" class="time">4 pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td rowspan="2" class="time">5 pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td rowspan="2" class="time">6 pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td rowspan="4" class="tne10005">TNE10005 Live Online</td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td rowspan="2" class="time">7 pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                
                    
                    <tr>
                        <td rowspan="2">8 pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
        
                    </tr>
        
                </table>

            </section>

        </main>

        <!-- Include Footer -->
        <?php
            include_once 'footer.inc';
        ?>

    </body>
</html>
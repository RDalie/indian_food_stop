<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Meta information -->
        <meta charset="utf-8" />
        <meta name="description" content="Product" />
        <meta name="keywords" content="dinner, breakfast, lunch, Indian, food, meals"/>
        <meta name="author" content="Rabya Tayal" />

        <!-- Title -->
        <title>Meals</title>

        <!-- Style Links -->
        <link rel="stylesheet" href="styles/style.css"/>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">

    </head>

    <body id="product">

        <!-- Include Menu -->
        <?php
            include_once 'menu.inc';
        ?>

        <!-- Main content -->
        <main>

        

            <h1>Meals</h1>

            <!-- North Indian Section -->
            <section class="north-indian">
                <h2>North Indian</h2>
            
                <!-- ATTENTION! REFERENCED FROM https://maps.mapmyindia.com/explore/tulsi+restaurant-bhavnagar-gujarat-ct6c53 -->
                <p>
                    <a href="https://maps.mapmyindia.com/explore/tulsi+restaurant-bhavnagar-gujarat-ct6c53">1</a>
                </p>
                <img src="images/northIndian.jpg" alt="North Indian Food">
                
                <!-- North Indian List -->
                <ul>
                    <li>Approx. Ala-Carte Cost: $50 for two</li>
                    <li>Cost of North Indian Buffet: $35 per person</li>
                    <li>Veg & Non-Veg available</li>
                </ul>


                <!-- North Indian Description -->
                <p>
                    You'll be surprised what we have to offer you in this category. All the rich delicacies and flavours of North India will make your day and you will want to keep coming back to the Indian Food Stop. We have dals, curries, naans, butter chicked .... and everything else you'd want to eat in an Indian restaurant. Items available in the north Indian buffet can be checked in the table below

                </p>


                <!-- North Indian Table -->
                <table id="north-indian-table" >

                    <!-- Table Head -->
                    <thead>

                        <tr>
                            <th>Item</th>
                            <th>Buffet Day</th>
                            <th>Price in AUD</th>
                        </tr>
                    </thead>  
                    
                    <!-- Table Body -->
                    <tbody>
                        <tr>
                            <td>Kadai Paneer</td>
                            <td>Tuesday, Wednesday</td>
                            <td>18.99</td>
                        </tr>

                        <tr>
                            <td>Malai Kofta</td>
                            <td>Friday, Monday</td>
                            <td>17.99</td>
                        </tr>
                        <tr>
                            <td>Vegetable Korma</td>
                            <td>Saturday, Thursday</td>
                            <td>15.99</td>
                        </tr>
                        <tr>
                            <td>Chicken Tikka</td>
                            <td>Monday, Friday</td>
                            <td>19.90</td>
                        </tr>
                        <tr>
                            <td>Cheese Naan</td>
                            <td>Tuesday, Thursday</td>
                            <td>6.90</td>
                        </tr>
                        <tr>
                            <td>Paratha</td>
                            <td>All weekdays</td>
                            <td>6.90</td>
                        </tr>
                        <tr>
                            <td>Vegetable Naan</td>
                            <td>All weekdays</td>
                            <td>5.90 </td>
                        </tr>
                        <tr>
                            <td>Chana Masala</td>
                            <td>All Weekdays</td>
                            <td>17.90</td>
                        </tr>                
                    </tbody>                          
                </table>
            
            </section>

            <!-- South Indian Section -->
            <section class="south-indian">
                <h2>
                    South Indian
                </h2>
                
                    <!-- ATTENTION! REFERENCED FROM https://www.ghumakkar.com/chennais-artculturefood-and-shopping/pic-9-south-indian-meal/ -->
                    <p>
                        <a href="https://www.ghumakkar.com/chennais-artculturefood-and-shopping/pic-9-south-indian-meal/">2</a>
                    </p>
                    <img src="images/southIndian.jpg" alt="South Indian Food"> 
    
                    <!-- South Indian List -->
                    <ul>
                        <li>Approx. Ala-Carte Cost: $60 for two</li>
                        <li>Cost of North Indian Buffet: $35 per person
                        </li>
                        <li>Only Veg available</li>
                    </ul>
    
                    <!-- South Indian Description -->
                    <p>
                        Like eating spicy? Have you tried South Indian food yet? That's as spicy as it can get. You also have the famous dosas, idlis, rice, upma and so much more to get your hands on. Items available in the south Indian buffet can be seen in the table below.
    
                    </p>
    
                    <!-- South Indian Table -->
                    <table id="south-indian-table" >
    
                        <!-- Table Head -->
                        <thead>
                
                            <tr>
                                <th>Item</th>
                                <th>Buffet Day</th>
                                <th>Price</th>
                            </tr>
                        </thead>
    
                        <!-- Table Body -->
                        <tbody>
                            <tr>
                                <td>Dosa</td>
                                <td>Monday, Saturday</td>
                                <td>15.9</td>
                            </tr>
                            <tr>
                                <td>Idli</td>
                                <td>Tuesday, Sunday</td>
                                <td>12.9</td>
                            </tr>
                            <tr>
                                <td>Upma</td>
                                <td>Monday, Wednesday</td>
                                <td>10.9</td>
                            </tr>
                            <tr>
                                <td>Rava Uttapam</td>
                                <td>Tuesday, Thursday</td>
                                <td>11.9</td>
                            </tr>
                            <tr>
                                <td>Poha</td>
                                <td>All weekdays</td>
                                <td>10.9</td>
                            </tr>
                            <tr>
                                <td>Jeera Rice</td>
                                <td>All weekdays</td>
                                <td>10.9</td>
                            </tr>
                        </tbody>
                    </table>
    
                
            </section>

        </main>
        
        
        <!-- Aside News Section -->
        <aside>
            <ol>
                <li>News: The restaurant is hosting a grand buffet on Wednesday. To get bookings,<a href="enquire.html">contact us</a>.</li>
                <li>News: The Indian Restaurant Committee recognised The Indian Food Stop as the best Indian restaurant in Melbourne. Cheers to our Customers!</li>
                <li>News: The restaurant will remain closed from 8th April 2021 to 12th April 2021.</li>
                <li>News: A guest Indian Chef is visiting the restaurant on 29th April. Restaurant is nearly booked! Get your seat fast.</li>
                <li>News: The restaurant is hosting a grand buffet on Monday. To get bookings,<a href="enquire.html">contact us</a>.</li>
                <li>News: The Indo House recognised The Indian Food Stop as the second best Indian restaurant in Melbourne. Cheers to our Customers!</li>
                <li>News: The restaurant will remain closed from 2nd April 2021 to 3rdth April 2021.</li>
                <li>News: A guest South Indian Chef is visiting the restaurant on 24th April. Restaurant is nearly booked! Get your seat fast.</li>
            </ol>
        </aside>

        <!-- Include Footer -->
        <?php
            include_once 'footer.inc';
        ?>
    </body>
</html>
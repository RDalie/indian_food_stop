<?php
    session_start();

    $errMsg = $_SESSION["errMsg"];
    echo "<p>", $errMsg, "</p>";

    if (!isset($_SESSION["fix_order"])) {
        header("location:enquire.php");
        exit();
    }

    unset($_SESSION["fix_order"]);
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Meta information -->
        <meta charset="utf-8" />
        <meta name="description" content="Enquire" />
        <meta name="keywords" content="dinner, breakfast, lunch, Indian, food, meals"/>
        <meta name="author" content="Rabya Tayal" />

        <!-- Title -->
        <title>Enquire</title>

        <!-- Style Links -->
        <link rel="stylesheet" href="styles/style.css"/>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">

        <!-- JavaScript File -->
        <script src="scripts/validate.js"></script>
        <script src="scripts/enhancements2.js"></script>

    </head>

    <body id="enquire">

    <!-- Include Menu -->
    <?php
        include_once 'menu.inc';
    ?>

        <!-- Main form -->
        <main>

            <h1>
                Contact Us
            </h1>
            <form id="contactForm" method="get" action="payment.php" novalidate = "novalidate">
                
                <!-- NAME -->
                <fieldset>
                    <legend>Name</legend>
                    <p>
                        <!-- First Name -->
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" maxlength="25" pattern = "[a-zA-Z]+" required = "required" />
                    </p>
                    <p>
                        <!-- Last Name -->
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" maxlength="25" pattern = "[a-zA-Z]+" required = "required" />
                    </p>
              </fieldset>
                       
                
                <!-- ADDRESS -->
                <fieldset>
                    <legend>Delivery Address</legend>
                    <p>
                        <!-- Street Address -->
                        <label for="streetAddress">Street Address</label>
                        <input type="text" maxlength="40" name="streetAddress" id="streetAddress" required = "required"/>
                    </p>
                    
                    <p>
                        <!-- Suburb/town -->
                        <label for="town">Suburb/Town</label>
                        <input type="text" name="suburb/town" id="town" maxlength="20" required = "required"/>
                    </p>
                    
                    <!-- VIC,NSW,QLD,NT,WA,SA,TAS,ACT -->
                    <p>
                        <!-- State select list -->
                        <label for="state">State</label>
                        <select name="state" id="state" required = "required">
                            <option value="">Please select</option>
                            <option value="VIC">VIC</option>
                            <option value="NSW">NSW</option>
                            <option value="QLD">QLD</option>
                            <option value="NT">NT</option>
                            <option value="WA">WA</option>
                            <option value="SA">SA</option>
                            <option value="TAS">TAS</option>
                            <option value="ACT">ACT</option>
                        </select>
                    </p>
        
                    <p>
                        <!-- Postcode -->
                        <label for="postcode">Postcode</label>
                        <input type="text" maxlength="4" pattern="\d{4}" name="postcode" id="postcode" required = "required"/>
                    </p>

                    <p>
                        <input type="checkbox" id="differentBilling"/>
                        <label for="differentBilling">Billing Address is different from delivery address</label>
                    </p>
                </fieldset>

                <!-- Billing Address -->
                <section id="billingAddress"></section>
        
                <!-- CONTACT DETAILS -->
                <fieldset>
                    <legend>Contact Details</legend>
                    <p>
                        <!-- Email Address -->
                        <label for="email">Email ID</label>
                        <input type="email" required = "required" id="email" name="email"/>
                    </p>
        
                    <p> 
                        <!-- Phone Number -->
                        <label for="phone">Phone Number</label>
                        <input type="text" maxlength="10" placeholder="XXXXXXXXXX" name="phone" id="phone" pattern="\d{10}" required = "required"/>
                    </p>
        
        
                    <p class="checkbox">
                        
                        Preferred Contact:
                        
                        <!-- Preferred Contact -->
        
                        <span class="check">
                        <!-- email -->
                        <input type="radio" name="preferredContact" id="emailContact" value="emailContact" required = "required"/>
                        <label for="emailContact">Email</label>
        
                        <!-- post -->
                        <input type="radio" name="preferredContact" id="postContact" value="postContact"/>
                        <label for="postContact">Post</label>
        
                        <!-- Phone -->
                        <input type="radio" name="preferredContact" id="phoneContact" value="phoneContact"/>
                        <label for="phoneContact">Phone</label>            
                        </span>
                    </p>
                </fieldset>

                <!-- Pricing -->
                <fieldset>
                    <legend>Pricing</legend>
                    <p>
                        <!-- Price -->
                        <label for="mealPrice">Price</label>
                        <select name="mealPrice" id="mealPrice" required='required'>
                            <option value="">Please select</option>
                            <option value="$35 North Indian Buffet">$35 pp North Indian Buffet</option>
                            <option value="$35 South Indian Buffet">$35 pp South Indian Buffet </option>
                            <option value="$30 AlaCarte">$30 pp AlaCarte </option>
                        </select>
                    </p>

                    <p>
                        <!-- Number of Meals -->
                        <label for="numberOfMeals">Number Of Meals</label>
                        <input type="text" id="numberOfMeals" required='required' />
                    </p>

                    <p id="priceFooter">
                        * AlaCarte prices are estimates. Additional cost will be returned if the meals cost lesser than the initial charged amount.
                    </p>
              </fieldset>
                <!-- Product enquiry -->
                <fieldset>
                    <legend>Restaurant Enquiry</legend>
                    <p>
        
                    <!-- Meal Range-->
                    <label for="mealList">Product</label>
                    <select name="meal" id="mealList" required = "required">
                        <option value="">Please Select</option>
                        <option value="dinner">Dinner </option>
                        <option value="lunch">Lunch </option>
                        <option value="breakfast">Breakfast</option>
                    </select>
        
                    </p>
                    <p class="checkbox">
                        <!-- Meal Features -->
                        
                        Features:   
                        
                        <span class="check">
                        <!-- Buffet -->
                        <input name="mealFeatures[]" type="checkbox" value="Buffet" id="buffet" checked="checked"/>
                        <label for="buffet">Buffet</label>
        
                        <!-- AlaCarte -->
                        <input type="checkbox" id="alaCarte" value="AlaCarte" name="mealFeatures[]">
                        <label for="alaCarte">AlaCarte</label>
        
                        <!-- Take Away -->
                        <input type="checkbox" id="takeAway" value="Take Away" name="mealFeatures[]">
                        <label for="takeAway">Take-Away</label>
                        </span>
                    </p>
        
                    <p>
                        <!-- Comments -->
                        <label for="comments">Comments</label> 
                        <textarea name="comments" id="comments" cols="50" rows="10" placeholder="Write down additional comments or queries..."></textarea>
        
        
                    </p>
        
                </fieldset>
                
                
                <p class="submit-reset">
                    <!-- Reset Button -->
                    <input type="reset" value="Reset"/>

                    <!-- Submit Button -->
                    <input type="submit" value="Pay Now"/>
                </p>

        
            </form>
        </main>

        <!-- Include Footer -->
        <?php
            include_once 'footer.inc';
        ?>

    </body>
</html>
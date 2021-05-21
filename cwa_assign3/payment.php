<!DOCTYPE html>

<html lang='en'>
    <head>
        <!-- Meta information -->
        <meta charset="utf-8" />
        <meta name="description" content="Payment" />
        <meta name="keywords" content="Payment, checkout, indian food stop"/>
        <meta name="author" content="Rabya Tayal" />

        <!-- WARNING -->
        <!-- LINK FOR ICONS -->
        <script src="https://use.fontawesome.com/be2d65813a.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">

        <!-- CSS -->
        <link rel="stylesheet" href="styles/style2.css">

        <!-- JavaScript -->
        <script src="scripts/payment.js"></script>
        <script src="scripts/enhancements.js"></script>

        <!-- Title -->
        <title>Payment</title>
    </head>
    <body id="payment">

        <section id="timer">
            <p id="timer-p">

            </p>
        </section>

        <section id="form-section">

            <!-- User details -->
            <section id='user-section'>

                <!-- First Name -->
                <p  class="row">
                    <span class="label">First Name:</span>  <span id="firstname-ro"  class="input-ro" ></span>
                </p>

                <!-- Last Name -->
                <p  class="row">
                   <span class="label">Last Name:</span>  <span id="lastname-ro"  class="input-ro"></span>
                </p>

                <!-- Meals Selected -->
                <p  class="row">
                   <span class="label">Meal Selected:</span>  <span id="meal-selected-ro" class="input-ro" ></span>
                </p>

                <!-- Number of Meals -->
                <p  class="row">
                    <span class="label">Number of Meals:</span>  <span id="number-of-meals-ro"  class="input-ro"></span>
                </p>

                <!-- Total Cost -->
                <p class="row">
                    <span class="label">Total Cost:</span> <span id="total-cost-ro" class="input-ro"></span>
                </p>

                <!-- Email -->
                <p class="row">
                    <span class="label">Email:</span> <span id="email-ro" class="input-ro"></span>
                </p>

                <!-- Address -->
                <p class="row">
                    <span class="label">Address:</span> <span id="address-ro" class="input-ro"></span>
                </p>

                <!-- Phone Number -->
                <p class="row">
                    <span class="label">Phone Number:</span> <span id="phone-ro" class="input-ro"></span>
                </p>

                <!-- Preferred Contact -->
                <p class="row">
                    <span class="label">Preferred Contact:</span> <span id="preferred-contact-ro" class="input-ro"></span>
                </p>

                <!-- Product -->
                <p class="row">
                    <span class="label">Product:</span> <span id="product-ro" class="input-ro"></span>
                </p>


                <!-- Features -->
                <p class="row">
                    <span class="label">Features:</span> <span id="features-ro" class="input-ro"></span>
                </p>

                <!-- Comments -->
                <p class="row">
                    <span class="label">Comments:</span> <span id="comments-ro" class="input-ro"></span>
                </p>

            </section>
            <!-- Payment details -->
            <section id="payment-section">

                <!-- payment form -->
                <form action="process_order.php" method="post" id="payment-form" novalidate = "novalidate">

                    <!-- hidden input fields -->
                    <section>

                        <input name="firstname" type="hidden" id="firstname-hidden"/>
                        <input name="lastname" type="hidden" id="lastname-hidden"/>
                        <input name="street-address" type="hidden" id="street-address-hidden"/>
                        <input name="suburb" type="hidden" id="suburb-hidden"/>
                        <input name="state" type="hidden" id="state-hidden"/>
                        <input name="postcode" type="hidden" id="postcode-hidden"/>
                        <input name="billing-street-address" type="hidden" id="billing-street-address-hidden"/>
                        <input name="billing-suburb" type="hidden" id="billing-suburb-hidden"/>
                        <input name="billing-state" type="hidden" id="billing-state-hidden"/>
                        <input name="billing-postcode" type="hidden" id="billing-postcode-hidden"/>
                        <input name="email-id" type="hidden" id="email-id-hidden"/>
                        <input name="phone-number" type="hidden" id="phone-number-hidden"/>
                        <input name="preferred-contact" type="hidden" id="preferred-contact-hidden"/>
                        <input name="price" type="hidden" id="price-hidden"/>
                        <input name="number-of-meals" type="hidden" id="number-of-meals-hidden"/>
                        <input name="products" type="hidden" id="products-hidden"/>
                        <input name="features" type="hidden" id="features-hidden"/>
                        <input name="comments" type="hidden" id="comments-hidden"/>


                    </section>

                    <!-- Credit card type -->
                    <section class="row">
                        <label for="card-type-select"> Card Type</label>

                        <!-- Select dropdown list for card options -->
                        <select name="card-type" id="card-type-select" required = "required">
                            <option value="">Please select</option>
                            <option value="Visa">Visa</option>
                            <option value="MasterCard">Master Card</option>
                            <option value="AmericanExpress">American Express</option>

                        </select>
        
                        <!-- Credit Card icons -->
                        <section class="row">
                            <i class="fab fa-cc-mastercard fa-2x mastercard"></i>
                            <i class="fab fa-cc-visa fa-2x visa"></i>
                            <i class="fab fa-cc-amex fa-2x"></i>

                        </section>

                    </section>

                    <!-- Name on credit card -->
                    <section class="row">
                        <label for="name-on-card">Name on Credit Card</label>
                        <input type="text" pattern = "[a-zA-Z ]{1,40}" id="name-on-card" name="name-on-card" required = "required" />
                    </section>

                    <!-- Credit Number-->
                    <section class="row">
                        <label for="card-number">Credit Card Number</label>
                        <input type="text" pattern="\d{15,16}" id="card-number" name="credit-card-number" required = "required" />
                    </section>

                    <section class="row">
                        <!-- Credit card expiry date -->
                        <label for="expiry-date">Expiry Date</label>
                        <input type="text" pattern = "\d{2}-\d{2}" id="expiry-date" placeholder = "mm-yy" name="expiry-date" required = "required" />
                    </section>

                    <!-- Card Verification value -->
                    <section class="row">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="cvv" required = "required" />
                    </section>

                    <section class="row input">
                        <input type="submit" value="Check-Out" id="check-out"/>
                        <input type="button" value="Cancel" id="cancel"/>
                    </section>
                </form>

            </section>

        </section>
    </body>
</html>
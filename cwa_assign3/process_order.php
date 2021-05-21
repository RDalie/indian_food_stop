
<?php

    // Sanitize data
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $errMsg = "";

    // CHECK IF FORM VALUES HAVE BEEN SET AND THEN INITIALIZE VARIABLES AND SANITIZE

    // NAME----------------------------------------------------------------------------

    if (isset($_POST['firstname'])) {

        $first_name = $_POST['firstname'];
        $first_name = sanitize_input($first_name);

        // Firstname should contain alphabets, max 40 characters
        if (!preg_match("/^[a-zA-Z]{1,25}$/", $first_name)) {
            $errMsg .= "<p> Your first name should only have alphabets </p>" ;
}

    } else {

        // redirect if php is accessed directly
        header("location: payment.php");
    };

    if (isset($_POST['lastname'])) {

        $last_name = $_POST['lastname'];
        $last_name = sanitize_input($last_name);

        // Lastname should contain alphabets, max 40 characters
        if (!preg_match("/^[a-zA-Z]{1,25}$/", $last_name)) {
            $errMsg .= "<p> Your lastname should only have alphabets </p>";
        };
        
    };


    // ADDRESS----------------------------------------------------------------------------


    if (isset($_POST['street-address'])) {

        $street_address = $_POST['street-address'];
        $street_address = sanitize_input($street_address);
        
        // Street Address
        if (!preg_match("/^.{1,40}$/", $street_address)) {
            $errMsg .= "<p> You should have a max 40 character long street address </p>";
        };

    };

    if (isset($_POST['suburb'])) {

        $suburb = $_POST['suburb'];
        $suburb = sanitize_input($suburb);

        // Suburb
        if (!preg_match("/^.{1,20}$/", $suburb)) {
            $errMsg .= "<p>You should have a max 20 character long street address.</p>";
        };


    };

    if (isset($_POST['state'])) {

        $state = $_POST['state'];
        $state = sanitize_input($state);

        // state
        if (!preg_match("/^.+$/", $state)) {
            $errMsg .= "<p> Please select a state </p>";
        };

    };  
    
    if (isset($_POST['postcode'])) {

        $postcode = $_POST['postcode'];
        $postcode = sanitize_input($postcode);

        // postcode
        if (!preg_match("/^\d{4}$/", $postcode)) {
            $errMsg .= "<p>The postcode should be exactly 4 digits long. </p>";
        };

    };



    // BILLING ADDRESS------------------------------------------------------------------


    if (isset($_POST['billing-street-address'])) {

        $billing_street_address = $_POST['billing-street-address'];
        $billing_street_address = sanitize_input($billing_street_address);

    };

    if (isset($_POST['billing-suburb'])) {

        $billing_suburb = $_POST['billing-suburb'];
        $billing_suburb = sanitize_input($billing_suburb);

    };

    if (isset($_POST['billing-state'])) {

        $billing_state = $_POST['billing-state'];
        $billing_state = sanitize_input($billing_state);

    };

    if (isset($_POST['billing-postcode'])) {

        $billing_postcode = $_POST['billing-postcode'];
        $billing_postcode = sanitize_input($billing_postcode);

    };

    // CONTACT DETAILS-----------------------------------------------------------------------


    if (isset($_POST['email-id'])) {

        $email_id = $_POST['email-id'];
        $email_id = sanitize_input($email_id);

        // Email
        if (!filter_var($email_id, FILTER_VALIDATE_EMAIL )) {
            $errMsg .= "<p> Invalid email format </p>";
        };

    };

    if (isset($_POST['phone-number'])) {

        $phone_number = $_POST['phone-number'];
        $phone_number = sanitize_input($phone_number);

        // phone-number
        if (!preg_match("/^\d{1,10}$/", $phone_number)) {
            $errMsg .= "<p> Phone numbers can be as long as 10 digits. </p>";
        };

    };

    if (isset($_POST['preferred-contact'])) {

        $preferred_contact = $_POST['preferred-contact'];
        $preferred_contact = sanitize_input($preferred_contact);

        // preferred contact
        if (!preg_match("/^.+$/", $preferred_contact)) {
            $errMsg .= "<p>Please choose a preferred contact</p>";
        };

    };

    // PRICING----------------------------------------------------------------------------


    if (isset($_POST['price'])) {

        $price = $_POST['price'];
        $price = sanitize_input($price);

        // price
        if (!preg_match("/^.+$/", $price)) {
            $errMsg .= "<p>Please choose a price</p>";
        };

    };

    if (isset($_POST['number-of-meals'])) {

        $number_of_meals = $_POST['number-of-meals'];
        $number_of_meals = sanitize_input($number_of_meals);

        // number-of-meals
        if (!preg_match("/^[1-9][0-9]*$/", $number_of_meals)) {
            $errMsg .= "<p> Number of Meals should be a positive integer </p>";
        };


    };

    // RESTAURANT-ENQUIRY-------------------------------------------------------------------


    if (isset($_POST['products'])) {

        $products = $_POST['products'];
        $products = sanitize_input($products);

        // products
        if (!preg_match("/^.+$/", $products)) {
            $errMsg .= "<p>Please select a product </p>";
        };

    };

    if (isset($_POST['features'])) {

        $features = $_POST['features'];
        $features = sanitize_input($features);

        // features
        if (!preg_match("/^.+$/", $features)) {
            $errMsg .= "<p>Please select a feature</p>";
        };

    };

    if (isset($_POST['comments'])) {

        $comments = $_POST['comments'];
        $comments = sanitize_input($comments);

    };

    // Credit Card Details

    // card type
    if (isset($_POST['card-type-select'])) {

        $card_type = $_POST['card-type-select'];
        $card_type = sanitize_input($card_type);

        if (!preg_match("/^.+$/", $card_type)) {
            $errMsg .= "<p>Please select a card type</p>";
            }
            
    }

    // name on credit card
    if (isset($_POST['name-on-card'])) {

        $card_name = $_POST['name-on-card'];
        $card_name = sanitize_input($card_name);
    }

    // credit card number
    if (isset($_POST['card-number'])) {
        
        $card_number = $_POST['card-number'];
        $card_number = sanitize_input($card_number);

        
        if (!preg_match("/^.+$/", $card_number)) {
            $errMsg .= "<p>Please fill a card number</p>";
        }
        
        // VALIDATING CARD TYPE AGAINST CARD NUMBER
        if ($card_type == 'Visa' and isset($_POST['card-type-select'])) {
            // Visa cards should start with 4 and be 16 digits long
            if (!preg_match("/^4[0-9]{15}$/",$card_number)) {
            $errMsg .= '<p>Visa card numbers must start with 4 and be 16 digits long.</p>';
            }
        } else if ($card_type == 'MasterCard') {
            // Master Card numbers should start with 51 to 55 and be 16 digits long
            if(!preg_match('/^5[1-5]{1}[0-9]{14}$/', $card_number)) {
            $errMsg .= '<p>Master Card card numbers must start with 51 to 55 and be 16 digits long.</p>';
            }
        } else if ($card_type == 'AmericanExpress') {
            // American Express cards should start with 34 to 37 and be 15 digits long
            if (!preg_match('/^3[47][0-9]{13}$/', $card_number)) {
            $errMsg .= '<p>American Express card numbers must start with 34 or 37 and be 15 digits long.</p>';
            }
        }
    }

    // card-expiry date
    if (isset($_POST['expiry-date'])) {
        $expiry_date = $_POST['expiry-date'];
        $expiry_date = sanitize_input($expiry_date);

        if (!preg_match("/^\d{2}-\d{2}$/", $expiry_date)) {
            $errMsg .= "<p>Please write the expiry date in mm-yy format</p>";
        }
    }

    // card verification value
    if (isset($_POST['cvv'])) {

        $cvv = $_POST['cvv'];
        $cvv = sanitize_input($cvv);

        if (!preg_match("/^\d+$/", $cvv)) {
            $errMsg .= "<p>cvv should contain numbers</p>";
        };
        
    }

?>

<?php


if (isset($_POST['state']) and isset($_POST['postcode'])) {

    // CHECK IF STATE MATCHES POSTCODE
    if ($state == 'VIC') {
        // VIC = 3 OR 8
        if (!($postcode[0] == '3' || $postcode[0] == '8')) {
        $errMsg .= '<p>This postcode does not belong to VIC</p>';
        }
    } else if ($state == 'NSW') {
        // NSW= 1 OR 2
        if (!($postcode[0] == '1' || $postcode[0] == '2')) {
        $errMsg .= '<p>This postcode does not belong to NSW</p>';
        }
    } else if ($state == 'QLD') {
        // QLD = 4 OR 9
        if (!($postcode[0] == '4' || $postcode[0] == '9')) {
        $errMsg .= '<p>This postcode does not belong to QLD</p>';
        }
    } else if ($state == 'NT') {
        // NT = 0
        if (!($postcode[0] == '0')) {
        $errMsg .= '<p>This postcode does not belong to NT</p>';
        }
    } else if ($state == 'WA') {
        // WA = 6
        if (!($postcode[0] == '6')) {
        $errMsg .= '<p>This postcode does not belong to WA</p>';
        }
    } else if ($state == 'SA') {
        // SA=5
        if (!($postcode[0] == '5')) {
        $errMsg .= '<p>This postcode does not belong to SA</p>';
        }
    } else if ($state == 'TAS') {
        // TAS=7
        if (!($postcode[0] == '7')) {
        $errMsg .= '<p>This postcode does not belong to TAS</p>';
        }
    } else if ($state == 'ACT') {
        if (!($postcode[0] == '0')) {
        $errMsg .= '<p>This postcode does not belong to ACT</p>';
        }
    };


}




























echo  $errMsg ;

?>
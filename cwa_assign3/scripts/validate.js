'use strict';

function storeBooking(
    firstname,
    lastname,
    mealSelected,
    numberOfMeals,
    postcode,
    state
) {
    //more input elements selected
    var streetAddress = document.getElementById('streetAddress').value;
    var town = document.getElementById('town').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var mealList = document.getElementById('mealList').value;
    var comments = document.getElementById('comments').value;

    // Checkboxes: preferred contact
    var isEmail = document.getElementById('emailContact').checked;
    var isPost = document.getElementById('postContact').checked;
    var isPhone = document.getElementById('phoneContact').checked;

    //Checkboxes: Features
    var isBuffet = document.getElementById('buffet').checked;
    var isAlaCarte = document.getElementById('alaCarte').checked;
    var isTakeAway = document.getElementById('takeAway').checked;

    // storing preferred contacts which are checked
    var preferredContactArr = [];
    if (isEmail) preferredContactArr.push('email');
    if (isPost) preferredContactArr.push('post');
    if (isPhone) preferredContactArr.push('phone');

    var preferredContact = preferredContactArr.join(', ');
    sessionStorage.preferredContact = preferredContact;

    // storing features which are checked
    var featuresArr = [];
    if (isBuffet) featuresArr.push('buffet');
    if (isAlaCarte) featuresArr.push('alaCarte');
    if (isTakeAway) featuresArr.push('isTakeAway');

    var features = featuresArr.join(', ');
    sessionStorage.features = features;

    // Name
    sessionStorage.firstname = firstname;
    sessionStorage.lastname = lastname;

    // Address
    sessionStorage.streetAddress = streetAddress;
    sessionStorage.town = town;
    sessionStorage.state = state;
    sessionStorage.postcode = postcode;

    // Contact Details
    sessionStorage.email = email;
    sessionStorage.phone = phone;

    // Pricing
    sessionStorage.mealSelected = mealSelected;
    sessionStorage.numberOfMeals = numberOfMeals;
    sessionStorage.mealPrice =
        Number(mealSelected.slice(1, 3)) * Number(numberOfMeals);

    //Restaurant Enquiry
    sessionStorage.mealList = mealList;
    sessionStorage.comments = comments;

    // storing billing address info separately iff billing address is different
    if (document.getElementById('billingAddress').innerHTML !== '') {
        //selecting billing address inputs
        var billingStreetAddress = document.getElementById(
            'billingStreetAddress'
        ).value;
        var billingTown = document.getElementById('billingTown').value;
        var billingState = document.getElementById('billingState').value;
        var billingPostcode = document.getElementById('billingPostcode').value;

        //if billing address is different from delivery address store the data
        var checkbox = document.getElementById('differentBilling');
        if (checkbox.checked) {
            sessionStorage.billingStreetAddress = billingStreetAddress;
            sessionStorage.billingTown = billingTown;
            sessionStorage.billingState = billingState;
            sessionStorage.billingPostcode = billingPostcode;
        }
    }
}

function validate() {
    var errMsg = '';
    var result = true; //returns true if no error is found
    var debug = false;

    // selecting the HTML elements
    var firstname = document.getElementById('firstName').value;
    var lastname = document.getElementById('lastName').value;
    var numberOfMeals = document.getElementById('numberOfMeals').value;
    var state = document.getElementById('state').value;
    var postcode = document.getElementById('postcode').value;

    var mealPrice = document.getElementById('mealPrice').value;

    //checking numberOfMeals is positive
    if (numberOfMeals < 1) {
        errMsg += 'Number of Meals should be 1 or greater than 1. \n';
        result = false;
    }

    //state and postcode check for delivery address
    var stateErr = statePostcodeCheck(state, postcode, 'Delivery');

    if (stateErr !== 'Delivery: ') {
        errMsg += stateErr + '\n';
        result = false;
    }

    //state and postcode check for billing address
    if (document.getElementById('billingAddress').innerHTML !== '') {
        var billingState = document.getElementById('billingState').value;
        var billingPostcode = document.getElementById('billingPostcode').value;

        var billingErr = statePostcodeCheck(
            billingState,
            billingPostcode,
            'Billing'
        );

        console.log(billingErr !== 'Billing: ');

        if (billingErr !== 'Billing: ') {
            errMsg += billingErr + '\n';
            result = false;
        }
    }

    if (debug) {
        if (errMsg != '') {
            //display error message when there are errors
            alert(errMsg);
        }
    }

    if (!debug) {
        result = true;
    }

    //store user inputs if no errors
    if (result) {
        storeBooking(
            firstname,
            lastname,
            mealPrice,
            numberOfMeals,
            postcode,
            state
        );
    }

    return result;
}

// checks if state does not match the postcode
function statePostcodeCheck(state, postcode, type) {
    var errMsg = `${type}: `;

    switch (state) {
        case 'VIC':
            if (!(postcode[0] == '3' || postcode[0] == '8')) {
                errMsg += 'This postcode does not belong to VIC';
            }
            break;

        case 'NSW':
            if (!(postcode[0] == '1' || postcode[0] == '2')) {
                errMsg += 'This postcode does not belong to NSW';
            }
            break;

        case 'QLD':
            if (!(postcode[0] == '4' || postcode[0] == '9')) {
                errMsg += 'This postcode does not belong to QLD';
            }
            break;

        case 'NT':
            if (!(postcode[0] == '0')) {
                errMsg += 'This postcode does not belong to NT';
            }
            break;

        case 'WA':
            if (!(postcode[0] == '6')) {
                errMsg += 'This postcode does not belong to WA';
            }
            break;

        case 'SA':
            if (!(postcode[0] == '5')) {
                errMsg += 'This postcode does not belong to SA';
            }
            break;

        case 'TAS':
            if (!(postcode[0] == '7')) {
                errMsg += 'This postcode does not belong to TAS';
            }
            break;

        case 'ACT':
            if (!(postcode[0] == '0')) {
                errMsg += 'This postcode does not belong to ACT';
            }
            break;
    }

    return errMsg;
}

document.addEventListener('DOMContentLoaded', init);

function init() {
    var contactForm = document.getElementById('contactForm'); //selects form
    contactForm.onsubmit = validate; //validates form
}

'use strict';

function getBooking() {
    //DISPLAYING INPUT FIELDS IN READ-ONLY FORMAT
    document.getElementById('firstname-ro').textContent =
        sessionStorage.firstname;
    document.getElementById('lastname-ro').textContent =
        sessionStorage.lastname;
    document.getElementById('meal-selected-ro').textContent =
        sessionStorage.mealSelected;
    document.getElementById('number-of-meals-ro').textContent =
        sessionStorage.numberOfMeals;
    document.getElementById('total-cost-ro').textContent =
        '$' + sessionStorage.mealPrice;
    document.getElementById('email-ro').textContent = sessionStorage.email;

    var billingStr = sessionStorage.billingStreetAddress
        ? `Billing: ${sessionStorage.billingStreetAddress}, ${sessionStorage.billingState}, ${sessionStorage.billingPostcode}, ${sessionStorage.billingTown} `
        : ' ';

    document.getElementById(
        'address-ro'
    ).textContent = `Delivery:  ${sessionStorage.streetAddress},  ${sessionStorage.state}, ${sessionStorage.postcode} ${sessionStorage.town} , ${billingStr} `;
    document.getElementById('phone-ro').textContent = sessionStorage.phone;
    document.getElementById('preferred-contact-ro').textContent =
        sessionStorage.preferredContact;
    document.getElementById('product-ro').textContent = sessionStorage.mealList;
    document.getElementById('features-ro').textContent =
        sessionStorage.features;
    document.getElementById('comments-ro').textContent =
        sessionStorage.comments;

    // STORING USER DATA IN HIDDEN INPUT ELEMENTS FROM CLIENT STORAGE, TO BE PASSED TO THE SERVER SIDE SCRIPT
    document.getElementById('firstname-hidden').value =
        sessionStorage.firstname;
    document.getElementById('lastname-hidden').value = sessionStorage.lastname;
    document.getElementById('street-address-hidden').value =
        sessionStorage.streetAddress;
    document.getElementById('suburb-hidden').value = sessionStorage.town;
    document.getElementById('state-hidden').value = sessionStorage.state;
    document.getElementById('postcode-hidden').value = sessionStorage.postcode;
    document.getElementById('email-id-hidden').value = sessionStorage.email;
    document.getElementById('phone-number-hidden').value = sessionStorage.phone;
    document.getElementById('preferred-contact-hidden').value =
        sessionStorage.preferredContact;
    document.getElementById('price-hidden').value = sessionStorage.mealPrice;
    document.getElementById('products-hidden').value =
        sessionStorage.mealSelected;
    document.getElementById('features-hidden').value = sessionStorage.features;
    document.getElementById('number-of-meals-hidden').value =
        sessionStorage.numberOfMeals;
    document.getElementById('comments-hidden').value = sessionStorage.comments;
    document.getElementById('billing-street-address-hidden').value =
        sessionStorage.billingStreetAddress;
    document.getElementById('billing-suburb-hidden').value =
        sessionStorage.billingTown;
    document.getElementById('billing-state-hidden').value =
        sessionStorage.billingState;
    document.getElementById('billing-postcode-hidden').value =
        sessionStorage.billingPostcode;
}

//validate
function validate() {
    var errMsg = '';
    var result = true;
    var debug = false;

    var nameOnCard = document.getElementById('name-on-card').value;
    // Name on credit card: maximum 40 characters,alphabetical and space only
    if (!nameOnCard.match(/^[a-zA-Z ]{1,40}$/)) {
        errMsg +=
            'Name on Card must be max 40 characters long and contain alphabets and space only.\n';
        result = false;
    }

    var cardError = creditCardValidate();

    if (cardError !== '') {
        errMsg += cardError;
        result = false;
    }

    if (!debug) {
        result = true;
    }

    if (debug) {
        if (errMsg !== '') {
            alert(errMsg);
        }
    }

    return result;
}

// clears session storage and redirects to index.html
function cancelBooking() {
    sessionStorage.clear();

    window.location.href = 'index.html';
}

// validates card number against card name
function creditCardValidate() {
    var errMsg = '';

    var cardName = document.getElementById('card-type-select').value;
    var creditCardNumber = document.getElementById('card-number').value;

    switch (cardName) {
        case 'Visa':
            if (!creditCardNumber.match(/^4[0-9]{15}$/)) {
                errMsg +=
                    'Visa card numbers must start with 4 and be 16 digits long.';
            }
            break;
        case 'MasterCard':
            if (!creditCardNumber.match(/^5[1-5]{1}[0-9]{14}$/)) {
                errMsg +=
                    'Master Card card numbers must start with 51 to 55 and be 16 digits long.';
            }
            break;
        case 'AmericanExpress':
            if (!creditCardNumber.match(/^3[47][0-9]{13}$/)) {
                errMsg +=
                    'American Express card numbers must start with 34 or 37 and be 15 digits long.';
            }
            break;

        default:
            'This credit card is not allowed';
    }
    return errMsg;
}

function init() {
    getBooking();
    countDown();

    //SELECTING THE FORM
    var paymentForm = document.getElementById('payment-form');
    paymentForm.onsubmit = validate;

    // cancel button
    var cancelButton = document.getElementById('cancel');
    cancelButton.onclick = cancelBooking;
}

document.addEventListener('DOMContentLoaded', init);

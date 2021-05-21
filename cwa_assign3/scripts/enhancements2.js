'use strict';

//registers an event to check if billing address is different from delivery address
function isBillingDifferent() {
    //billing address fieldset selected
    var billingAddressField = document.getElementById('billingAddress');

    // if billing address is different show another section to input billing address
    var html = `
        <fieldset>
        
            <legend>Billing Address</legend>
            <p>
                <!-- Street Address -->
                <label for="billingStreetAddress">Street Address</label>
                <input type="text" maxlength="40" name="billingStreetAddress" id="billingStreetAddress" required = "required"/>
            </p>
            
            <p>
                <!-- Suburb/town -->
                <label for="billingTown">SuburbT</label>
                <input type="text" name="billing-suburb/town" id="billingTown" maxlength="20" required = "required"/>
            </p>
            
            <!-- VIC,NSW,QLD,NT,WA,SA,TAS,ACT -->
            <p>
                <!-- State select list -->
                <label for="billingState">State</label>
                <select name="billing-state" id="billingState" required = "required">
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
                <label for="billingPostcode">Postcode</label>
                <input type="text" maxlength="4" pattern="\\d{4}" name="billing-postcode" id="billingPostcode" required = "required"/>
            </p>
            </fieldset>
            `;
    //if checkbox is checked: display the billing address section, otherwise don't
    var checkbox = document.getElementById('differentBilling');
    checkbox.addEventListener('change', function () {
        if (checkbox.checked) {
            billingAddressField.insertAdjacentHTML('afterbegin', html);
        } else {
            billingAddressField.innerHTML = '';
        }
    });
}

document.addEventListener('DOMContentLoaded', isBillingDifferent);

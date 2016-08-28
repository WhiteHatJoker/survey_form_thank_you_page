# Showing a survey form on a thank you page #
Insert the survey form to woocommerce thank you/order confirmation page
## Installation ##
1. Create the survey form questions and customizations as you wish using the Formidable Forms plugin.
2. Copy over the code from current repository to your functions.php replacing the values in brackets`echo FrmFormsController::show_form(28, $key = 'frmprocontact2', $title=false, $description=true);` as follows: (Your created Formidable Form ID, $key= 'Formidable Form Key', $title = true or false depending on wheter or not you would like to display the title set in form, $description = true or false depeneding on whether or not you would like to display description from the form).
3. Note: You can completely customize the look of the form by adding your own classes to the div surrounding the form. Also, if you would like to display the survey form lower on the thank you page you could change the value 1 in `add_action ('woocommerce_thankyou', 'myfunction', 1);` to something bigger and check the result.

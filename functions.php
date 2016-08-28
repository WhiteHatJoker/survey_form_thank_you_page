/*Survey form on order received page*/
 add_action ('woocommerce_thankyou', 'myfunction', 1);
  function myfunction($order_id) {
  	echo '<div class="avada-choose-cause woocommerce-content-box full-width"><h2 data-fontsize="18" data-lineheight="27">Choose a Cause</h2>';
    echo FrmFormsController::show_form(28, $key = 'frmprocontact2', $title=false, $description=true);
    echo '</div>';
  }

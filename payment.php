<?php


session_start();
include 'config.inc.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form class="form-horizontal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
<input type='hidden' name='business' value='sb-9jlg4556426@business.example.com'>
<input type='hidden' name='item_name' value='<?php echo $_SESSION["cartItems"]; ?>'>
<input type='hidden' name='item_number' value="<?php echo $order_id; ?>">
<input type='hidden' name='amount' value='<?php echo $_SESSION["payableAmount"]; ?>'>
<input type='hidden' name='currency_code' value='EUR'>
<input type='hidden' name='notify_url' value='http://yourdomain.com/shopping-cart-with-paypal-integration/notify.php'>
<input type='hidden' name='return' value='http://yourdomain.com/shopping-cart-with-paypal-integration/success.php'>
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="order" value="<?php echo $_SESSION["orderNumber"]; ?>">
<br>
<div class="form-group">
<div class="col-sm-2">
<input type="submit" class="btn btn-lg btn-block btn-danger" name="continue_payment" value="Pay Now">
</div>
</div>
</form>
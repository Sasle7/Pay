<?php
$my_email ="alslmansalh799@gmail.com" ;
$return_to ="https://sasle7.github.io/Pay/" ;
$notify_page ="https://sasle7.github.io/Pay/notify_page" ;
$custom = "DONE";
?>


<form action="https://spaceremit.com/apipay/" method="POST" accept-charset="utf-8" >
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="<?php echo htmlspecialchars( $my_email); ?>">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="item_name" value="Recharge">
<input type="hidden" name="return" value="<?php echo htmlspecialchars( $return_to); ?>">
<input type="hidden" name="notify_url" value="<?php echo htmlspecialchars( $notify_page); ?>">
<input type="hidden" name="custom" value="<?php echo htmlspecialchars( $custom );?>">

<input type="hidden" name="sp_api_skip_register" value="true">
<input type="text" name="sp_api_user_fullname">
<input type="email" name="sp_api_user_email">

<input type="number" name="amount" id="payPrice" required="required" />
<input type="submit" id="pay" value="pay"/>

</form>

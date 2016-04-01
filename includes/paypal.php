<div class="title">Pay Online</div>
<div class="divider"></div>

<div class="paypal">
	<p>We accept online payment:</p>
	<p><a href="#" onclick="javascript:void(0);$('#payonline').submit();"><img src="images/paypal.gif" height="25" border="0" /></a></p>
</div>

<form id="payonline" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="display:none;">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="liukaitc@gmail.com">
        <!-- Begin First Item -->
<input type="hidden" name="quantity_1" value="1">
<input type="hidden" name="item_name_1" value="Photography Online Payment">

<input type="hidden" name="amount_1" value="1.00">
<input type="hidden" name="currency_code" value="USD">

<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="upload" alt="Make payments with PayPal - it's fast, free and secure!" width="87" height="23">
</form>


<div class="divider"></div>
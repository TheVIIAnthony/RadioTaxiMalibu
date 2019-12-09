<?php

require "conexion.php";


if(isset($_POST['programar'])){
	$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
	$merchant_email = 'radiotaxisunidosveracruz@gmail.com';
	$costo = $_POST['costo'];
	$currency = 'MXN';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Procesando con PayPal</title>
</head>
<body>
	<form name="myform" action="<?php echo $paypal_url; ?>" method="post" target="_top">
		<input type="hidden" name="business" value="<?php echo $merchant_email; ?>">
		<input type="hidden" name="currency_code" value="<?php echo $currency; ?>">
		<input type="hidden" name="amount" value="<?php echo $costo; ?>">
	</form>
	<script type="text/javascript">
		document.myform.programar();
	</script>
</body>
</html>
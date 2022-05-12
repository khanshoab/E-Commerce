<?php

$apiKey="";

?>

<script src=""></script>

<form action="paynow.php" method="POST">

<script

src=""

data-key="<?php echo $apiKey; ?>"
data-currency="INR"

data-id="<?php echo $_POST['orderid']; ?>"

data-buttontext="Pay with Razorpay"

data-name="JUMBO mart"

data-description=""

data-image=""

data-prefill.name="<?php echo $_POST['name']; ?>"

data-prefill.email="<?php echo $_POST['email']; ?>" data-prefill.contact="<?php echo $_POST['mobile']; ?>"

data-theme.color="#0e90e4">

</script>

<input type="hidden" custom="Hidden Element" name="hidden">

</form>
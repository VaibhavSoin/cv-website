<?php
require('config.php');
?>
<form action="submit.php" method="post">
<script src="https://checkout .stripe.com/checkout.js" class="stripe-button"
data-key="<?php echo $publishablekey?>"
data-amount="500"
data-name="CV For You"
data-description="CV For Tou Desc"
data-image=""
data-cuurency="inr"
>
</script>
</form>

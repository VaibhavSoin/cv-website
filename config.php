<?php
require('stripe-php-master/init.php');

$publishablekey=" pk_test_51MtC8BSHqeVES7GgutoZ3A3ABwK8U5AQj27oAo6bo494RbxZraIR3AYx2hyxQLLxVWKxilM1DZK4BoQVjO5judzE00AVGa0XbT";


$secretkey=" sk_test_51MtC8BSHqeVES7GgBWMTimK24itRG3BAGjN8VH7FhVH3ku8sQR40lZvCD6Df0zjy0say6qqjBshuHP3mFZl6zAaZ00A5wA6yO2";

\Stripe\Stripe::setApiKey($secretKey);
?>

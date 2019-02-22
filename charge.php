<?php

require_once('vendor/autoload.php');

//paste your account Publishable API key and Secret api key get it from "https://stripe.com/docs/keys
$stripe = array(
 "secret_key" =>"sk_test_wD8p",
 "publishable_key"=>"pk_test_n5"
); 



\Stripe\Stripe::setApiKey($stripe['secret_key']); 
//

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];


$charge = \Stripe\Charge::create([
    'amount' => 999,
    'currency' => 'usd',
    'description' => 'Example charge',
    'source' => $token,
]);
// your can save data from charge array in you database 


print_r($charge);exit;

?>
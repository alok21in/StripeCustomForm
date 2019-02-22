# StripeCustomForm
Stripe payment using stripe sdk with custom form 

##############################################################################################

for use it just clone it and change your stripe account Publishable API key and Secret api key get it from https://stripe.com/docs/keys

once you have api keys go in index.js and change Publishable api key with your and in charge.php change Publishable API key and Secret api key

for exp:-

var stripe = Stripe('pk_test_n5h8Y');// change with your Publishable key in index.js 

$stripe = array(
 "secret_key" =>"sk_test_wD8p",// your secret key in charge.php
 "publishable_key"=>"pk_test_n5"// your Publishable key in charge.php
); 

that's it. 

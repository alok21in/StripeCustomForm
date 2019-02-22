 <!DOCTYPE html>
<html lang="en">

 <head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title data-tid="elements_examples.meta.title">Stripe Custom form</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">

   <style>
   
   > input[type="text"],
    > input[type="email"],
    > input[type="password"] {
     
     
      &:invalid:not(:focus):not(:placeholder-shown) {
        // Show a light reminder
        background: pink;
        & + label {
          opacity: 0;
        }
      }
      
     
      &:invalid:focus:not(:placeholder-shown) {
      
        & ~ .requirements {
          max-height: 200px;
          padding: 0 30px 20px 50px;
        }
      }
      
    }
    
   
    .requirements {
      padding: 0 30px 0 50px;
      color: #999;
      max-height: 0;
      transition: 0.28s;
      overflow: hidden;
      color: red;
      font-style: italic;
    }
   
   
body{    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol"!important;
			    color: #32325d;}
.field__input{ 
  background-color: transparent;
  border-radius: 0;
     color: #32325d;
    font-weight: 500;
    font-family: Source Code Pro, Consolas, Menlo, monospace;
    font-size: 14px;
    -webkit-font-smoothing: antialiased;
  border: none;

  -webkit-appearance: none;
  -moz-appearance: none;

  font-family: inherit;
  font-size: 1em;
}

.field__input:focus::-webkit-input-placeholder{
  color: var(--uiFieldPlaceholderColor);
  color:#ccc!important;
}

.field__input:focus::-moz-placeholder{
  color: var(--uiFieldPlaceholderColor);
  color:#ccc!important;
  opacity: 1;
}


.a-field{
  display: inline-block;
}

.a-field__input{ 
  display: block;
  box-sizing: border-box;
  width: 100%;
}

.a-field__input:focus{
  outline: none;
}


.a-field{
  --uiFieldHeight: var(--fieldHeight, 40px);  
  --uiFieldBorderWidth: var(--fieldBorderWidth, 2px);
  --uiFieldBorderColor: var(--fieldBorderColor);
  --uiFieldFontSize: var(--fieldFontSize, 1em);
  --uiFieldHintFontSize: var(--fieldHintFontSize, 1em);
  --uiFieldPaddingRight: var(--fieldPaddingRight, 15px);
  --uiFieldPaddingBottom: var(--fieldPaddingBottom, 15px);
  --uiFieldPaddingLeft: var(--fieldPaddingLeft, 0px);   
	    color: #cfd7df;
  position: relative;
  width: 100%;
  box-sizing: border-box;
  font-size: var(--uiFieldFontSize);
  padding-top: 20px;  
}

.a-field .a-field__input{
  height: var(--uiFieldHeight);
  padding: 0 var(--uiFieldPaddingRight) 0 var(--uiFieldPaddingLeft);
  border-bottom: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColor);  
}

.a-field .a-field__input::-webkit-input-placeholder{
  opacity: 0;
  transition: opacity 0s ease-out;
}

.a-field .a-field__input::-moz-placeholder{
  opacity: 0;
  transition: opacity 0s ease-out;
}

.a-field .a-field__input:not(:placeholder-shown) ~ .a-field__label-wrap .a-field__label{
  opacity: 1;
  bottom: calc(51% - -1.4em);
}

.a-field .a-field__input:focus::-webkit-input-placeholder{
  opacity: 1;
  transition-delay: 0.15s;
}

.a-field .a-field__input:focus::-moz-placeholder{
  opacity: 1;
  transition-delay: 0.15s;
}

.a-field .a-field__label-wrap{
  box-sizing: border-box;
  width: 100%;
  height: var(--uiFieldHeight);	
  pointer-events: none;
  cursor: text;
  position: absolute;
  bottom: -7px;
  left: 0;
  font-size:14px;
}

.a-field .a-field__label {
    position: absolute;font-size: 14px;
    left: var(--uiFieldPaddingLeft);
    bottom: calc(50% - .5em);
    line-height: 1;
    font-size: var(--uiFieldHintFontSize);
    pointer-events: none;
    transition-property: color, transform;
    
    transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
    transition: bottom .1s cubic-bezier(0.9,-0.15, 0.1, 1.15), opacity .1s ease-out;
    will-change: bottom, opacity;
}

.a-field .a-field__input:focus ~ .a-field__label-wrap .a-field__label{
  opacity: 1;
  bottom: var(--uiFieldHeight);
}


</style>

  
<style>

.example.example2 {
  background-color: #fff;
}

.example.example2 .field {
  position: relative;
  width: 100%;
  height: 50px;
  margin: 0 10px;
}

.example.example2 .field.half-width {
  width: 50%;
}

.example.example2 .field.quarter-width {
  width: calc(25% - 10px);
}

.example.example2 .baseline {
  position: absolute;
  width: 100%;
  height: 1px;
  left: 0;
  bottom: 0;
  background-color: #cfd7df;
  transition: background-color 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.example.example2 label {
  position: absolute;
  width: 100%;
  left: 0;
  bottom: 8px;
  color: #cfd7df;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  transform-origin: 0 50%;
  cursor: text;
  
}

.example.example2 .input {
  position: absolute;
  width: 100%;
  left: 0;
  bottom: 0;
  padding-bottom: 7px;
  color: #32325d;
  background-color: transparent;
}

.example.example2 .input::-webkit-input-placeholder {
  color: transparent;
  transition: color 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.example.example2 .input::-moz-placeholder {
  color: transparent;
  transition: color 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.example.example2 .input:-ms-input-placeholder {
  color: transparent;
  transition: color 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.example.example2 .input.StripeElement {
  opacity: 0;
  transition: opacity 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
  will-change: opacity;
}

.example.example2 .input.focused,
.example.example2 .input:not(.empty) {
  opacity: 1;
}

.example.example2 .input.focused::-webkit-input-placeholder,
.example.example2 .input:not(.empty)::-webkit-input-placeholder {
  color: #cfd7df;
}

.example.example2 .input.focused::-moz-placeholder,
.example.example2 .input:not(.empty)::-moz-placeholder {
  color: #cfd7df;
}

.example.example2 .input.focused:-ms-input-placeholder,
.example.example2 .input:not(.empty):-ms-input-placeholder {
  color: #cfd7df;
}

.example.example2 .input.focused + label,
.example.example2 .input:not(.empty) + label {
  color: #aab7c4;
  transform: scale(0.85) translateY(-25px);
  cursor: default;
}

.example.example2 .input.focused + label {
  color: #cfd7df;
  font-size:16px!important;
}

.example.example2 .input.invalid + label {
   color: #cfd7df;
  font-size:16px!important;
}

.example.example2 .input.focused + label + .baseline {
  background-color: #24b47e;
}

.example.example2 .input.focused.invalid + label + .baseline {
  background-color: #e25950;
}

.example.example2 input, .example.example2 button {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  outline: none;
  border-style: none;
}

.example.example2 input:-webkit-autofill {
  -webkit-text-fill-color: #e39f48;
  transition: background-color 100000000s;
  -webkit-animation: 1ms void-animation-out;
}

.example.example2 .StripeElement--webkit-autofill {
  background: transparent !important;
}

.example.example2 input, .example.example2 button {
  -webkit-animation: 1ms void-animation-out;
}

.example.example2 button {
 display: block;
    height: 45px;
	width:100%;
    margin: 5px 0px 0px !important;
    font-size: 14px !important;
    background-image: linear-gradient(to right top, #a82296, #b92097, #c91d98, #d91b97, #e91996) !important;
    border-radius: 0px !important;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    cursor: pointer;
}

.example.example2 input:active {
  background-color: #15957000;
}

.example.example2 .error svg {
  margin-top: 0 !important;
}

.example.example2 .error svg .base {
  fill: #e25950;
}

.example.example2 .error svg .glyph {
  fill: #fff;
}

.example.example2 .error .message {
  color: #e25950;
}

.example.example2 .success .icon .border {
  stroke: #abe9d2;
}

.example.example2 .success .icon .checkmark {
  stroke: #24b47e;
}

.example.example2 .success .title {
  color: #32325d;
  font-size: 16px !important;
}

.example.example2 .success .message {
  color: #8898aa;
  font-size: 13px !important;
}

.example.example2 .success .reset path {
  fill: #24b47e;
}    
    
</style>
<style>
@media only screen and (max-width: 800px) and (min-width: 0px)  {
	.container {
    padding-top: 20px;
    padding-bottom: 20px;
    border-radius: 5px;
    margin-top: 30px;
    }
.shadow-lg {
    box-shadow: 0 15px 30px 0 rgba(0,0,0,0.11), 0 5px 15px 0 rgba(0,0,0,0.08);
    display: table;width: 90%;
	}
.FRM-100{width:100%;}
}
@media only screen and (max-width: 5000px) and (min-width: 801px) {
#parent{
    padding-top: 10px;
    padding-bottom: 10px;
    border-radius: 5px;
    margin-top: 15px;
	    width: 100%;
    justify-content: center;
    display: flex;
   	}
#child {
    display: table-cell;
    vertical-align: middle;
}
.shadow-lg {
    box-shadow: 0 15px 30px 0 rgba(0,0,0,0.11), 0 5px 15px 0 rgba(0,0,0,0.08);
    display: table;width: 55%!important;
	}
}

.topnav .login-container {
    float: right;
}
  .top-heading{       
    text-align: center;
    font-size: 30px;
    color: #3c3c3c;
    font-weight: 400;
}
.card {
    padding: 5px;
    width: 500px;
    margin: 0 auto;
    float: none;
    display: -webkit-box;
    margin-bottom: 10px;
}
.card {
    padding: 5px;
    width: 500px;
    margin: 0 auto;
    float: none;
    display: -webkit-box;
    margin-bottom: 10px;
}
.bord-all{  margin: 5px;padding:6px;  border: 1px solid #ad2196;}
.bord-all-1{  margin: 5px;padding:8px 6px;  border: 1px solid #ad2196;}
.pay-bg{background-color: #e6e6e6;
       margin: 5px 0px 5px 5px;
    border-radius: 0px;
    padding: 10px;
}
.Prv{    color: #8c8c8c;
    font-size: 18px;
    font-weight: 500;}
.amt{    font-weight: 600;
    color: #333333;
    font-size: 17px;}
.plan{text-decoration: none;
    color: #0071eb;    font-size: 16px !important;
    font-weight: 600 !important;}
	.col-12{    padding: 0;
    margin-left: 5px;}
	

</style>
</head> 
 <script src="https://js.stripe.com/v3/"></script>
  <script src="index.js" data-rel-js></script>
<body> 
<div id="parent">
<div id="child" class="container shadow-lg">

	<div class="topnav">
	
  
		<div class="login-container">
			<a class="active" href="#home" style="text-decoration: none">Sign Out</a>
		</div>
	</div>
	
	<div class="col-md-12">
		<p class="top-heading">Edit Payment</p>
	</div>
	

	<!-- <div class="card" id="example-2"> -->
    <div class="card cell example example2" id="example-2">
		<form class="FRM-100" action="charge.php" method="post" id="payment-form">	
			<div class="col-md-12 bord-all">
				<label class="field a-field a-field_a1 page__field">
				  <input class="field__input a-field__input" placeholder="First Name">
				  <span class="a-field__label-wrap">
					<span class="a-field__label">First name</span>
				  </span>
				</label>			 
			</div>
			
			<div class="col-md-12 bord-all">
				<label class="field a-field a-field_a1 page__field">
				  <input class="field__input a-field__input" placeholder="Last Name">
				  <span class="a-field__label-wrap">
					<span class="a-field__label">Last name</span>
				  </span>
				</label>
				
			 
			</div>
 

			<!-- <div class="cell example example2" > -->
								 
					<div id="card-element">
					  
					  
						<div class="col-md-12 bord-all-1">
							<div class="field">
							  <div id="example2-card-number" class="input empty"></div>
							  <label for="example2-card-number" data-tid="elements_examples.form.card_number_label">Card number</label>
							
							</div>
						</div>
						<div class="col-md-12 bord-all-1">
							<div class="field">
							  <div id="example2-card-expiry" class="input empty"></div>
							  <label for="example2-card-expiry" data-tid="elements_examples.form.card_expiry_label">Expiration</label>
							
							</div>
						</div>
						<div class="col-md-12 bord-all-1">
							<div class="field">
							  <div id="example2-card-cvc" class="input empty"></div>
							  <label for="example2-card-cvc" data-tid="elements_examples.form.card_cvc_label">CVC</label>
							
							</div>
						</div>
						
						<div class="col-md-12 pay-bg">
							
								<div class="col-md-8">
									<p class="Prv">Premium Plan</p>
									<p class="amt">$800/mo</p>
								</div>
								<div class="col-md-4"><p class="plan">Change Plan</p></div>
							</div>
						
						
						<div class="col-md-12 col-12">
						<button type="submit" data-tid="elements_examples.form.pay_button">Pay $25</button>
						<div class="error" role="alert">
							  <span class="message"></span>
						</div>
					</div>
					</div>
					
			</div>
			
			
				  
		</form> 
</div>   
</div>   
 
  </div>  
      
      <script>
          (function() {
  'use strict';

  var elements = stripe.elements({
    fonts: [
      {
        cssSrc: 'https://fonts.googleapis.com/css?family=Source+Code+Pro',
      },
    ],
    // Stripe's examples are localized to specific languages, but if
    // you wish to have Elements automatically detect your user's locale,
    // use `locale: 'auto'` instead.
    locale: window.__exampleLocale
  });

  // Floating labels
  var inputs = document.querySelectorAll('.cell.example.example2 .input');
  Array.prototype.forEach.call(inputs, function(input) {
    input.addEventListener('focus', function() {
      input.classList.add('focused');
    });
    input.addEventListener('blur', function() {
      input.classList.remove('focused');
    });
    input.addEventListener('keyup', function() {
      if (input.value.length === 0) {
        input.classList.add('empty');
      } else {
        input.classList.remove('empty');
      }
    });
  });

  var elementStyles = {
    base: {
      color: '#32325D',
      fontWeight: 500,
      fontFamily: 'Source Code Pro, Consolas, Menlo, monospace',
      fontSize: '16px',
      fontSmoothing: 'antialiased',

      '::placeholder': {
        color: '#CFD7DF',
      },
      ':-webkit-autofill': {
        color: '#e39f48',
      },
    },
    invalid: {
      color: '#E25950',

      '::placeholder': {
        color: '#FFCCA5',
      },
    },
  };

  var elementClasses = {
    focus: 'focused',
    empty: 'empty',
    invalid: 'invalid',
  };

  var cardNumber = elements.create('cardNumber', {
    style: elementStyles,
    classes: elementClasses,
  });
  cardNumber.mount('#example2-card-number');

  var cardExpiry = elements.create('cardExpiry', {
    style: elementStyles,
    classes: elementClasses,
  });
  cardExpiry.mount('#example2-card-expiry');

  var cardCvc = elements.create('cardCvc', {
    style: elementStyles,
    classes: elementClasses,
  });
  cardCvc.mount('#example2-card-cvc');

  registerElements([cardNumber, cardExpiry, cardCvc], 'example2');
})();
      </script>
	  </body>
	  </html>
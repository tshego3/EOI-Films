<?php //custom-invoices.php

session_start();

echo(
//Required meta tags
"<!DOCTYPE html>".
"<html lang='en'>".
"<head>".
"<meta charset='utf-8'>".
"<meta name='description' content='Film and Photography'>".
"<meta name='keywords' content='HTML, CSS, jQuery, JavaScript and PHP'>".
"<meta name='author' content='Tshegofatso Given Ditau Motswagae'>".
"<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>" .

//Bootstrap, FontAwesome, then CSS
"<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>".
"<link rel='stylesheet' type='text/css' href='css/style.css'>".
"<link rel='stylesheet' type='text/css' href='css/fontawesome-all.css'>"
);

require_once 'includes/functions.php';

$userstr = ' (Guest)';

if (isset($_SESSION['user']))
{
$user     = $_SESSION['user'];
$loggedin = TRUE;
$userstr  = "$user";
}
else $loggedin = FALSE;

echo(
"<title>Custom invoices</title>".
"</head>".
"<body>"
);

if ($loggedin)
{
echo(
//Navbar
"<nav id='navbar' class='navbar fixed-top navbar-expand-lg navbar-dark'>".
"<a class='navbar-brand' href='index'>".
"<img src='#' width='30' height='30' class='d-inline-block align-top' alt=''> EOI Films</a>".
"<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>".
"<span class='navbar-toggler-icon'></span>".
"</button>".

"<div class='collapse navbar-collapse' id='navbarNav'>".
"<ul class='navbar-nav ml-auto'>".
"<li class='nav-item'>".
"<a class='nav-link' href='#'>$userstr</a>".
"</li>".
"<li class='nav-item'>".
"<a class='nav-link' href='invoices'>Invoices</a>".
"</li>".
"<li class='nav-item active'>".
"<a class='nav-link' href='custom-invoices'>Custom invoices<span class='sr-only'>(current)</span></a>".
"</li>".
"<li class='nav-item'>".
"<a class='nav-link' href='signout'>Sign out</a>".
"</li>".
"</ul>".
"</div>".
"</nav>"
);
}
else{
echo(
//Navbar
"<nav id='navbar' class='navbar fixed-top navbar-expand-lg navbar-dark'>".
"<a class='navbar-brand' href='index'>".
"<img src='#' width='30' height='30' class='d-inline-block align-top' alt=''> EOI Films</a>".
"<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>".
"<span class='navbar-toggler-icon'></span>".
"</button>".

"<div class='collapse navbar-collapse' id='navbarNav'>".
"<ul class='navbar-nav ml-auto'>".
"<li class='nav-item active'>".
"<a class='nav-link' href='signin'>$userstr<span class='sr-only'>(current)</span></a>".
"</li>".
"<li class='nav-item'>".
"<a class='nav-link' href='signin'>Sign in</a>".
"</li>".
"</ul>".
"</div>".
"</nav>".

//Content
"<div class='content'>".
"<div class='content-inside'>".

"<h1 class='mb-4 font-weight-light text-center'><strong>Access failure</strong></h1>".

"<p class='mb-4 font-weight-light text-center'>You must be signed in to view this page. You'll be redirected to sign in page, in 5 seconds.</p>".

"</div>".
"</div>".

"<div class='main'>".
"<script>".
"setInterval(function(){window.location.replace('signin')},5000);".
"</script>".
"</div>".

//footer
"<footer>".
"<div class='footer-content'>".
"<div class='footer-icons'>".
"<ul>".
"<li ><a class='nav-link px-2' href='https://www.instagram.com/eoifilms/' target='_blank'><i class='fab fa-instagram'></i></a></li>".
"<li ><a class='nav-link px-2' href='mailto:info@eoifilms.co.za'><i class='fa fa-envelope'></i></a></li>".
"</ul>".
"</div>".

"<p style='font-size:x-small;'>Copyright &copy; <script>document.write(new Date().getFullYear());</script> EOI Films. All Rights Reserved.</p>".
"</div>".
"</footer>".

//jQuery, then Popper.js, then Bootstrap JS and Others
"<script type='text/javascript' src='js/jquery-3.4.1.js'></script>".
"<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>".
"<script type='text/javascript' src='js/bootstrap.js'></script>".
"<script type='text/javascript' src='js/script.js'></script>".
"<script type='text/javascript' src='js/fontawesome-all.js'></script>".
"<script type='text/javascript' src='js/jspdf.min.js'></script>".

"</body>".
"</html>"
);
}

if (!$loggedin) die();

echo(
//Content
"<div class='content'>".
"<div class='content-inside'>".

//Custom Invoices form
"<h1 class='mb-4 font-weight-light text-center'><strong>Custom invoices</strong></h1>".
"<p class='text-center'>Click here to view the <a href='includes/Service-Packages.pdf' target='_blank'>Service Packages</a>.</p>".

"<div class='form-row'>".
"<div class='form-group col-md-6'>".
"<label for='inputName'>Name</label>".
"<input type='text' id='name' value=''/ name='Name97' placeholder='Name' class='form-control' maxlength='50' required autofocus>".
"</div>".

"<div class='form-group col-md-6'>".
"<label for='inputSurname'>Surname</label>".
"<input type='text' id='surname' value='' name='Surname' placeholder='Surname' class='form-control' maxlength='25' required/>".
"</div>".
"</div>".

"<div class='form-row'>".
"<div class='form-group col-md-6'>".
"<label for='inputNumber'>Number</label>".
"<input type='text' id='number' value='' name='Number' placeholder='+27' class='form-control' maxlength='12'/>".
"</div>".

"<div class='form-group col-md-6'>".
"<label for='inputEmail'>Email</label>".
"<input type='email' id='email' value='' name='Email' placeholder='@' class='form-control' maxlength='50'/>".
"</div>".
"</div>".

"<div class='form-row'>".
"<div class='form-group col-md-6'>".
"<label for='inputDescription'>Description</label>".
"<input type='text' id='inputDescription' value='' name='Description' placeholder='Description' class='form-control'/>".
"</div>".

"<div class='form-group col-md-3'>".
"<label for='inputQuantity'>Quantity</label>".
"<input type='number' id='quantity' value='' name='Quantity' placeholder='Quantity' class='inputC form-control' maxlength='25' min='1' required/>".
"</div>".

"<div class='form-group col-md-3'>".
"<label for='inputPrice'>Price</label>".
"<input type='number' id='inputPrice' value='' name='Price' placeholder='R0.00' class='inputC form-control'/>".
"</div>".
"</div>".

"<div class='form-row'>".
"<div class='form-group col-md-3'>".
"<label for='inputTransFee'>Transportation Fee</label>".
"<input type='number' id='transfee' value='' name='TransFee' placeholder='R0.00' class='inputC form-control' maxlength='25' required/>".
"</div>".

"<div class='form-group col-md-3'>".
"<label for='inputCurrency'>Currency</label>".
"<select id='inputCurrency' value='' class='inputC form-control' name='Currency' required/>".
"<option selected>R</option>".
"<option value='R'>R - Rand</option>".
"<option value='₿'>₿ - Bitcoin</option>".
"<option value='€'>€ - Euro</option>".
"<option value='£'>£ - Pound</option>".
"<option value='$'>$ - USD</option>".
"<option value='¥'>¥ - Yen</option>".
"</select>".
"</div>".

"<div class='form-group col-md-6'>".
"<label for='inputTotal'>Total</label>".
"<h3 class='mb-0 font-weight-light' id='total' name='Total'>R0.00</h3>".
"</div>".
"</div>".

"<button type='submit' id='buttonC' value='Submit' class='btn btn-dark col-md-1' name='Button'/>Send</button>".

"</div>".
"</div>"
);

echo(    
//footer
"<footer>".
"<div class='footer-content'>".
"<div class='footer-icons'>".
"<ul>".
"<li ><a class='nav-link px-2' href='https://www.instagram.com/eoifilms/' target='_blank'><i class='fab fa-instagram'></i></a></li>".
"<li ><a class='nav-link px-2' href='mailto:info@eoifilms.co.za'><i class='fa fa-envelope'></i></a></li>".
"</ul>".
"</div>".

"<p style='font-size:x-small;'>Copyright &copy; <script>document.write(new Date().getFullYear());</script> EOI Films. All Rights Reserved.</p>".
"</div>".
"</footer>".

//jQuery, then Popper.js, then Bootstrap JS and Others
"<script type='text/javascript' src='js/jquery-3.4.1.js'></script>".
"<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>".
"<script type='text/javascript' src='js/bootstrap.js'></script>".
"<script type='text/javascript' src='js/script.js'></script>".
"<script type='text/javascript' src='js/fontawesome-all.js'></script>".
"<script type='text/javascript' src='js/jspdf.min.js'></script>".

"</body>".
"</html>"
);

?>
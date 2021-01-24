<?php //signin.php

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

$userstr = 'Guest';

if (isset($_SESSION['user']))
{
$user     = $_SESSION['user'];
$loggedin = TRUE;
$userstr  = "$user";
}
else $loggedin = FALSE;

echo(
"<title>Sign in</title>".
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
"<li class='nav-item active'>".
"<a class='nav-link' href='#'>$userstr<span class='sr-only'>(current)</span></a>".
"</li>".
"<li class='nav-item'>".
"<a class='nav-link' href='invoices'>Invoices</a>".
"</li>".
"<li class='nav-item'>".
"<a class='nav-link' href='custom-invoices'>Custom invoices</a>".
"</li>".
"<li class='nav-item'>".
"<a class='nav-link' href='signout'>Sign out</a>".
"</li>".
"</ul>".
"</div>".
"</nav>".

"<div class='main'>".
"<script>".
"window.location.replace('invoices');".
"</script>".
"</div>"
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
"</nav>"
);
}

$error = $user = $pass = "";

if (isset($_POST['user']))
{
$user = sanitizeString($_POST['user']);
$pass = sanitizeString($_POST['pass']);

if ($user == "" || $pass == "")
$error = "<script class='error'>
alert('Not all fields were entered!');
</script>";
else
{
$result = queryMySQL("SELECT username, upassword FROM users
WHERE username='$user' AND upassword='$pass'");

if ($result->num_rows == 0)
{
$error = "<script class='error'>
alert('Username or Password is invalid!');
</script>";
}
else
{
$_SESSION['user'] = $user;
$_SESSION['pass'] = $pass;
die("
<script>
window.location.replace('invoices');
</script>
");
}
}
}

echo(
//Content
"<div class='content'>".
"<div class='content-inside'>".

//Sign in form
"<form method='post' action='signin'>$error".
"<h1 class='mb-4 font-weight-light text-center'><strong>Sign in</strong></h1>".

"<div class='form-row'>".
"<div class='form-group col-md-4 mx-auto'>".
"<label for='inputUsername'>Username</label>".
"<input type='text' class='form-control' placeholder='Username' maxlength='50' name='user' value='$user' required autofocus>".
"</div>".
"</div>".

"<div class='form-row'>".
"<div class='form-group col-md-4 mx-auto'>".
"<label for='inputPassword'>Password</label>".
"<input type='password' class='form-control' placeholder='Password' maxlength='10' name='pass' value='$pass' required>".
"</div>".
"</div>".

"<div class='form-row'>".
"<div class='form-group col-md-4 mx-auto'>".
"<button id='sign-in-btn' type='submit' class='btn btn-dark col-md-12' name='Send'>Sign in</button>".
"</div>".
"</div>".

"<p class='mt-3 font-weight-normal text-center'>Only available to EOI Films <strong>family.</strong></p>".
"</form>".

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
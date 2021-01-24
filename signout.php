<?php //signout.php

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
"<title>Sign out</title>".
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
"<li class='nav-item'>".
"<a class='nav-link' href='custom-invoices'>Custom invoices</a>".
"</li>".
"<li class='nav-item active'>".
"<a class='nav-link' href='signout'>Sign out<span class='sr-only'>(current)</span></a>".
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

if (isset($_SESSION['user']))
{
destroySession();
echo ("<div class='main'>
<script>
window.location.replace('signin');
</script>
</div>");
}
else echo ("<div class='main'>" .
"<script> 
window.location.replace('signin');
</script></div>");

echo(
//Content
"<div class='content'>".
"<div class='content-inside'>".

"<h1 class='mb-4 font-weight-light text-center'><strong>Sign out</strong></h1>".

"<p class='mb-4 font-weight-light text-center'>You'll be redirected to sign in page.</p>".

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
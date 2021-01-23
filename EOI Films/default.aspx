<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="default.aspx.cs" Inherits="EOI_Films._default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="description" content="Film and Photography" />
    <meta name="keywords" content="ASP.NET, C#, HTML, CSS, jQuery, JavaScript and SQLite." />
    <meta name="author" content="Tshegofatso Given Ditau Motswagae" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />

    <title>EOI Films</title>
</head>
<body>
    <form id="frmHome" runat="server">
        <!-- Navigation -->
        <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark">
          <div class="container">
            <a class="navbar-brand" href="#">EOI Films</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav <%--ms-auto--%> m-lg-3">
                <li class="nav-item">
                 <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
           
        <%-- Content --%>
       <section class="space"></section>

        <section class="section-one">
            <div class="row">
                <div class="col">
                    <h1 class="display-1">Display 1</h1>
                    <p class="h2">h2. Bootstrap heading</p>
                </div>
                <div id="img1" class="col">
                    
                </div>
            </div>
        </section>

        <%-- Footer --%>
<%--        <footer>
        <div class="footer-content">
        <div class="footer-icons">
        <ul>
        <li ><a class="nav-link px-2" href="https://www.instagram.com/eoifilms/" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <li ><a class="nav-link px-2" href="mailto:info@eoifilms.co.za"><i class="fa fa-envelope"></i></a></li>
        </ul>
        </div>
        <p style="font-size:x-small;">Copyright &copy; <script>document.write(new Date().getFullYear());</script> EOI Films. All Rights Reserved.</p>
        </div>
        </footer>--%>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/jquery-3.5.1.min.js" ></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>

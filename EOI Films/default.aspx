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
          <div class="container-fluid">
            <a class="navbar-brand" href="#">EOI Films</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-lg-3 ms-md-auto">
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
        <section class="section-1">
            <div class="col">
              1
            </div>
            <div class="col">
                <asp:Image ID="CoverImage" runat="server" />
            </div>
        </section>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/jquery-3.5.1.min.js" ></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>

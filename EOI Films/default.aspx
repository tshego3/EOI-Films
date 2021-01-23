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

    <!-- Bootstrap, CSS, then FontAwesome -->
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
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                 <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.instagram.com/eoifilms/" target="_blank">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about-text-h1">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact-text-h1">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
           
        <%-- Content --%>
       <section class="space"></section>

        <section class="section-one">
            <div class="row">
                <div id="banner-image" class="col">
                    <div class="container">
                        <h1 id="head-text-h1" class="display-1">Welcome to</h1>
                        <p id="head-text-p" class="h2">EOI Films</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="space"></section>

        <section class="section-two">
            <div class="container">
                <h1 id="about-text-h1" class="display-1">About Us</h1>
                <div class="row">
                    <div id="about-text" class="col">
                        <p id="about-text-p" class="h2">It all started in 2013 when Tshegofatso Motswagae and Trevor Rakgalakane started a photography collective and celled it Explore Our Imagination. The collective promise was "To serve the best photographs, make the best visual graphics, give the best digital content, offer the best value and stay current with the art trends." Today that photography collective is operating professionally with a slightly different name, providing photography and film services.</p>
                    </div>
                    <div id="img2" class="col"></div>
                </div>
            </div>
        </section>

        <section class="space"></section>

        <section class="section-three">
            <div class="container">
                <h1 id="contact-text-h1" class="display-1">Contact Us</h1>
                <div class="row">
                    <div id="img3" class="col"></div>
                    
                    
                    <div id="contact-text" class="col">
                        <p id="contact-text-p" class="h2">Please allow at least 24 hours for an inquiry response before attempting an additional one, we often experience high volumes of emails.</p>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <asp:Label ID="lblName" runat="server" Text="Name:"></asp:Label>
                                <asp:TextBox ID="txtName" class="form-control" placeholder="Name" maxlength="50" name="Name" required="required" runat="server"></asp:TextBox>
                            </div>

                            <div class="form-group col-md-5">
                                <asp:Label ID="lblSurname" runat="server" Text="Surname:"></asp:Label>
                                <asp:TextBox ID="txtSurname" class="form-control" placeholder="Surname" maxlength="25" name="Surname" required="required" runat="server"></asp:TextBox>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <asp:Label ID="lblNumber" runat="server" Text="Number:"></asp:Label>
                                <asp:TextBox ID="txtNumber" class="form-control" placeholder="+27" maxlength="12" name="Number" runat="server"></asp:TextBox>
                            </div>

                            <div class="form-group col-md-5">
                                <asp:Label ID="lblEmail" runat="server" Text="Email:"></asp:Label>
                                <asp:TextBox ID="txtEmail" TextMode="Email" class="form-control" placeholder="@" maxlength="50" name="Email" runat="server"></asp:TextBox>
                            </div>
                        </div>

                        <div class="form-group">
                            <asp:Label ID="lblMessage" runat="server" Text="Message:"></asp:Label>
                            <asp:TextBox ID="txtlblMessage" TextMode="MultiLine" class="form-control" placeholder="Message" maxlength="255" name="Message"  rows="5" required="required" runat="server"></asp:TextBox>
                        </div>

                        <asp:Button ID="btnContact" class="btn btn-dark col-md-3" runat="server" Text="Send" />

                        <p id="form-status"></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="space"></section>

        <%-- Footer --%>
         <footer>
            <div class="container">
                <div class="footer-icons">
                    <ul>
                        <li ><a class="nav-link px-2" href="https://www.instagram.com/eoifilms/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li ><a class="nav-link px-2" href="mailto:info@eoifilms.co.za"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <p style="font-size:x-small;text-align:center;">Copyright &copy; <script>document.write(new Date().getFullYear());</script> EOI Films. All Rights Reserved.</p>
            </div>
        </footer> 
    </form>

    <!-- Query, then Bootstrap JS and Others -->
    <script type="text/javascript" src="js/jquery-3.5.1.min.js" ></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js" ></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/fontawesome-all.js"></script>
</body>
</html>

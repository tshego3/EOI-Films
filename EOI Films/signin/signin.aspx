<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="signin.aspx.cs" Inherits="EOI_Films.signin" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <title>Sign in</title>
</head>
<body>
    <form id="form1" runat="server">
          <div class="container">

            <div class="con-center">
               <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
               <div class="col-sm-10">
                    <asp:TextBox ID="txtUname" runat="server" Class="form-control"></asp:TextBox>
               </div>
               <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
               <div class="col-sm-10">
                    <asp:TextBox ID="txtPass" runat="server" TextMode="Password" Class="form-control"></asp:TextBox>
               </div>
                <div class="col-sm-10 con-space">
                   <asp:Button ID="btnLogin" runat="server" Class="btn btn-success" Text="Login" OnClick="btnLogin_Click"/>
                    <br />
                    <asp:Label ID="lblErrorMessage" runat="server" ForeColor="Red" Text="Incorrect Username or Password!"></asp:Label>
               </div>
            </div>
        </div>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../js/jquery-3.5.1.min.js" ></script>
    <script src="../js/bootstrap.bundle.min.js" ></script>
</body>
</html>

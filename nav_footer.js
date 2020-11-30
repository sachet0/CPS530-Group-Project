var navbar = document.getElementById("navbar");
var footer = document.getElementById("footer");

if (navbar) {
    var navHtml = `
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- FontAwesome Icon -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <!-- styles CSS -->
        <link href="style.css" rel="stylesheet">
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <nav id="navbar" class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" id="logo" href="index.html">Pizza Time</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav" style="margin-left:auto; margin-right:50px">
                <li class="nav-item">
                    <a class="nav-link" href="about.html"> <i class="fas fa-address-card"></i> About Us </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="fas fa-pizza-slice"></i> Menu </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="location.html"> <i class="fas fa-location-arrow"></i> Locations </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-phone"></i> Contact </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.html"><i class="fas fa-shopping-cart"></i> Cart </a>
                </li>
            </ul>
        </div>
    </nav>
    `;
    navbar.innerHTML = navHtml;
}

if (footer) {
    var footerHTML = `
    <footer>
    <div class="card text-white bg-dark rounded-0">
        <div class="card-body">
          <h3 class="card-title bold"><strong>Pizza Time!</strong></h3>
          <address>
              123 Address St, Suite 100<br>
              Toronto, ON Canada<br>
              Phone: (123) 456-7890<br>
              Email: contact@pizzatime.com
            </address>
        </div>
        <div class="card-footer text-muted text-center">
          Copyright &copy; Pizza Time Inc. 2020
        </div>
      </div>
    </footer>
    `;
    footer.innerHTML = footerHTML;
}
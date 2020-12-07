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
    <title>Pizza Time</title>
</head>

<body>
    <!-- navbar loaded by js -->
    <div id="navbar"></div>

    <main class="container">
        <!-- Carousel -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" >
                  <img src="https://i.imgur.com/FNclzkp.png" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://i.imgur.com/xn9KQ1h.png" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://i.imgur.com/Ml92Nuq.png" class="d-block w-100 img-fluid" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
        <!-- jumbotron -->
        <div class="jumbotron text-light" id="backgroundjumobtron">
            <div class="container">
            <h1 class="display-4">Fresh Ingredients</h1>
            <p class="lead">Our products are made with garden-fresh ingredients purchased from local farms.</p>
            <hr class="my-3">
            <p>We support local farmers and local business during COVID</p>
            <a class="btn btn-primary btn-lg" href="about.html" role="button">Learn more</a>
            </div>
        </div>
    
        <br>
        <!-- Menus -->
        <div class="container-fluid">
            <h2>Popular Items</h2>
            <div class="row">
                
                <?php
                    // $connection = new mysqli("localhost", "root", "", "menu");
                    //$connection = new mysqli("localhost", "dgzhou", "GejAdkey", "dgzhou");
                    $connection = new mysqli("localhost", "sdawadi", "Erbyenta", "sdawadi");
                    if ($connection->connect_errno) {
                        printf("Connection Lost");
                        exit(0);
                    }
                    $sql = "SELECT * from menu";
                    $result = $connection->query($sql);
                    if ($result->num_rows > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result) and $i < 4) {
                            
                            printf('
                            <div class="col-lg-4 col-md-4 col-sm-6 mt-4">
                                <div class="card text-center">
                                    <img src="%s" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">%s</h5>
                                        <p class="card-text">%s</p>
                                        <p class="card-text">$%s</p>
                                        <a href="#" class="btn btn-dark">Add to cart</a>
                                    </div>
                                </div>
                            </div>', $row['url'], $row['desc'], $row['name'], $row['price']);
                            $i++;
                        }
                    $result->close(); 
                } 
                ?>
            </div>
        </div>

    </main>
    

    <!-- footer loaded by nav_footer.js -->
    <div id="footer"></div>
    <!-- the script the load the nav and footer above. -->
    <script src="nav_footer.js"></script>
    
 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
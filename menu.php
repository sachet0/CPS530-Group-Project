<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link href="style.css" rel="stylesheet">
    <title>Pizza Time</title>
</head>

<body>
    <!-- navbar loaded by js -->
    <div id="navbar"></div>
    
    <main class="container pt-5">
    <h2>Menu:</h2>
    <div class="row">

    <?php
        $connection = new mysqli("localhost", "sdawadi", "Erbyenta", "sdawadi");
        if ($connection->connect_errno) {
            printf("Connection Lost");
            // exit(0);
        }
        $sql = "SELECT * from menu";
        $result = $connection->query($sql);

        if ($result > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                printf('
                    <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                        <div class="card text-center">
                            <img src="%s" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">%s</h5>
                                <p class="card-text">$%s</p>
                                <a href="#" class="btn btn-dark">Add to cart</a>
                            </div>
                        </div>
                    </div>', $row['Url'], $row['NAME'], $row['Price']);
            }
            echo '
            </div>';
            // $result->close();
        }
        // $mysqli->close();
    ?> 
    </main>

    <div id="footer"></div>
    <script src="nav_footer.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

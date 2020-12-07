<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Font awesome css for the icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link href="style.css" rel="stylesheet">
    <title>Cart</title>
</head>

<body>
    <!-- navbar loaded by js -->
    <div id="navbar"></div>

    <main class="container">
        <h1>Your Order:</h1>
        <!-- Bootstrap table used -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="border-0 bg-light">
                            <div class="p-2 px-3 text-uppercase">Item</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Price</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Quantity</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Remove</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="border-0">
                            <div class="p-2">
                                <img src="https://storage.pizzapizza.ca/phx2/ppl_images/products/en/2x/SCBGT.png" alt=""
                                    width="70" class="img-fluid rounded shadow-sm">
                                <div class="ml-3 d-inline-block align-middle">
                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Chicken
                                            Pizza</a></h5>
                                </div>
                            </div>
                        </th>
                        <td class="border-0 align-middle"><strong>$9.49</strong></td>
                        <td class="border-0 align-middle"><strong>1</strong></td>
                        <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>

        <a href="checkout.html" class="btn btn-outline-dark">Continue to checkout</a>
        

        <!-- <?php
            $connection = new mysqli("localhost", "sdawadi", "Erbyenta", "sdawadi");
            //$connection = new mysqli("localhost", "dgzhou", "GejAdkey", "dgzhou");
            if ($connection->connect_errno) {
                printf("Connection Lost");
                exit(0);
            }
            $sql = "SELECT * from menu";
            $result = $connection->query($sql);
            if ($result->num_rows > 0) {
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
                        </div>', $row['url'], $row['name'], $row['price']);
                }
                echo '
                </div>';
                $result->close();
            }
        ?> -->
    </main>

    <!-- footer loaded by nav_footer.js -->
    <div id="footer" style="margin-top: 50px;"></div>
    <!-- the script the load the nav and footer above. -->
    <script src="nav_footer.js"></script>

<!-- for jquery and other js bootstrap scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
</script>
</body>

</html>
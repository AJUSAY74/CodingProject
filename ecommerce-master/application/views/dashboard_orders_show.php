<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Orders Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/modern-business.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="##">Dashboard</a>
                <a class="navbar-brand" href="/admins/dashboard_orders">Orders</a>
                <a class="navbar-brand" href="/admins/dashboard_products">Products</a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="##">Log off</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-md-4 text-left">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </span>
                </div>
            </div>
        </div>
        
        <br>
        <div class='row'>
            <div class='col-md-3' style="border: 2px solid black">
                <h4>Order ID: [#1]</h4>
                <h5>Customer shipping info</h5>
                <p>Name:</p>
                <p>Address:</p>
                <p>City</p>
                <p>States</p>
                <p>Zip</p>

                <h5>Customer billing info</h5>
                <p>Name:</p>
                <p>Address:</p>
                <p>City</p>
                <p>States</p>
                <p>Zip</p>

            </div>
            <div class='col-md-8'>
                <table class="table">
                  <thead class="thead-inverse">
                    <tr class='text-center'>
                      <th>Order ID</th>
                      <th>Item</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>[ID]</td>
                      <td>[Name]</td>
                      <td>[00/00/0000]</td>
                      <td>[Billing Address]</td>
                      <td>[Total]</td>
                    </tr>
                    <tr>
                      <td>[ID]</td>
                      <td>[Name]</td>
                      <td>[00/00/0000]</td>
                      <td>[Billing Address]</td>
                      <td>[Total]</td>
                    </tr>
                  </tbody>
                </table>
                <div class="row" id="box1">
                    <div class='col-md-4' style="background-color:green">
                        <h4>Status:[Shipped]</h4>
                    </div>
                    <div class='col-md-4'>
                        
                    </div>
                    <div class='col-md-4' style="border: 2px solid black">
                        <p>Sub total: $</p>
                        <p>Shipping: $</p>
                        <p>Total Price: $</p>
                    </div>
                </div>
            </div>
        </div>
    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>

    
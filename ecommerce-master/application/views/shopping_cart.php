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
                <a class="navbar-brand" href="##">NFL Jersey Store</a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="##">Shopping Cart [###]</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
    <!-- Page Content -->
    <div class="container">
        <div class='row'>
            <div class='col-12'>
                <table class="table">
                  <thead class="thead-inverse">

                    <tr class='text-center'>
                      <th>Item</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>[Item]</td>
                      <td>[Price]</td>
                      <td>[Quantity]</td>
                      <td>[Total]</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>[Item]</td>
                      <td>[Price]</td>
                      <td>[Quantity]</td>
                      <td>[Total]</td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        
        <div class="row">
            <div class='col-sm-10'></div>
            <div class="col-sm-2">
                Total: $[ ]
            </div>
        </div><br>

        <div class="row"> 
            <div class='col-sm-9'></div>
            <div class="col-sm-3">
                <a class="btn btn-default btn-block" style="background-color:green" href="#">Continue Shopping</a>
            </div>
        </div><br>

        <div class='row'>
            <h3>Shipping Information</h3>
        </div><br>

    <form action="##" method="post" name="shopping_cart">
        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    First Name:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="first_name" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    Last Name:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="last_name" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    Address:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="address1" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    Address 2:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="address2" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    City:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="city" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    State:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="state" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    Zipcode:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="zipcode" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row'>
            <h3>Billing Information</h3>
        </div>
        <div class='row'>
            <input type="checkbox" name="main" value="main"> Same as Shipping
        </div><br>
        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    First Name:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="first_name" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    Last Name:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="last_name" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    Address:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="address1" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    Address 2:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="address2" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    City:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="city" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    State:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="state" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    Zipcode:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="zipcode" aria-invalid="false">
                </div>
            </div>
        </div><br>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    Card:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="card" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    Security Code:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="security_code" aria-invalid="false">
                </div>
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-2 text-right'>
                    Expiration:
                </div>
                <div class='col-sm-2'>
                    <input type="text" class="form-control" id="expiration_month" aria-invalid="false" placeholder="(mm)">
                </div>
                <div class='col-sm-1'>-</div>
                <div class='col-sm-2'>
                    <input type="text" class="form-control" id="expiration_year" aria-invalid="false" placeholder="(year)">
                </div>
            </div>
        </div><br>
    </form>

        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-1">
                <a class="btn btn-default btn-block" style="background-color:#4286F4" href="#">Pay</a>
            </div>
        </div><br>
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
     <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_live_6JU06Gs7Hw1IMkl8XVI5NEyw"
        data-amount="{{totalcard}}"
        data-name="Granny Zone"
        data-description="Checkout"
        data-image="https://cdn4.iconfinder.com/data/icons/avatar-and-user/87/Avatar_person_user_character_man_woman_human-13-512.png"
        data-locale="auto">
      </script>
</body>
</html>

    
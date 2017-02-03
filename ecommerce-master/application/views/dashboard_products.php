<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Products Page</title>

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
                <a class="navbar-brand" href="/orders">Orders</a>
                <a class="navbar-brand" href="/products">Products</a>

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

            <div class="col-md-2 pull-right text-right">
                <a class="btn btn-default btn-block" href="#">Add new product</a>
            </div>
        </div>

        <br>
        <div class='row'>
            <div class='col-12'>
                <table class="table">
                  <thead class="thead-inverse">

                    <tr class='text-center'>
                      <th>Picture</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Inventory Count</th>
                      <th>Quantity Sold</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img alt="64x64" class="media-object" src="/assets/images/default_product.jpeg" data-holder-rendered="true" style="width: 64px; height: 64px;">
                      </td>
                      <td>[ID]</td>
                      <td>[Name]</td>
                      <td>[Inventory Count]</td>
                      <td>[Quantity Sold]</td>
                      <td>
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bd-example-modal-lg" >Edit</button>
                            <button type="button" class="btn btn-default">Delete</button>
                        </div>
                    </td>
                    </tr>
                  </tbody>
                </table>



<!-- Large modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

        <div class='text-center'>
            <h2>Edit Product #[id]</h2>
        </div>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-4 text-right'>
                    Name :
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="name" aria-invalid="false">
                </div>
            </div>
        </div><br>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-4 text-right'>
                    Description :
                </div>
                <div class='col-sm-6'>
                    <textarea rows="5" cols="100" class="form-control" id="description" maxlength="999" style="resize:none" aria-invalid="false"></textarea>
                </div>
            </div>
        </div><br>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-4 text-right'>
                    Price:
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="price" aria-invalid="false">
                </div>
            </div>
        </div><br>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-4 text-right'>
                    Categories :
                </div>
                <div class='col-sm-6'>
                    <select>
                        <option value=1>Category #1</option>
                        <option value=2>Category #2</option>
                        <option value=3>Category #3</option>
                    </select>
                </div>
            </div>
        </div><br>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-4 text-right'>
                    or add new category
                </div>
                <div class='col-sm-6'>
                    <input type="text" class="form-control" id="add_new_category" aria-invalid="false">
                </div>
            </div>
        </div><br>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-4 text-right'>
                    Images :
                </div>
                <div class='col-sm-6'>
                    <div class="col-md-3 pull-left text-left">
                     <?php echo form_open_multipart('admins/upload') ?>
                     <input type="file" name="userfile" size="50">
                     <input type="submit" value="upload">
                    </form>
                    </div>
                </div>
            </div>
        </div><br>

        <div class='row text-center'>
            <div class='col-9'>
                <div class='col-sm-4'></div>
                <div class='col-sm-6'>
                    <div class='row'>
                        <div class='col-sm-3'>
                            <img alt="30x30" class="media-object" src="/assets/images/default_product.jpeg" data-holder-rendered="true" style="width: 30px; height: 30px;">
                        </div>
                        <div class='col-sm-3'>
                            [image.jpg]
                        </div>
                        <div class='col-sm-3'>
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </div>
                        <div class='col-sm-3'>
                            <input type="checkbox" name="main" value="main"> main
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-3'>
                            <img alt="30x30" class="media-object" src="/assets/images/default_product.jpeg" data-holder-rendered="true" style="width: 30px; height: 30px;">
                        </div>
                        <div class='col-sm-3'>
                            [image.jpg]
                        </div>
                        <div class='col-sm-3'>
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </div>
                        <div class='col-sm-3'>
                            <input type="checkbox" name="main" value="main"> main
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-3'>
                            <img alt="30x30" class="media-object" src="/assets/images/default_product.jpeg" data-holder-rendered="true" style="width: 30px; height: 30px;">
                        </div>
                        <div class='col-sm-3'>
                            [image.jpg]
                        </div>
                        <div class='col-sm-3'>
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </div>
                        <div class='col-sm-3'>
                            <input type="checkbox" name="main" value="main"> main
                        </div>
                    </div><br>
                    <div class="row" style="margin-bottom:20px">
                    <div class='col-sm-4'>
                        <a class="btn btn-default btn-block" href="#">Cancel</a>
                    </div>
                    <div class='col-sm-4'>
                        <a class="btn btn-default btn-block" href="#">Preview</a>
                    </div>
                    <div class='col-sm-4'>
                        <a class="btn btn-default btn-block" href="#">Updated</a>
                    </div>
                </div>
                </div>
            </div>
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

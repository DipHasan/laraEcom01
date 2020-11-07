<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Eommerce Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="wrapper">
    {{--Navigation--}}
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container">

        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Products" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
            </form>
        </div>

        </div>
    </nav>
    <!-- End Navbar Part -->

    <!-- Start Sidebar + Content -->

    <div class="container margin-top-20">
        <div class="row">
            <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">First item</a>
                <a href="#" class="list-group-item list-group-item-action">Second item</a>
                <a href="#" class="list-group-item list-group-item-action">Third item</a>
             </div>
            </div>
            <div class="col-md-8">
                <div class="widget">
                    <h3>Featured Products</h3>
                    <div class="row">

                        <div class="col-md-3">
                         <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'galaxy.webp')}}" alt="Card image">
                                <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">$500</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                         </div>
                        </div>

                        <div class="col-md-3">
                         <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'galaxy.webp')}}" alt="Card image">
                                <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">$500</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                         </div>
                        </div>

                        <div class="col-md-3">
                         <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'galaxy.webp')}}" alt="Card image">
                                <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">$500</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                         </div>
                        </div>

                        <div class="col-md-3">
                         <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'galaxy.webp')}}" alt="Card image">
                                <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">$500</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                         </div>
                        </div>

                        <div class="col-md-3">
                         <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'galaxy.webp')}}" alt="Card image">
                                <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">$500</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                         </div>
                        </div>

                        <div class="col-md-3">
                         <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'galaxy.webp')}}" alt="Card image">
                                <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">$500</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                         </div>
                        </div>

                        <div class="col-md-3">
                         <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'galaxy.webp')}}" alt="Card image">
                                <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">$500</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                         </div>
                        </div>

                        <div class="col-md-3">
                         <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'galaxy.webp')}}" alt="Card image">
                                <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">$500</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                         </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Sidebar + Content -->

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

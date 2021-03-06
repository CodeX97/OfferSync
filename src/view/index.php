<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to OfferSync !</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="/">OfferSync</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="basicExampleNav">
                    <ul class="navbar-nav mr-auto smooth-scroll">
                    </ul>

                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#LoginForm"><i class="fas fa-sign-in-alt mr-2"></i>LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Register"><i class="fas fa-user-plus mr-2"></i>SIGN UP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Login -->
        <div class="modal fade " id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!-- action="/LoginController" -->
            <!-- <form id="loginform"  method="POST"> -->
            <div class="modal-dialog loginform" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Sign In</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" id="username" name="username" class="form-control" required>
                            <label for="defaultForm-email">Username</label>
                        </div>

                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="password" name="password" class="form-control" required>
                            <label for="defaultForm-pass">Password</label>
                        </div>
                        <span id="login-check" class="red-text">
                            <P class="text-center"></P>
                        </span>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-outline-black" name="submit" id="sbtn">Login<i class="fas fa-chevron-circle-right ml-2 mt-1"></i></button>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <a href="/ResetPw">Reset Password</a>
                    </div>
                </div>
            </div>
            <!-- </form> -->
        </div>
        <!-- /Login -->

        <div id="intro" class="view ">
            <div class="mask rgba-black-strong">
                <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                    <div class="row d-flex justify-content-center text-center">

                        <div class="col-md-10">

                            <h2 class="display-4 font-weight-bold white-text  mb-2">PAY LESS</h2>
                            <h2 class="display-4 font-weight-bold white-text  mb-2">EAT MORE</h2>
                            <hr class="hr-light">
                            <h4 class="white-text my-4">Alone with offer for two ?</h4>
                            <h4 class="white-text my-4">You've come to the right place. Search for hundres of offers
                                or
                                post an offer yourself.</h4>
                            <a class="btn btn-outline-white" href="/search">Search Offer<i class="fas fa-search ml-2"></i></a>
                            <a class="btn btn-outline-white" href="/postOffer">Post an Offer<i class="far fa-paper-plane ml-2"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <footer class="page-footer font-small unique-color-dark">
        <div class="container mb-4 text-center text-md-left">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                </div>
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <hr class="deep-purple accent-2 mb-1 mt-2 d-inline-block mx-auto" style="width: 60px;">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Syncdicate</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>OfferSync is a registered trademark of Syncdicate Inc.</p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3">
                    <hr class="deep-purple accent-2 mb-1 mt-2 d-inline-block mx-auto" style="width: 60px;">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Contact</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i>CSE Dept, UoM</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> feedback@offersync.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                </div>
            </div>
        </div>

        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="/"> OfferSync.com</a>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!-- Chcekc Username and Password  -->
    <script type="text/javascript" src="js/checking.js"></script>

    <script>
        document.getElementById('sbtn').addEventListener("click", function() {
            var u = $(username).val();
            var p = $(password).val();
            $.ajax({
                type: "POST",
                url: "/LoginController",
                data: {
                    username: u,
                    password: p
                },
                success: function(data) {
                    if (data == "Login Success !") {
                        window.location.href = "/";
                    } else {
                        $('#login-check').html(data);
                    }
                }

            })
        });

        document.getElementById('password').addEventListener("keypress", function(event) {
            if (event.keyCode == 13) {
                var u = $(username).val();
                var p = $(password).val();
                $.ajax({
                    type: "POST",
                    url: "/LoginController",
                    data: {
                        username: u,
                        password: p
                    },
                    success: function(data) {
                        if (data == "Login Success !") {
                            window.location.href = "/";
                        } else {
                            $('#login-check').html(data);
                        }
                    }

                })
            }
        });
    </script>
</body>

</html>
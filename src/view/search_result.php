<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OfferSync</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="css/SearchResultStyle.css" rel="stylesheet">

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="/"><i class="fas fa-arrow-circle-left mr-2"></i>OfferSync</a>
                <div class="collapse navbar-collapse " id="Nav">
                    <ul class="navbar-nav mr-auto smooth-scroll">
                    </ul>
                </div>
            </div>
        </nav>

        <div id="intro" class="view">
            <div class="mask">
                <div class="container-fluid d-flex align-items-center justify-content-center h-50">
                    <div class="row search d-flex col-lg-4 justify-content-center text-center">
                    
                            <div class="container mr-2 mt-2 mb-2">
                                    <form action="/OfferController_Search" method="post" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-3 mt-1 col-sm-12 p-0">
                                                        <input name= "Restaurant" type="text" class="form-control search-slt" placeholder="Restaurant">
                                                    </div>
                                                    <div class="col-lg-4 col-md-3 mt-1 col-sm-12 p-0">
                                                        <select name = "City" class="form-control search-slt" id="exampleFormControlSelect1">
                                                            <option>Select City</option>
                                                            <option>Colombo</option>
                                                            <option>Galle</option>
                                                            <option>Gampaha</option>
                                                            <option>Kaluthara</option>
                                                            <option>Negambo</option>
                                                            <option>Kandy</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-11  p-0">
                                                        <button class="btn btn-outline-black" type="submit" name="submit">Search</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    

    print "<h2>" . $offer. "</h2>";
    <footer class="page-footer font-small unique-color-dark">
        <div class="footer-copyright fixed-bottom text-center py-3">© 2019 Copyright:
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
    <script type="text/javascript" src="js/jquery.steps.js"></script>
</body>

</html>
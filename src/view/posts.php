<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profile</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/requests.css" rel="stylesheet">
</head>

<body>
    <div class="side-nav">
        <div class="list-group ">
            <a href="/" class="sideb list-group-item list-group-item-action waves-effect"><i class="fas fa-arrow-circle-left mr-2"></i>Home</a>
            <div class="space"></div>
            <a href="/profile" class="sideb list-group-item list-group-item-action waves-effect">
                <i class="fas fa-user mr-3"></i>Profile</a>
            <a href="#" class="sideb list-group-item  list-group-item list-group-item-action waves-effect">
                <i class="fas fa-hamburger mr-3"></i>My Offers</a>
            <a href="/requests" class="sideb list-group-item list-group-item-action waves-effect">
                <i class="fas fa-user mr-3"></i>Requests</a>
        </div>

        <a href="/Logout" class="sideb list-group-item list-group-item-action waves-effect">
            <i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
    </div>


    <div class="bg">
        <div class="container">
            <div class="col-12">
                <div class="row-9">
                    <div id="result"></div>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="page-footer fixed-bottom font-small black">
        <div class="footer-copyright  text-center py-3">© 2019 Copyright:
            <a href="/"> OfferSync.com</a>
        </div>
    </footer>
    <!--/.Footer -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!-- Initializations -->
    <script>
        function load_offers() {
            $.post({
                url: "/myoffers",
                data: {
                    Username: null
                },
                success: function (data) {
                    $('#result').html(data);
                }
            });
        }
        load_offers();
    </script>

</body>

</html>
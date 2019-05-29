<?php
require $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/classes/Offer.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Database.php';

function Post_Offer($restaurant, $offer, $price, $restaurantbranch, $date, $city, $gender)
{
    $username = $_COOKIE['Username'];
    $database = Database::getDbConnection();
    $offers = $database->PostOffer($username, $restaurant, $offer, $price, $restaurantbranch, $date, $city, $gender);
    header("location:/");
}

function GetPosts($username)
{

    $database = Database::getDbConnection();
    $offers = $database->GetPosts($username);
    require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/postview.php';
    foreach ($offers as $offer) {
        echo "Username: " . $offer["Username"] . "     ----- Restaurant: " . $offer["Restaurant"] . "    ----- Offer: " . $offer["Offer"] .  "    ----- Price: " . $offer["Price"];
        echo "<br>";
    }
}

function SearchOffers()
{
    if (isset($_POST["searchText"])) {
        $search = $_POST["searchText"];
        $connection = Database::getDBconnection();
        $username = $_COOKIE['Username'];
        $result = $connection->FetchOffer($search,$username);
        $count = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/SearchResult.php';
        }
    }
}

function SendRequests($receiver, $id)
{
    $sender = $_COOKIE['Username'];
    $database = Database::getDbConnection();
    if (!$database->AlreadySent($sender, $id)) {
        $database->InsertRequest($sender, $receiver, $id);
        echo "success";
    } else {
        echo "failed";
    }
}

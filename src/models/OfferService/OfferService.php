<?php
require $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/classes/Offer.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Database.php';

function Post_Offer($restaurant, $offer, $price, $restaurantbranch, $date, $city, $gender)
{
    $database = Database::getDbConnection();
    $username = $_COOKIE['Username'];
    $Offer = OfferFactory::create($username, $city, $offer, $restaurant, $price, $gender, $restaurantbranch, $date);
    $Offer->Post($database);
}


function SearchOffers()
{ 
    if (isset($_POST["restaurant"])) {
        $search = $_POST["restaurant"];
        $connection = Database::getDBconnection();
        if (isset($_COOKIE['Username'])) {
            $username = $_COOKIE['Username'];
        } else {
            $username = null;
        }

        $result = $connection->FetchOfferR($search, $username);
        $count = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/SearchResult.php';
        }
    }
    if (isset($_POST["city"])) {
        $search = $_POST["city"];
        $connection = Database::getDBconnection();
        if (isset($_COOKIE['Username'])) {
            $username = $_COOKIE['Username'];
        } else {
            $username = null;
        }

        $result = $connection->FetchOfferC($search, $username);
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

function DeleteOff($id)
{
    $sender = $_COOKIE['Username'];
    $database = Database::getDbConnection();
    $database->DeleteOffers($sender, $id);
}

function GetPosts($username)
{
    $connection = Database::getDBconnection();
    $result = $connection->GetPosts($username);
    $count = mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/postview.php';
    }
}

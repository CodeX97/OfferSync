<h3 class="lead text-white"><strong class="text-white"> <?= $count ?> </strong> results were found for the search for
    <strong class="text-white"> <?= $search ?> </strong></h3>
</hgroup>
<section class="col-xs-12 col-sm-6 col-md-12">

    <?php
    $count = 0;
    while ($row = mysqli_fetch_array($result)) :
        if ($count == 0) : ?>
            <div class="card-deck">

            <?php endif;
        $count += 1; ?>
            <div class="card">
                <img src="/img/header2.jpg" style="width:100%">

                <form id="form1" action="/AccountView" method="POST">
                    <a href="javascript:submitform()">
                        <h3> <?= $row['Username'] ?> </h3>
                    </a>
                    <a class="btn sm black-text">View Profile</a>
                    <input type="hidden" name="Username" value="<?= $row['Username'] ?>">
                </form>
                <p class="city"><i class="fas fa-map-marker-alt"></i> <span class="ml-2"><?= $row["City"] ?></span></p>
                <p><i class="fas fa-map-marker-alt mr-2"></i><?= $row["Restaurant"] ?></p>
                <p><i class="fas fa-utensils mr-2"></i><?= $row["Offer"] ?></p>
                <p><i class="fas fa-hand-holding-usd mr-2"></i>Rs. <?= $row["Price"] ?></p>
                <p><a class="btn btn-outline-black like" style="cursor: pointer;" onclick="SendRequest(<?= '\'' . $row['Username'] . '\'' ?>)">Send Request
                        <i class="far fa-paper-plane ml-2"></i></a></p>

            </div>
            <br>

            <?php
            if ($count == 3) :
                $count = 0; ?>
            </div>
            <br>
        <?php endif;
endwhile ?>
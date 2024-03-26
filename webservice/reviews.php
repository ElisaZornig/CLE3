<?php

include "db.php";

/** @var array $db */

/**
 * @param $id
 */

print_r(returnAllReviews($db));
function returnSingleReview($id){

}

function returnAllReviews($db){
    $reviews = "SELECT * FROM `reviews`";
    $result = mysqli_query($db, $reviews)
    or die('Error ' . mysqli_error($db) . ' with query ' . $reviews);
    $reviews = [];
    while ($row = mysqli_fetch_assoc($result))
        $reviews[] = $row;

    return $reviews;
}


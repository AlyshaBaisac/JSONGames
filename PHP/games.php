<?php

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");

$Games = array(
    array(
        "Title" => "Resident Evil: Village",
        "Developer" => "CAPCOM Co., Ltd.",
        "Publisher" => "CAPCOM Co., Ltd.",
        "Release_Date" => " 7 May, 2021 ",
        "Category" => "First Person Shooter",
        "Image" => "img/resident.jpg" 
    ),

    array(
        "Title" => "ELDEN RING ",
        "Developer" => "FromSoftware Inc.",
        "Publisher" => "FromSoftware Inc.",
        "Release_Date" => " 25 Feb, 2022",
        "Category" => "Role Playing",
        "Image" => "img/elden.jpg"
    ),

    array(
        "Title" => "League Of Legends",
        "Developer" => "Riot Games",
        "Publisher" => "Riot Games",
        "Release_Date" => " 25 Feb, 2022",
        "Category" => "MOBA",
        "Image" => "img/leagueoflegends.jpg" 
    ),

    array(
        "Title" => "The Jackbox Party Pack",
        "Developer" => "Jackbox Games, Inc.",
        "Publisher" => "Jackbox Games, Inc.",
        "Release_Date" => " 27 Nov, 2014 ",
        "Category" => "Puzzlers And Party",
        "Image" => "img/jackbox.jpg" 
    ),

   array(
        "Title" => "Little Nightmares",
        "Developer" => "Tarsier Studios",
        "Publisher" => "BANDAI NAMCO Entertainment",
        "Release_Date" => " 11 Feb, 2021",
        "Category" => "Platformer",
        "Image" => "img/littlenightmare.jpg" 
    )
);

echo json_encode(array("Games" => $Games));

?>

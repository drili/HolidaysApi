<?php
    // *** Prereq
    $root_directory = $_SERVER['DOCUMENT_ROOT'] . "/APIS\HolidaysAPI";

    // *** Composer requires
    require 'vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable($root_directory);
    $dotenv->load();

    $api_key = $_ENV["API_KEY"];
    $holiday_api = new \HolidayAPI\Client(['key' => $api_key]);

    try {
        $holidays_workdays = $holiday_api->workdays([
            "country" => "DK",
            "year" => 2022,
            "start" => "2022-01-01",
            "end" => "2022-01-30"
        ]);

        echo "<pre>";
            var_dump($holidays_workdays);
        echo "</pre>";
    } catch (Exception $e) {
        echo "<pre>";
            var_dump($e);
        echo "</pre>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HolidaysAPI</title>
</head>
<body>
    <h1>Holidays API</h1>


</body>
</html>
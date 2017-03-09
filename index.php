<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hifidb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    ?>

<html>

<head>
    <meta charset="utf-8">
    <title>HIFI - Velkommen</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
</head>

<body>

        <?php

        include'includes/nav.php';

        if(isset($_GET['p'])) {
            if ($_GET['p']);

        }




        ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>

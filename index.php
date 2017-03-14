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



        <?php
        include 'includes/nav.php';

        if(isset($_GET['p'])){
            $page = 'includes/' . $_GET['p'] . '.php';
            if(file_exists($page)){
                include $page;
            } else {
                //404
                header('Location: index.php?p=home');
            }
        } else {
            header('Location: index.php?p=home');
        }
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>

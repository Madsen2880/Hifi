    <?php require_once 'mysqlconfig.php'; ?>



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

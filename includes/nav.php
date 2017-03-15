
<html>

<head>
    <meta charset="utf-8">
    <title>HIFI - Velkommen</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
</head>

<body>

<header>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php?p=home" class="navbar-brand">HIFI</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <nav class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?p=home">Forside</a></li>
                    
                <?php
				$sql = "SELECT categorie_id, categorie_name FROM categories";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
                    echo '<li><a href="index.php?p=products&id='.$row['categorie_id'].'">'.utf8_encode($row['categorie_name']).'</a></li>';
					}
				}
                ?>

                    <li><a href="index.php?p=contact">Kontakt</a></li>
            </nav>
        </div>
    </div>
   
</header>

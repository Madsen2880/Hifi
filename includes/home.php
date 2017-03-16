


<aside id="myCarousel" class="container carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <section class="carousel-inner">
        <figure class="item active">
            <img src="img/slide1.jpg" alt="First slide">
            <figcaption class="carousel-caption">
                <h1>Parasound Classic</h1>
                <p>bh etue tisi blandiatue dolum dolessim ea feummy nostrud delendi pissequ ametum in etuerit etue tatiscipit nos ex el init lore tatet do conullum diamet venim dolore facidunt dit doluptat.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Læs mere</a></p>
            </figcaption>
        </figure>
        <figure class="item">
            <img src="img/slide2.jpg" alt="First slide">
            <figcaption class="carousel-caption">
                <h1>Parasound Classic</h1>
                <p>bh etue tisi blandiatue dolum dolessim ea feummy nostrud delendi pissequ ametum in etuerit etue tatiscipit nos ex el init lore tatet do conullum diamet venim dolore facidunt dit doluptat.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Læs mere</a></p>
            </figcaption>
        </figure>
        <figure class="item">
            <img src="img/slide3.jpg" alt="First slide">
            <figcaption class="carousel-caption">
                <h1>Parasound Classic</h1>
                <p>bh etue tisi blandiatue dolum dolessim ea feummy nostrud delendi pissequ ametum in etuerit etue tatiscipit nos ex el init lore tatet do conullum diamet venim dolore facidunt dit doluptat.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Læs mere</a></p>
            </figcaption>
        </figure>
    </section>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</aside>

<section class="container heading">
    <article class="row">
        <section class="col-lg-12">
            <h3>Velkommen</h3>
        </section>
    </article>
    <hr class="featurette-divider">
    <article class="row featurette">
        <section class="col-md-7">
            <h2 class="featurette-heading">Lorem ipsum.
                <span class="text-muted">dolor sit amet.</span>
            </h2>
            <p class="lead">Consectetur adipiscing elit. Nunc sollicitudin ligula ut faucibus congue. Etiam arcu nibh, venenatis non ligula vel, consequat euismod eros. Vestibulum in aliquet leo. Maecenas ut lacinia justo. Duis sagittis imperdiet tellus a vulputate. Duis scelerisque nunc tortor.</p>
        </section>
        <section class="col-md-5">
            <img class="featurette-image img-responsive" src="img/forside.jpg">
        </section>
    </article>
    <hr class="featurette-divider">
    

                    <?php
                        $sql = "SELECT news.news_id, news.news_heading, news.news_text, news.news_created, pictures.picture_name FROM news
                                LEFT JOIN pictures ON news.fk_newspic_id = pictures.picture_id
                                WHERE news.news_id = news_id";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()){
				
                
                   echo'<article>
                    <section class="row">
                        <div class="col-xs-18 col-sm-6 col-md-3">
                        <div class="thumbnail">
                        <img src="prod_image/'.$row['picture_name'].'" alt="">
                            <div class="caption">
                            <h4>'.$row['news_heading'].'</h4>
                            <p class="text-muted">'.$row['news_created'].'</p>
                            <p>';
                            echo strlen($row['news_text']) >= 150 ? substr($row['news_text'], 0, 150) : $row['news_text'];
                            echo '</p>
                        <p><a href="#" class="btn btn-default btn-xs" role="button">Læs mere</a></p>
                    </div>
                </div>
            </div>';
				
				}
			}
		?>
</section>
</article>

    <footer>
        <p>© Hi-fi Netbutikken
        </p>

        <a href="admin.php?p=home" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Admin panel</a>
    </footer>

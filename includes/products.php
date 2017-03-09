<?php
    if (isset($_GET['id']) is_numeric($_GET['id'])){
    $id = $_GET['id'];

?>
<section class="container heading">
    <article class="row">
        <section class="col-lg-12">
            <h3>Cd-afspillere</h3>
        </section>
    </article>
    <hr class="featurette-divider">
    <article class="row">
        <section class="col-md-12">

            <?php
            
            $sql = "SELECT * FROM `categories` WHERE id = $id";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo '<h3></h3>';

            ?>


            <figure>
                <a href="#" class="thumbnail">
                    <figcaption>
                        <h3 class="title">Creek - <span class="text-muted">Evolution CD</span></h3>
                        <p>bh etue tisi blandiatue dolum dolessim ea feummy nostrud delendi pissequ ametum in etuerit etue tatiscipit nos ex el init lore tatet do conullum diamet venim dolore facidunt dit doluptat.</p>
                        <var><abbr title="DKK">Pris:</abbr> 5495,00 kr</var>
                    </figcaption>
                    <img src="prod_image/cd_afspillere/creek_evo_cd.jpg" alt="...">
                </a>
            </figure>
        </section>
        <section class="col-md-12">
            <figure>
                <a href="#" class="thumbnail">
                    <figcaption>
                        <h3 class="title">Creek - <span class="text-muted">Classic CD</span></h3>
                        <p>bh etue tisi blandiatue dolum dolessim ea feummy nostrud delendi pissequ ametum in etuerit etue tatiscipit nos ex el init lore tatet do conullum diamet venim dolore facidunt dit doluptat.</p>
                        <var><abbr title="DKK">Pris:</abbr> 9995,00 kr</var>
                    </figcaption>
                    <img src="prod_image/cd_afspillere/creek_classic_cd.jpg" alt="...">
                </a>
            </figure>
        </section>
        <section class="col-md-12">
            <figure>
                <a href="#" class="thumbnail">
                    <figcaption>
                        <h3 class="title">Exposure - <span class="text-muted">2010 S CD</span></h3>
                        <p>bh etue tisi blandiatue dolum dolessim ea feummy nostrud delendi pissequ ametum in etuerit etue tatiscipit nos ex el init lore tatet do conullum diamet venim dolore facidunt dit doluptat.</p>
                        <var><abbr title="DKK">Pris:</abbr> 6.995,00 kr</var>
                    </figcaption>
                    <img src="prod_image/cd_afspillere/Exp_2010S_CD.gif" alt="...">
                </a>
            </figure>
        </section>
    </article>
    <hr class="featurette-divider">
    <footer>
        <p>© Hi-fi Netbutikken
        </p>
    </footer>

</section>
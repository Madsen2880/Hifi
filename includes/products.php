<?php
	if(isset($_GET['id']) && is_numeric($_GET['id'])){
		$id = $_GET['id'];
	} else {
		//404
		header('Location: index.php?p=home');
	}
?>

<section class="container heading">
    <article class="row">
        <section class="col-lg-12">
            <h3>Cd-afspillere</h3>
        </section>
    </article>
    <hr class="featurette-divider">
    <article class="row">


           <?php
			$sql = "SELECT produkter.product_id, produkter.product_name, produkter.product_details, produkter.product_price, categories.categorie_name, model.model_name, pictures.picture_name
            FROM categories 
            LEFT JOIN produkter ON fk_categorie_id = categorie_id 
            LEFT JOIN model ON fk_model_id = id
            LEFT JOIN pictures ON fk_picture_id = picture_id 
            WHERE categorie_id = $id";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()){
					echo '<section class="col-md-12">
							<figure>
								<a href="#" class="thumbnail">
								<figcaption>
									<h3 class="title">'.$row['model_name'].' - <span class="text-muted">'.$row['product_name'].'</span></h3>
									<p>';
								echo strlen($row['product_details']) >= 150 ? substr($row['product_details'], 0, 150) : $row['product_details'];
								echo '</p>
									<var><abbr title="DKK">Pris:</abbr> '.$row['product_price'].' kr</var>
								</figcaption>
									<img src="/prod_image/'.$row['picture_name'].'">
								</a>
							</figure>
						</section>';
				
				}
			}
		?>
    </article>
    <hr class="featurette-divider">
    <footer>
        <p>© Hi-fi Netbutikken
        </p>
    </footer>

</section>
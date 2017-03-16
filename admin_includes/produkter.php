<h1>Produkter</h1>
<a href="/admin.php?p=nytprodukt" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Nyt produkt</a>


<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <th>Kategori</th>
        <th>Model</th>
        <th>Produktnavn</th>
        <th>Pris</th>
        <th></th>
        </thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT product_id, product_name, product_price, categorie_name, model_name FROM produkter
                                INNER JOIN categories
                                    ON fk_categorie_id = categorie_id
                                INNER JOIN model
                                    ON fk_model_id = id");
        while($row = $result->fetch_assoc()) {
            echo '<tr>
			             <td>'.$row['categorie_name'].'</td>
						 <td>'.$row['model_name'].'</td>
						 <td>'.$row['product_name'].'</td>
						 <td>'.$row['product_price'].'</td>
						 <td>
						 <a href="/admin.php?p=redigerprodukt&id='.$row['product_id'].'"><i class="glyphicon glyphicon-pencil"></i></a>
						 <a href="javascript:void();" onclick="confirmDelete(\'Er du sikker på, du vil slette '.$row['product_name'].'?\', '.$row['product_id'].')"><i class="glyphicon glyphicon-trash"></i></a>
						 </td>
						</tr>';
        }
        $result->free();
        ?>
        </tbody>
    </table>
</div>

<script>
    function confirmDelete(msg, id) {
        var r=confirm(msg);
        if (r) {
            //write redirection code
            window.location = "admin.php?p=sletprodukt&id=" + id;
        } else {
            //do nothing
        }
    }
</script>
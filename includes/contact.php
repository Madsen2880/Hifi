<?php
include'/nav.php';

?>

<?php

    if (!empty($_POST)) {

           

        $fejl = 0; // fejl-counter

            ## NAVN
            
                if ( empty($_POST['name']) ) { // test om variablen er tom
                    $fejlnavn = 'Feltet skal udfyldes';
                    ++$fejl;
                } else if ( preg_match('/\d/', $_POST['name']) ) { // test om varibel indeholder tal
                    $fejlnavn = "feltet må ikke indeholde tal";
                    ++$fejl;
                } else { // success
                    $navn = $_POST['name'];
                }
            

                ## EMAIL
           
                if ( empty($_POST['email']) ) { // test om variablen er tom
                    $fejlemail = 'Feltet skal udfyldes';
                    ++$fejl;
                } else if ( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) { // test om varibel er en email
                    $fejlemail = "Fejl, Prøv venligst at skrive emailen igen";
                    ++$fejl;
                } else { // success
                    $email = $_POST['email'];
                }
            

            ## EMNE
           
                if ( empty($_POST['emne']) ) { // test om variablen er tom
                    $fejlemne = 'Du skal udfylde feltet';
                    ++$fejl;
                } else { // success
                    $emne = $_POST['emne'];
                }
            

            ## BESKED
            
                if ( empty($_POST['message']) ) { // test om variablen er tom
                    $fejlbesked = 'Du skal udfylde feltet';
                    ++$fejl;
                } else { // success
                    $besked = $_POST['message'];
                }
            

            ## FEJLHÅNDTERING
            if ( $fejl === 0 ) {
                $navn    = '';
                $email   = '';
                $emne    = '';
                $besked  = '';

                    $stmt = $conn->prepare("INSERT INTO messages (message_name, message_email, message_subject, message) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param('ssss',$navn, $email, $emne, $besked);

                    $stmt->execute();
                    $stmt->close();
                    
                $success = 'Formular sendt';
            } else {
                $errormessage = 'Formular ikke sendt, prøv venligst igen';
            }
        }

    
        ?>


<section class="container heading">
        <article class="row">
        	<section class="col-lg-12">
        		<h3>Kontakt</h3>
        	</section>
        </article>
        <hr class="featurette-divider">
        <article class="row">
            <section class="col-md-12">
                <div class="jumbotron jumbotron-sm">
                    <h1><small>Du er velkommen til at kontakte os</small></h1>
                </div>

                    <div class="alert alert-success <?=@empty($success) ? 'hidden':''?>" ><?=@$success?></div>
                    <div class="alert alert-danger <?=@empty($errormessage) ? 'hidden':''?>" ><?=@$errormessage?></div>

                <div class="col-md-8">
                    <div class="well well-sm">
                        <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Navn</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Indtast navn" required="required" />
                                    <span class="errMsg"><?=@$fejlnavn?></span>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Adresse</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Indtast email" required="required" /></div>
                                        <span class="errMsg"><?=@$fejlemail?></span>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Emne</label>
                                    <input type="text" class="form-control" name="emne"  id="emne" placeholder="Indtast emne" required="required" />
                                    <span class="errMsg"><?=@$fejlemne?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Besked</label>
                                    <textarea name="message" id="message" name="message" class="form-control" rows="9" cols="25" required="required" placeholder="Besked"></textarea>
                                    <span class="errMsg"><?=@$fejlbesked?></span>

                                     
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">Send Besked</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <form>
                    <legend><span class="glyphicon glyphicon-globe"></span> Vores adresse</legend>
                    <address>
                        <strong>Hi-fi Netbutikken</strong><br>
                        Byvej 25<br>
                        4000 bykøbing<br>
                        <abbr title="Telefon">Tlf:</abbr> 45 45 45 45<br>
                        <abbr title="Fax">Fax:</abbr> 45 45 45 45<br>
                    </address>
                    <address>
                        post@hifi-netbutikken.dk
                    </address>
                    </form>
                </div>
            </section>
        </article>
        <hr class="featurette-divider">
        <footer>
            <p>© Hi-fi Netbutikken
            </p>
        </footer>

    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
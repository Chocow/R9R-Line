<?php
require ROOT.'\core\Model.php';
          $articles = Model::connexion()->prepare("SELECT * FROM voyage ORDER BY idvoyage");
          $articles ->execute();
          $article = Model::connexion()->prepare("SELECT NOMVOYAGE FROM voyage ORDER BY IDVOYAGE");
          $article->execute();


?>

<div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay image-plane" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
            <form method="POST">
              <p><input style="border-radius: 15px" autofocus class="research" type="text" name="research_text" size="60" placeholder="Recherchez un lieux..."> <input type="submit" name="research" value="Rechercher" class="submit-color" !important></p>
            </form>
              <?php
              if(isset($_POST['research']) AND !empty($_POST['research'])) {
                $q = htmlspecialchars($_POST['research']);
                $articles_research = Model::connexion()->prepare('SELECT NOMVOYAGE FROM voyage WHERE NOMVOYAGE LIKE "%'.$q.'%" ORDER BY IDVOYAGE DESC');
                $articles_research->execute();
                $donnees_research = $articles_research->fetch();
                while(isset($_POST['research']) AND !empty($_POST['research'])) {
                  var_dump($donnees_research);
              }
            }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light">
              <div class="container">
                <div class="row">

<?php

          while($donnees = $articles->fetch()) {
            $pays = $donnees['PAYSVOYAGE'];
            $prix = $donnees['PrixVoyage'];
            $image = $donnees['IMAGEVOYAGE'];
            $type = $donnees['TYPEVOYAGE'];
            $nom = $donnees['NOMVOYAGE'];
            ?>


              <a href=""></a>
              <div class="col-lg-4 col-md-6">
              <div class="item-1 h">
              <img src="<?php echo $image ?>" alt="Maldives" class="img-fluid">
              <div class="item-1-contents">
                <h3><?php echo $nom ?>, <?php echo $pays ?></h3>
                <ul>
                  <li class="d-flex"><span>Prix :</span> <span class="price ml-auto">$<?php echo $prix ?></span></li>
                  <li class="d-flex"><span>Durée :</span> <span class="price ml-auto"><?php echo $type ?> semaines</span></li>
                </ul>
              </div>
            </div>
        </div>
          <?php
          }
          ?>
          <div class="col-12 mt-5 text-center">
            <span class="p-3">1</span>
            <a href="#" class="p-3">2</a>
            <a href="#" class="p-3">3</a>
            <a href="#" class="p-3">4</a>
          </div>
        </div>
      </div>
    </div>
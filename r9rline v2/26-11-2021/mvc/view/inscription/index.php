<?php
require ROOT.'\core\Model.php';
?>
</header>
      <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay image-plane" data-stellar-background-ratio="0.5"">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Inscription</h1>
              <p>Inscrivez-vous bande d'inconscient</p>
              <br><br>
              <form method="POST" style="float:center">
                <p><input type="email" placeholder="adresse email" name="email"></p>
                <p><input type="password" placeholder="Mot de passe" name="password"></p>
                <p><input type="submit" value="Créer votre compte" style="background-color:#c82333"></p>
                <a href="http://localhost/r9rline%20v2/26-11-2021/mvc/connexion"><p>Vous possédez déjà un compte ?<p></a>
            </form>
            
            </div>
            
          </div>
          
        </div>
        
      </div>
      <body>
        <?php
        if(isset($_POST) && $_POST != null) {
          $prepare = Model::connexion()->prepare("INSERT INTO users (email, mdp) VALUES (?, ?)");
          $prepare ->execute(array($_POST['email'], $_POST['password']));
        }

        ?>


      </body>
      </html>
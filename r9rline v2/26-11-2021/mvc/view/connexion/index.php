<?php
require ROOT.'\core\Model.php';
?>
</header>
      <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay image-plane" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3 scissors">Connexion</h1>
              <p>Connectez vous à l'aide des informations que vous avez rentré lors de votre inscription.</p>
              <br><br>
              <form method="POST" style="float:center">
          <p><input type="email" placeholder="adresse email" name="email"></p>
          <p><input type="password" placeholder="Mot de passe" name="password"></p>
          <p><input type="submit" value="Connexion" class="submit-color" !important></p>
          <p><input type="submit" value="Mot de passe oublié ?" name="pass_forget" class="submit-color" !important></p>
        </form>
            </div>
          </div>
        </div>
      </div>
      <body>
        <?php
        if(isset($_POST) && $_POST != null) {
          $email = $_POST['email'];
          $password2 = $_POST['password'];
          $prepare = Model::connexion()->prepare("SELECT * FROM Users WHERE email=? AND mdp=?");
          $prepare ->execute(array($email, $password2));
          $requete = Model::connexion()->prepare('SELECT * FROM Users WHERE email = ?') ; 
          $requete->execute(array($_POST['email'])) ; 
          $email_oublier = $requete->fetch();

          if($prepare-> fetch()){
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;    
            $_SESSION['password2'] = $password2;                                 
         }else if(isset($_POST['pass_forget']) && $email_oublier['email'] != null){
          ?>
            <p><input type="email" placeholder="adresse email" name="email" value="<?= $email_oublier['email'] ?>"></p>
            <?php
            $_SESSION['email_oublier'] = $email_oublier['email'];
            ?>
          <p>Pour réinitialiser <a href="./Mdp_oublier">cliquer sur ce lien</a></p>


          <?php
         }else{
          echo "Email ou mot de passe incorrect";
         }
        }
        



        ?>
          
      </body>
      </html>
</header>
      <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay image-plane" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Connexion</h1>
              <p>Inscrivez-vous bande d'inconscient</p>
              <p><a href="#" class="btn btn-primary">Learn More</a></p>
              <br><br>
              <form method="POST" style="float:center">
          <p><input type="email" placeholder="adresse email" name="email"></p>
          <p><input type="password" placeholder="Mot de passe" name="password"></p>
          <p><input type="submit" value="Créer votre compte" class="submit-color" !important></p>
        </form>
            </div>
          </div>
        </div>
      </div>
      <body>
        <br><br>
        <?php
        if(isset($_POST) && $_POST != null) {
          $bd="r9r-line";
          $login="root";
          $password="";
          $pdo = new pdo("mysql:host=localhost;dbname=". $bd, $login, $password);
          $pdo->exec('SET NAMES utf8'); 
          $prepare = $pdo->prepare("SELECT email, mdp FROM Users WHERE email=? AND mdp=?");
          $prepare ->execute(array($_POST['email'], $_POST['password']));
        }

        ?>
          
      </body>
      </html>
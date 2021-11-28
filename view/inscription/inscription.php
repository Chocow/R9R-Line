      </header>
      <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/avion.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Inscription</h1>
              <p>Inscrivez-vous bande d'inconscient</p>
              <p><a href="#" class="btn btn-primary">Learn More</a></p>
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
          $prepare = $pdo->prepare("INSERT INTO users (email, mdp) VALUES (?, ?)");
          $prepare ->execute(array($_POST['email'], $_POST['password']));
        }

        ?>
        <form method="POST" style="float:left">
          <p><input type="email" placeholder="adresse email" name="email"  style="margin-left:30px"></p>
          <p><input type="password" placeholder="Mot de passe" name="password" style="margin-left:30px"></p>
          <p><input type="submit" value="Créer votre compte" style="background-color:#c82333" style="margin-left:30px"></p>
        </form>

        <div style="float:right background-color:blue">
          
        </div>
          
      </body>
      </html>
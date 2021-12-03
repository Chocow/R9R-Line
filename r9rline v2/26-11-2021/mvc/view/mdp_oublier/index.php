</header>
      <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay image-plane" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Mot de passe oublié</h1>
              <p>Rentré un nouveau mot de passe dans le champ de texte ci dessous</p>
              <br><br>
              <form method="POST" style="float:center">
                <p><input type="password"  name="pass"></p>
                <p><input type="submit" Value="Confirmer" name="password" class="submit-color" !important></p>
            </form>
            <?php
            //var_dump($_SESSION['email_oublier']);

            ?>
            </div>
          </div>
        </div>
      </div>
      <body>
        <?php
        if(isset($_POST) && $_POST != null) {
          $bd="r9r-line";
          $login="root";
          $password="";
          $pass_o = $_POST['pass'];
          //var_dump($pass_o);
          $pdo = new pdo("mysql:host=localhost;dbname=". $bd, $login, $password);
          $pdo->exec('SET NAMES utf8'); 
          $prepare = $pdo->prepare("UPDATE Users SET mdp=? WHERE email=?");
          $prepare ->execute(array($pass_o, $_SESSION['email_oublier']));
         }
        
        



        ?>
          
      </body>
      </html>
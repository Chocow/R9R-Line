</header>
      <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay image-plane" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7 red">
              <h1 class="mb-3 red ">Votre Profil</h1>

              <br><br>

              <?php

              if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                ?>
                <p>email: <?php echo  $_SESSION['email']?> </p>
                <p>mot de passe: <?php echo  $_SESSION['password2']?> </p>
                <?php
              } else {
                echo "Vous n'êtes pas connectez.";
              }
              ?>
              <form method="POST" style="float:center">
                <p><input type="submit" value="Déconnexion" name="deconnexion" class="submit-color" !important></p>
              </form>
              
              <?php
              if(isset($_POST['deconnexion']) && $_POST['deconnexion'] == "Déconnexion") {
                session_destroy();
               }
               ?>
            </div>
          </div>
        </div>
      </div>
      <body>
        
      </body>
      </html>
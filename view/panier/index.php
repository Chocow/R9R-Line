<div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay image-plane" data-stellar-background-ratio="0.5" >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Panier</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
              <p><a href="#" class="btn btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <?php
        $totalprix=0.0;
        foreach($variable['produit'] as $ligne)
        {
          $totalprix+=$ligne->prix;
          //A compléter
        }
          ?>
        </div>
      </div>
    </div>
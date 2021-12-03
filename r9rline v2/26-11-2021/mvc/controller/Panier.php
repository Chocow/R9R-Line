<?php
    require ROOT.'\core\Controller.php';
    class Panier extends Controller {
        public function index($id=null){
            $variable['panier']=array("titre"=>"Le panier du site", "description"=>"Le texte de l'accueil");
            $this->set($variable);
            $this->render("index");
            }
        
        
       // public function __construct(){
       // echo 'Je suis l\'accueil';
       // }
    }

    function mettreAuPanier($i){
        $test=false;
        if (!isset($_SESSION['panier']))
        {
            $_SESSION['panier'][$i]=1;
        } else {
        foreach($_SESSION['panier'] as $ligne => $value){
            if($ligne==$i){
                $test = true;
            }
        }
        if($test == true){
            echo 'false';
        } else {
            $_SESSION['panier'][$i]=1;
            $_SESSION['totalpanier'] =
            count($_SESSION['panier']);
            echo $_SESSION['totalpanier'];
        }
        }
        }

        function index(){
            $test="";
            if(isset($_SESSION['panier'])){
            $test="(";
            
            foreach($_SESSION['panier'] as $ligne =>$value){
            $test.=$ligne.",";
            }
            
            $test.="0)";
            }
            $tables = Model::load("son");
            $tableRes['variable'] = array("produit" => $tables ->find(
            Model::connexion(),
            array('condition'=>"id in $test")
            )
            );
            Model::deconnexion();
            $this-> set($tableRes);
            $this->render('index');
            }
?>
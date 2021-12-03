<?php
	function detail($id){
		$laTable = Model::load('Son');
		$laTable->id=$id;
		$this->articles = $laTable->readOne($laTable->connexion());
		var_dump($this->articles);
		$laTable->deconnexion();
		$laTable=null;
		$variable['article']=array("titre"=>"L'article du produit ".
		$this->articles->id, "identifiant"=>$this->articles->id);
		$this->set($variable);
		$this->render("detail");
	}
?>
<?php class CoursHEC {
 public $nom_du_cours;
public $étudiantsinscrits=[];

public function inscrireEtudiant($nom1) {
   $this->étudiantsinscrits[]=$nom1 ;{             //les brackets après étudiantsincrits spécifie qu' on veut AJOUTER $this nous permet d'aller chercher dans l'objet les étudiants inscrits, puis le foreach nous permet de faire afficher avec le echo les noms, a partir de la variable tampon $test
      
   }
}
public function validerQteEtudiant() {
    echo count($this->étudiantsinscrits);
}

public function __construct($nom){
    $this->nom_du_cours=$nom;               // on voit dans le print_r que la propriété nom_du_cours est bien devenu DAA pour le premier objet
}
 }

$coursDAA= new CoursHEC('DAA');

echo '<pre>';print_r($coursDAA);'</pre>';
?>
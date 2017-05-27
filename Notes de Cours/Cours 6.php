<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

<?php


class Ordinateur {
    public $screen;
    public $cpu;
    public $memory;         //ajout de clé de base dans le moule de la classe ordinateur
    
    public function boot()  {
        
    }
    public function playSound()  {
        
    }
    public function display()  {
        echo " J'affiche sur une résolution de 1024x758. <br>";
    }
    
} // fin de la classe, définition de la structure

$ordinateurDaniel=new Ordinateur();
$ordinateurMassilia=new Ordinateur(); //CRÉATION D'UN OBJET SPÉCIFIQUE AVEC LE MOULE

$ordinateurDaniel->utilisateur='Daniel';
$ordinateurDaniel->type='Mac';
$ordinateurMassilia->user='Massilia';
$ordinateurMassilia->type='Asus';

echo '<pre>';print_r($ordinateurDaniel);'</pre>';

$ordinateurDaniel->display();
$ordinateurMassilia->display();

$ordinateurs = [
    $ordinateurDaniel,
   $ordinateurMassilia ];

//echo '<pre>';print_r($ordinateurs);'</pre>';



//la classe correspond au moule / template
//l'OBJET correspond au new 
echo '<br>';

                                              //EXERCICE
 class CoursHEC {
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
$coursDAA->étudiantsinscrits= ['Yann', 'Raph', 'Maha'];
echo '<pre>';print_r($coursDAA);'</pre>';
$coursDAA->inscrireEtudiant('Johny');
$coursDAA->validerQteEtudiant();
echo '<pre>';print_r($coursDAA);'</pre>';
echo '<br>';

    //SUITE COURS
    
    class Auto {
        public $marque;
        public $annee;
        
        //Affichage de l'auto
        public function getAge(){
            //2017- annee de contruction;
            echo $this->annee;
             }
            
        public function GetMarque(){
                echo $this->marque;
            }
        
        public function setAnnee($annee){
            $this->annee = $annee;
        }
    }
    
$auto1= new Auto();
$auto1->marque='BMW';
$auto1->annee=2006;

$BMX = new Auto();
$BMX->setAnnee(1999);
echo '<pre>';print_r($BMX);'</pre>';

$auto2= new Auto();
$auto2->marque='Dodge';
$auto2->annee=2003;

$auto1->getAge(); // renvoie ici 2006, on utilise la fonction défini dans la classe pour avoir l'année spécifique de l'objet



// FONCTION __CONSTRUCT

class Person {
    
    public $name;
    public function __construct($name, $couleur) { //PEUT PAS CRÉER UN NOUVEL OBJET SANS CES NOUVEAUX PARAMETRES - FONCTION APPELÉ A CHAQUE CREATION D'OBJET
        echo "$name <br>";
        echo "$couleur <br>";
        $this->name=$name;
    } 
}
 
 echo 'abc <br>';
 $person1= new Person('Roger', 'Rouge');
 $person2= new Person ('Mike', 'Vert');
 
 
 
 
 
 




?>
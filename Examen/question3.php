<?php

class Equipe {
    public $nom="";

    public $ville="";
    
    public $joueurs=[];

   public function __construct($nomEquipe, $ville1){
    $this->nom=$nomEquipe;
    $this->ville=$ville1;
    }
      public function recruter($nom1) {
   $this->joueurs[]=$nom1 ;             
   }
   public function afficherLesJoueurs() {
       foreach ($name as $test){
  echo $test['joueurs'] . '<br>';             
   } }
}

$Canadiens= new Equipe('Canadiens', 'Montreal');
$Maple=new Equipe('Maple Leafs', 'Toronto');
$Rangers=new Equipe('Rangers', 'New York');

$Canadiens->recruter('Tim');
$Canadiens->recruter('Tim2');
$Canadiens->afficherLesJoueurs();

echo $Canadiens->joueurs;


echo '<pre>';print_r($Canadiens);'</pre>'

?>
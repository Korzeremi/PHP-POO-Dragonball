<?php
//here we created a class perso where we define the caracteristics of the characters
    class Perso {
        public $Pv =array();
        public $PersoState = 0;
        public $MainAttack = array();

        function __construct($Pv) {
            $this->Pv = $Pv;
        }

    }
// here we created a class hero where we define the caracteristics of the heroes
    class Hero extends Perso {
        public $HeroId;
        public $heroPv =array(400,333,250);
        public $HeroInfos = array("goku","vegeta","piccolo");
        public $HeroPower = array(23,14,10);
        public $HeroAttack = array("kamehameha","finalflash","makankosappo");

        function __construct() {
            
        
        }
        // here we created a function that allows us to define the pv of the heroes 
        function Pv() {
            // $this->pv = $this->heroPv;
            array_push($this->Pv, $this->heroPv);
            print_r($this->Pv);
            print_r($this->heroPv);
        }
        



        
        
      

          
    }
// here we created a class vilain where we define the caracteristics of the vilains

    class Vilain extends Perso {
        public $VilainId;
        public $VilainInfos = array("freeazer","cell","Magin buu");
        public $VilainPower= array("400","333","250");

 

    }
// here we created a class combat where we define the caracteristics of the combat
    class combat {
        public $attackBloque = array("kaioken","finalflash","makankosappo");
       
       

        

    }

    $hero = new Hero();
    $hero->Pv();
    
?>
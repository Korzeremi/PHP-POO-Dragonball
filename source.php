<?php
//here we created a class perso where we define the caracteristics of the characters
    class Perso {
        public $PersoId;
        public $PersoPv;
        public $PersoInfos;
        public $PersoPower;
        public $PersoAttack;
        public $PersoState = 0; // débloqué ou non

        public function __construct($Pv,$PersoId,$PersoPv,$PersoInfos,$PersoPower,$PersoAttack,$PersoState) {
            $this->PersoId = $PersoId;
            $this->PersoPv = $PersoPv;
            $this->PersoInfos = $PersoInfos;
            $this->PersoAttack = $PersoAttack;
            $this->PersoPower = $PersoPower;
            $this->PersoState = $PersoState;
        }

    }
// here we created a class hero where we define the caracteristics of the heroes
    class Hero extends Perso {
        public $HeroId;
        public $HeroPv = array(400,333,250);
        public $HeroInfos = array("goku","vegeta","piccolo");
        public $HeroPower = array(23,14,10);
        public $HeroAttack = array("kamehameha","finalflash","makankosappo"); // attaque spéciale

        public function __construct($HeroId,$HeroPv,$HeroInfos,$HeroPower,$HeroAttack) {
            $this->HeroId = $HeroId;
            $this->HeroPv = $HeroPv; 
            $this->HeroInfos = $HeroInfos;     
            $this->HeroPower = $HeroPower; 
            $this->HeroAttack = $HeroAttack;
        }

        // here we created a function that allows us to define the pv of the heroes 
        function Pv() {
            // $this->pv = $this->heroPv;
            array_push($this->PersoPv, $this->HeroPv);
            print_r($this->PersoPv);
            print_r($this->HeroPv);
        }      
    }

// here we created a class vilain where we define the caracteristics of the vilains
    class Vilain extends Perso {
        public $VilainId;
        public $VilainPv = array();
        public $VilainAttack = array();
        public $VilainInfos = array("freeazer","cell","Magin buu");
        public $VilainPower= array("400","333","250");

        public function __construct($VilainId,$VilainPv,$VilainAttack,$VilainInfos,$VilainPower) {
            $this->VilainId = $VilainId;
            $this->VilainPv = $VilainPv;
            $this->VilainAttack = $VilainAttack;
            $this->VilainInfos = $VilainInfos;
            $this->VilainPower = $VilainPower;
        }
    }

// here we created a class combat where we define the caracteristics of the combat
    class combat {
        public $attackBloque = array("kaioken","finalflash","makankosappo");
       
    }

    $hero = new Hero();
    $hero->Pv();
    
?>
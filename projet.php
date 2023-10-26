<?php
    class Perso {
        public $Pv ;
        public $Pt;
        public $PersoState = 0;
        public $MainAttack = array();
    }

    class Hero extends Perso {
        public $HeroId;
        public $HeroInfos = array("goku","vegeta","piccolo");
        public $HeroStats = array(400,333,250);
    }

    class Vilain extends Perso {
        public $VilainId;
        public $VilainInfos = array("freeazer","cell","buu");
        public $VilainStats = array("400","333","250");
    }
    
?>
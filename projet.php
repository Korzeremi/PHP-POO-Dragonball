<?php
    class People {
        public $Pv =;
        public $Pt;
        public $PersoState = 0;
        public $MainAttack = array();
    }

    class Hero extends Perso {
        public $HeroId;
        public $HeroInfos = array();
        public $HeroStats = array();
    }

    class Vilain extends Perso {
        public $VilainId;
        public $VilainInfos = array();
        public $VilainStats = array();
    }
?>
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
        public $SpecialAttackDamage = array(100,80,60); // dégats de l'attaque spéciale
        public $AttackBlock = array("kaioken","finalflash","makankosappo");
        public $attackBlockDamage = array(50,40,30);


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
        }      
    }
// here we created a class vilain where we define the caracteristics of the vilains
    class Vilain extends Perso {
        public $VilainId;
        public $VilainPv = array(503,233,350);
        public $VilainInfos = array("freeazer","cell","Magin buu");  
        public $VilanAttack = array("deathball","kamehameha","finalflash");     // attaque spéciale
        public $VilanSpecialAttackDammage = array(100,80,60); // dégats de l'attaque spéciale
        public $VilainPower= array(26,17,12); // puissance de l'attaque spéciale
        public $VilainAttackBloque = array("key blast","absorption","vaporize");
        public $VilainAttackBloqueDammage = array(50,40,70);

        public function __construct($VilainId,$VilainPv,$VilainAttack,$VilainInfos,$VilainPower) {
            $this->VilainId = $VilainId;
            $this->VilainPv = $VilainPv;
            $this->VilainAttack = $VilainAttack;
            $this->VilainInfos = $VilainInfos;
            $this->VilainPower = $VilainPower;
        }
    }
    class Menu extends Perso {
        public $UserPlace;
        public $UserSelection;
        public $TempSaveFile;
        public $CharaType;
        public $CharaSelection;
        public function __construct($UserPlace,$UserSelection,$CharaSelection) {
            $this->UserPlace = $UserPlace;
            $this->UserSelection = $UserSelection;
            $this->CharaSelection = $CharaSelection;
        }
        public function MenuManager() {
            $this->MainMenu();
        }
        public function MainMenu() {
            $this->UserPlace = 0;
            popen("cls","w");
            echo "
______                                   ______         _  _ 
|  _  \                                  | ___ \       | || |
| | | | _ __   __ _   __ _   ___   _ __  | |_/ /  __ _ | || |
| | | || '__| / _` | / _` | / _ \ | '_ \ | ___ \ / _` || || |
| |/ / | |   | (_| || (_| || (_) || | | || |_/ /| (_| || || |
|___/  |_|    \__,_| \__, | \___/ |_| |_|\____/  \__,_||_||_|
                      __/ |                                  
                     |___/                                   

            \n";
            echo "-------------------------------\n";
            echo "Bienvenue sur le Menu principal\n";
            echo "-------------------------------\n\n";
            echo "1.Jouer\n2.Gérer la banque de personnages\n3.Infos\n\n4.Quitter\n\n";
            $this->UserSelection = readline("> ");
            switch ($this->UserSelection){
                case 0:
                    // popen("powershell .\music.ps1","w");
                    break;
                case 1:
                    $this->PlayMenu();
                case 2:
                    $this->CharaMenu();
                    break;
                case 3:
                    popen("cls","w");
                    echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
                    echo "Créé par Ilyass ELYAMANI et Rémi KORZENIOWSKI\n";
                    echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
                    echo "\n";
                    echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
                    echo "            Version du 26/10/2023            \n";
                    echo "               IPSSI BTC2-25.1               \n";
                    echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
                    $pass = readline("> ");
                    $this->MainMenu();
            }
        }
        public function PlaySelection() {
            popen("cls","w");
            echo "Voulez-vous incarner les héros ou les vilains ?\n1.Héros\n2.Vilain\n";
            $this->CharaSelection = readline("");
            switch ($this->CharaSelection) {
                case 1:
                    $this->PlayHero();
                    break;
                case 2:
                    //Vilain
            }
        }
        public function PlayHero() {
            count($this->H)
        }
        public function PlayMenu() {
            popen("cls","w");
            echo "
______                                                                                                                       _             _     _ 
| ___ \                                                                                                                     | |           | |   | |
| |_/ / _ __   ___  _ __    __ _  _ __   ___  ____ ______ __   __  ___   _   _  ___    __ _  _   _    ___   ___   _ __ ___  | |__    __ _ | |_  | |
|  __/ | '__| / _ \| '_ \  / _` || '__| / _ \|_  /|______|\ \ / / / _ \ | | | |/ __|  / _` || | | |  / __| / _ \ | '_ ` _ \ | '_ \  / _` || __| | |
| |    | |   |  __/| |_) || (_| || |   |  __/ / /          \ V / | (_) || |_| |\__ \ | (_| || |_| | | (__ | (_) || | | | | || |_) || (_| || |_  |_|
\_|    |_|    \___|| .__/  \__,_||_|    \___|/___|          \_/   \___/  \__,_||___/  \__,_| \__,_|  \___| \___/ |_| |_| |_||_.__/  \__,_| \__| (_)
                   | |                                                                                                                             
                   |_|                                                                                                                             

            ";
            sleep(1);
            popen("cls","w");
            echo "                
            .--,-``-.     
           /   /     '.   
          / ../        ;  
          \ ``\  .`-    ' 
           \___\/   \   : 
                \   :   | 
                /  /   /  
                \  \   \  
            ___ /   :   | 
           /   /\   /   : 
          / ,,/  ',-    . 
          \ ''\        ;  
           \   \     .'   
            `--`-,,-'     
                          
          ";
            sleep(1);
            popen("cls","w");
            echo "               
               
            ,----,   
          .'   .' \  
        ,----,'    | 
        |    :  .  ; 
        ;    |.'  /  
        `----'/  ;   
          /  ;  /    
         ;  /  /-,   
        /  /  /.`|   
      ./__;      :   
      |   :    .'    
      ;   | .'       
      `---'          
                     
      ";
            sleep(1);
            popen("cls","w");
            echo "           
           
            ,---, 
         ,`--.' | 
        /    /  : 
       :    |.' ' 
       `----':  | 
          '   ' ; 
          |   | | 
          '   : ; 
          |   | ' 
          '   : | 
          ;   |.' 
          '---'   
                  
                  
       ";
            sleep(1);
            popen("cls","w");
            echo "  
 _____  _             _                         _    _ 
/ ____|( )           | |                       | |  (_)
| |     |/   ___  ___ | |_   _ __    __ _  _ __ | |_  _ 
| |         / _ \/ __|| __| | '_ \  / _` || '__|| __|| |
| |____    |  __/\__ \| |_  | |_) || (_| || |   | |_ | |
\_____|    \___||___/ \__| | .__/  \__,_||_|    \__||_|
                           | |                         
                           |_|                         
           ";
           $pass = readline("> ");
            // fonction de jeu
        }
        public function CharaMenu() {
            popen("cls","w");
            echo "DragonBall\n\n";
            echo "---------------------\n";
            echo "Banque de personnages\n";
            echo "---------------------\n\n";
            echo "1.Afficher les personnages\n2.Ajouter un personnage\n3.Réinitialiser la banque de personnage\n4.Retour au menu principal\n\n";
            $this->UserSelection = readline("> ");
            switch ($this->UserSelection){
                case 1:
                    // print tab
                    break;
                case 2:
                    echo "Que voulez-vous ajouter ?\n1.Héros\n2.Vilain\n";
                    $this->CharaType = readline("> ");
                    switch ($this->CharaType){
                        case 1:
                            // nom du heros
                            // PV
                            // Attaque special
                            break;
                        case 2:
                            // Nom du vilain
                            // PV
                            // Attaque special
                            break;
                        }
                case 3:
                    // actualArray == initialArray
                    break;
                case 4:
                    $this->MainMenu();
            }
        }
    }
    $f = new Menu(0,0);
    $f->MenuManager();
?>
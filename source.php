<?php
    class People {
        public $Pv;
        public $Pt;
        public $PersoState = 0;
        public $MainAttack = array();
    }

    class Hero extends People {
        public $HeroId;
        public $HeroInfos = array();
        public $HeroStats = array();
    }

    class Vilain extends People {
        public $VilainId;
        public $VilainInfos = array();
        public $VilainStats = array();
    }
    class Menu {
        public $UserPlace;
        public $UserSelection;
        public $TempSaveFile;
        public $CharaType;
        public $CharaName;
        public function __construct($UserPlace,$UserSelection,$CharaName,$CharaType) {
            $this->UserPlace = $UserPlace;
            $this->UserSelection = $UserSelection;
            $this->CharaName = $CharaName;
            $this->CharaType = $CharaType;
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
                    echo "Quel est le nom du personnage ?\n";
                    $this->CharaName = readline("> ");
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
    $f = new Menu(0,0,0,0);
    $f->MenuManager();
?>
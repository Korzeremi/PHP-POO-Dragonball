<?php


    // CHARACTER ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


    class Character {
        public $CharaBdd = array(
            array(
                'CharaId' => 0,
                'CharaTypeState' => "h",
                'CharaInfos' => "Goku",
                'CharaHp' => 100,
                'CharaAttack' => "Attack",
                'CharaAttackDamage' => 25,
                'CharaSpecAttack' => "SpecialAttack",
                'CharaSpecAttackDamage' => 50,
                'CharaBlock' => "Defence",
                'CharaBlockDamage' => 50,
                'CharaLevel' => 1,
            ),
            array(
                'CharaId' => 1,
                'CharaTypeState' => "h",
                'CharaInfos' => "Goku2",
                'CharaHp' => 100,
                'CharaAttack' => "Attack",
                'CharaAttackDamage' => 25,
                'CharaSpecAttack' => "SpecialAttack",
                'CharaSpecAttackDamage' => 50,
                'CharaBlock' => "Defence",
                'CharaBlockDamage' => 50,
                'CharaLevel' => 1,
            ),
            array(
                'CharaId' => 2,
                'CharaTypeState' => "v",
                'CharaInfos' => "Vegeta",
                'CharaHp' => 125,
                'CharaAttack' => "Attack",
                'CharaAttackDamage' => 30,
                'CharaSpecAttack' => "SpecialAttack",
                'CharaSpecAttackDamage' => 75,
                'CharaBlock' => "Defence",
                'CharaBlockDamage' => 25,
                'CharaLevel' => 1,
            ),
            array(
                'CharaId' => 3,
                'CharaTypeState' => "v",
                'CharaInfos' => "Vegeto",
                'CharaHp' => 125,
                'CharaAttack' => "Attack",
                'CharaAttackDamage' => 30,
                'CharaSpecAttack' => "SpecialAttack",
                'CharaSpecAttackDamage' => 75,
                'CharaBlock' => "Defence",
                'CharaBlockDamage' => 25,
                'CharaLevel' => 1,
            )
        );
        public $CharaId;
        public $CharaHp;
        public $CharaLevel;
        public $CharaInfos;
        public $CharaAttack;
        public $CharaAttackDamage;
        public $CharaSpecAttack;
        public $CharaSpecAttackDamage;
        public $CharaBlock;
        public $CharaBlockDamage;
        public $CharaNpcState;
        public $CharaTypeState;
        public $CharaState;
        public function __construct() {
        }
    }


    // DISPLAYENGINE -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


    class DisplayEngine extends Character {
        public $AsciiType = 1;
        public $AsciiReg;
        public function __construct($AsciiType,$AsciiReg) {
            $this->AsciiType = $AsciiType;
            $this->AsciiReg = $AsciiReg;
        }
        public function AsciiEngine() {
            switch ($this->AsciiType) {
                case 0:
                    $this->AsciiReg = "
                    ______                                   ______         _  _ 
                    |  _  \                                  | ___ \       | || |
                    | | | | _ __   __ _   __ _   ___   _ __  | |_/ /  __ _ | || |
                    | | | || '__| / _` | / _` | / _ \ | '_ \ | ___ \ / _` || || |
                    | |/ / | |   | (_| || (_| || (_) || | | || |_/ /| (_| || || |
                    |___/  |_|    \__,_| \__, | \___/ |_| |_|\____/  \__,_||_||_|
                                          __/ |                                  
                                         |___/                                                                          
                    
                                   2023 - Ilyas et Rémi - BTC2-25.1

                                          Appuyer sur Entrée
                   
                    ";
                    break;
                case 1:
                    $this->AsciiReg = "
                    ______                                   ______         _  _ 
                    |  _  \                                  | ___ \       | || |
                    | | | | _ __   __ _   __ _   ___   _ __  | |_/ /  __ _ | || |
                    | | | || '__| / _` | / _` | / _ \ | '_ \ | ___ \ / _` || || |
                    | |/ / | |   | (_| || (_| || (_) || | | || |_/ /| (_| || || |
                    |___/  |_|    \__,_| \__, | \___/ |_| |_|\____/  \__,_||_||_|
                                          __/ |                                  
                                         |___/                                                                          
                    

                                            1. Jouer
                                            2. BDD
                                            3. Quitter            
                                            
                    ";
                    break;
                case 2:
                    $this->AsciiReg = "
                     _____  _____  _____  _____  _____  _____  _   _    ______ ______ ______ 
                    |  __ \|  ___|/  ___||_   _||_   _||  _  || \ | |   | ___ \|  _  \|  _  \
                    | |  \/| |__  \ `--.   | |    | |  | | | ||  \| |   | |_/ /| | | || | | |
                    | | __ |  __|  `--. \  | |    | |  | | | || . ` |   | ___ \| | | || | | |
                    | |_\ \| |___ /\__/ /  | |   _| |_ \ \_/ /| |\  |   | |_/ /| |/ / | |/ / 
                     \____/\____/ \____/   \_/   \___/  \___/ \_| \_/   \____/ |___/  |___/  
                                                                                             
                                                                                             
                                        

                                            1. Ajouter personnage
                                            2. Supprimer personnage
                                            3. Afficher BDD
                                            4. Formater BDD
                                            5. Retour  
                                            
                    ";
                    break;
            }
        }
        public function Pass() {
            $Pass = readline("");
        }
        public function Input() {
            $this->PlayerSelection = readline("                                        Votre sélection > ");
        }
        public function CleanCmd() {
            popen("cls","w");
        }
    }


    // GAMEENGINE ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


    class GameEngine extends DisplayEngine {
        public $PlayerTempSaveFile;
        public $PlayerXp;
        public $PlayerType;
        public $PlayerId;
        public $PlayerHp;
        public $PlayerLevel;
        public $PlayerInfos;
        public $PlayerAttack;
        public $PlayerAttackDamage;
        public $PlayerSpecAttack;
        public $PlayerSpecAttackDamage;
        public $PlayerBlock;
        public $PlayerBlockDamage;
        public $BddVilainNb;
        public $BddHeroNb;
        public $BddVilain = array();
        public $BddHero = array();
        public $CurrentPlayerChara = array();
        public $CurrentEnnemyChara = array();
        public function __construct() {
        }
        public function PlayerSelection() {
            $this->CleanCmd();
                    echo "Souhaitez-vous jouer un héros ou un vilain ? (h/v) \n";
                    $this->PlayerType = readline("> "); 
                    foreach ($this->CharaBdd as $element) {
                        if ($element['CharaTypeState'] === "h") {
                            array_push($this->BddHero,$element);
                            $this->BddHeroNb++;
                        } elseif ($element['CharaTypeState'] === "v") {
                            array_push($this->BddVilain,$element);
                            $this->BddVilainNb++;
                        }
                    }
                    switch ($this->PlayerType) {
                        case "h":
                            $RandomNb = rand(0,$this->BddHeroNb-1);
                            $this->CurrentPlayerChara[] = $this->BddHero[$RandomNb];
                            $this->HeroPlayer();
                            break;
                        case "v":
                            $RandomNb = rand(0,$this->BddVilainNb-1);
                            $this->CurrentPlayerChara[] = $this->BddVilain[$RandomNb];
                            $this->VilainPlayer();
                            break;
                    }
        }
        public function ReceivePlayerInfos() {
            foreach ($this->CurrentPlayerChara as $element) {
                $this->PlayerLevel = $element['CharaLevel'];
                $this->PlayerId = $element['CharaId'];
                $this->PlayerHp = $element['CharaHp'];
                $this->PlayerInfos = $element['CharaInfos'];
            }
        }
        public function HeroPlayer() {
            $this->ReceivePlayerInfos();
            echo "Vous jouer " . $this->PlayerInfos . ", disposant de " . $this->PlayerHp . " points de vie (HP).\n";
            echo "Votre personnage est actuellement au niveau " . $this->PlayerLevel . ".\nBattez des ennemies et des boss pour obtenir des niveaux et en débloquer de nouveaux !";
            $this->Pass();
            while (0 <= $this->PlayerHp) {

            }
        }
        public function VilainPlayer() {
            $this->ReceivePlayerInfos();
            echo "Vous jouer " . $this->PlayerInfos . ", disposant de " . $this->PlayerHp . " points de vie (HP).\n";
            echo "Votre personnage est actuellement au niveau " . $this->PlayerLevel . ".\nBattez des ennemies et des boss pour obtenir des niveaux et en débloquer de nouveaux !";
            $this->Pass();
            while (0 <= $this->PlayerHp) {

            }
        }
    }


    // MENUMANAGER ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


    class MenuManager extends GameEngine {
        public $PlayerSelection;
        public function __construct() {
        }
        public function Engine() {
            $this->CleanCmd();
            $this->AsciiType = 0;
            $this->AsciiEngine();
            echo $this->AsciiReg;
            $this->Pass();
            $this->CleanCmd();
            $this->AsciiType = 1;
            $this->AsciiEngine();
            echo $this->AsciiReg . "\n\n";
            $this->Input();
            $this->MainMenu();
        }
        public function MainMenu() {
            switch ($this->PlayerSelection) {
                case 1:
                    $this->PlayerSelection();
                    break;
                case 2:
                    $this->CleanCmd();
                    $this->AsciiType = 2;
                    $this->AsciiEngine();
                    echo $this->AsciiReg . "\n\n";
                    $this->Input();
                    $this->BddMenu();
                    break;
            }
        }
        public function BddMenu() {
            switch ($this->PlayerSelection) {
                case 1:
                    $this->CleanCmd();
                    echo "Hero ou vilain (h/v) ?\n";
                    $this->CharaTypeState = readline("> ");
                    $this->CleanCmd();
                    echo "Nom ?\n";
                    $this->CharaInfos = readline("> ");
                    $this->CleanCmd();
                    echo "Quels sont les points de vie ?\n";
                    $this->CharaHp = readline("> ");
                    $this->CleanCmd();
                    echo "Quelle est l'attaque principale du personnage ?\n";
                    $this->CharaAttack = readline("> ");
                    echo "\nQuels sont les points de dégats de cette attaque ? (" . $this->CharaAttack . ")\n";
                    $this->CharaAttackDamage = readline("> ");
                    $this->CleanCmd();
                    echo "Quelle est l'attaque spéciale du personnage ?\n";
                    $this->CharaSpecAttack = readline("> ");
                    echo "\nQuels sont les points de dégats de cette attaque ? (" . $this->CharaSpecAttack . ")\n";
                    $this->CharaSpecAttackDamage = readline("> ");
                    $this->CleanCmd();
                    echo "Quelle est la défense de l'utilisateur ?\n";
                    $this->CharaBlock = readline("> ");
                    echo "\nQuels sont les points de dégats de cette défense ? (" . $this->CharaBlock . ")\n";
                    $this->CharaBlockDamage = readline("> ");
                    $this->CleanCmd();
                    echo "Quel niveau pour débloquer " . $this->CharaInfos . " ?\n";
                    $this->CharaLevel = readline("> ");
                    $TempBdd = array(
                        'CharaId' => count($this->CharaBdd),
                        'CharaTypeState' => $this->CharaTypeState,
                        'CharaInfos' => $this->CharaInfos,
                        'CharaHp' => $this->CharaHp,
                        'CharaAttack' => $this->CharaAttack,
                        'CharaAttackDamage' => $this->CharaAttackDamage,
                        'CharaSpecAttack' => $this->CharaSpecAttack,
                        'CharaSpecAttackDamage' => $this->CharaSpecAttackDamage,
                        'CharaBlock' => $this->CharaBlock,
                        'CharaBlockDamage' => $this->CharaBlockDamage,
                        'CharaLevel' => $this->CharaLevel,
                    );
                    $this->CharaBdd[] = $TempBdd;
                    $this->CleanCmd();
                    $this->AsciiType = 2;
                    $this->AsciiEngine();
                    echo $this->AsciiReg . "\n\n";
                    $this->PlayerSelection = 0;
                    $this->Input();
                    $this->BddMenu();
                    break;
                case 2:
                    $this->CleanCmd();
                    print_r($this->CharaBdd);
                    echo "\nTaper le numéro CharaId à supprimer > ";
                    $RemoveId = readline("> ");
                    unset($this->CharaBdd[$RemoveId]);
                    $this->CleanCmd();
                    echo "Le personnage a bien été supprimé\n";
                    $this->Pass();
                    $this->AsciiType = 2;
                    $this->AsciiEngine();
                    echo $this->AsciiReg . "\n\n";
                    $this->PlayerSelection = 0;
                    $this->Input();
                    $this->BddMenu();
                    break;
                case 3:
                    $this->CleanCmd();
                    print_r($this->CharaBdd);
                    $this->Pass();
                    $this->CleanCmd();
                    $this->AsciiType = 2;
                    $this->AsciiEngine();
                    echo $this->AsciiReg . "\n\n";
                    $this->PlayerSelection = 0;
                    $this->Input();
                    $this->BddMenu();
                    break;
                case 4:
                    $this->CleanCmd();
                    $this->CharaBdd = array();
                    echo "!!!!!!!!!!!!!!BDD Formatée!!!!!!!!!!!!!!";
                    $this->Pass();
                    $this->CleanCmd();
                    $this->AsciiType = 2;
                    $this->AsciiEngine();
                    echo $this->AsciiReg . "\n\n";
                    $this->PlayerSelection = 0;
                    $this->Input();
                    $this->BddMenu();
                    break;
                case 5:
                    $this->CleanCmd();
                    $this->AsciiType = 1;
                    $this->AsciiEngine();
                    echo $this->AsciiReg . "\n\n";
                    $this->PlayerSelection = readline("                                        Votre sélection > ");
                    break;
            }
        }
    }


    // FUNCTIONS -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


    $Game = new MenuManager();
    $Game->Engine();
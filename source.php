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
                'CharaAttackDamage' => 250,
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
                'CharaAttackDamage' => 250,
                'CharaSpecAttack' => "SpecialAttack",
                'CharaSpecAttackDamage' => 50,
                'CharaBlock' => "Defence",
                'CharaBlockDamage' => 50,
                'CharaLevel' => 1,
            ),
            array(
                'CharaId' => 0,
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
                'CharaId' => 1,
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
            ),
            array(
                'CharaId' => 2,
                'CharaTypeState' => "v",
                'CharaInfos' => "Vegeti",
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
        public $PlayerXp; //A Part
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
        public $EnemyLevel;
        public $EnemyId;
        public $EnemyMainId;
        public $EnemyHp;
        public $EnemyInfos;
        public $EnemyType;
        public $EnemyAttack;
        public $EnemyAttackDamage;
        public $EnemySpecAttack;
        public $EnemySpecAttackDamage;
        public $EnemyBlock;
        public $EnemyBlockDamage;
        public $BddVilainNb;
        public $BddHeroNb;
        public $BddVilain = array();
        public $BddHero = array();
        public $CurrentPlayerChara = array();
        public $CurrentEnemyChara = array();
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
        public function VilainSpawner() {
            $BddVilainNbV = 0;
            foreach ($this->BddVilain as $element) {
                $BddVilainNbV++;
            }
            // $RandomNbV = rand(0,$BddVilainNbV);
            $this->CurrentEnemyChara[] = $this->BddVilain[$BddVilainNbV];
        }
        public function ReceivePlayerInfos() {
            foreach ($this->CurrentPlayerChara as $element) {
                $this->PlayerLevel = $element['CharaLevel'];
                $this->PlayerId = $element['CharaId'];
                $this->PlayerHp = $element['CharaHp'];
                $this->PlayerInfos = $element['CharaInfos'];
                $this->PlayerType = $element['CharaTypeState'];
                $this->PlayerAttack = $element['CharaAttack'];
                $this->PlayerAttackDamage = $element['CharaAttackDamage'];
                $this->PlayerSpecAttack = $element['CharaSpecAttack'];
                $this->PlayerSpecAttackDamage = $element['CharaSpecAttackDamage'];
                $this->PlayerBlock = $element['CharaBlock'];
                $this->PlayerBlockDamage = $element['CharaBlockDamage'];
            }
        }
        public function ReceiveEnemyInfos() {
            foreach ($this->CurrentEnemyChara as $element2) {
                $this->EnemyLevel = $element2['CharaLevel'];
                $this->EnemyMainId = $element2['CharaId'];
                $this->EnemyId = count($element2);
                $this->EnemyHp = $element2['CharaHp'];
                $this->EnemyInfos = $element2['CharaInfos'];
                $this->EnemyType = $element2['CharaTypeState'];
                $this->EnemyAttack = $element2['CharaAttack'];
                $this->EnemyAttackDamage = $element2['CharaAttackDamage'];
                $this->EnemySpecAttack = $element2['CharaSpecAttack'];
                $this->EnemySpecAttackDamage = $element2['CharaSpecAttackDamage'];
                $this->EnemyBlock = $element2['CharaBlock'];
                $this->EnemyBlockDamage = $element2['CharaBlockDamage'];
            }

        }
        public function HeroPlayer() {
            $this->ReceivePlayerInfos();
            echo "Vous jouer " . $this->PlayerInfos . ", disposant de " . $this->PlayerHp . " points de vie (HP).\n";
            echo "Son attaque principale est " . $this->PlayerAttack . " qui effectuera " . $this->PlayerAttackDamage . " points de dégats\n";
            echo "Son attaque spéciale est " . $this->PlayerSpecAttack . " qui effectuera " . $this->PlayerSpecAttackDamage . " points de dégats\n";
            echo "Sa defense est " . $this->PlayerBlock . " qui effectuera " . $this->PlayerBlockDamage . " points de dégats en contrepartie\n";
            echo "Votre personnage est actuellement au niveau " . $this->PlayerLevel . ".\nBattez des ennemies et des boss pour obtenir des niveaux et en débloquer de nouveaux !";
            $this->Pass();
            $RandomEnemy = rand(0,$this->BddVilainNb-1);
            $this->CurrentEnemyChara[] = $this->BddVilain[$RandomEnemy];
            $this->ReceiveEnemyInfos();
            $this->CleanCmd();
            echo $this->EnemyInfos . " vient d'apparaitre !";
            $this->Pass();
            $LuckNb = rand(0,1);
            switch ($LuckNb) {
                case 0:
                    $this->CleanCmd();
                    echo $this->EnemyInfos . " vous attaque avec " . $this->EnemyAttack . " et vous inflige " . $this->EnemyAttackDamage . " points de dégats."; 
                    $this->Pass();
                    $this->PlayerHp = $this->PlayerHp - $this->EnemyAttackDamage;
                    $this->CleanCmd();
                    echo "Vous avez " . $this->PlayerHp . " points de vie";
                    $this->Pass();
                    while ($this->PlayerHp >= 0) {
                        if ($this->EnemyHp <= 0) {
                            $this->ReceiveEnemyInfos();
                            $this->CurrentEnemyChara = array();
                            $this->ReceiveEnemyInfos();
                            print_r($this->CurrentEnemyChara);
                        }
                    }
                    break;
                case 1:
                    $this->CleanCmd();
                    echo "Vous attaquez " . $this->EnemyInfos . " avec " . $this->PlayerAttack . " et effectué " . $this->PlayerAttackDamage . " points de dégats";
                    $this->Pass();
                    $this->EnemyHp = $this->EnemyHp - $this->PlayerAttackDamage;
                    $this->CleanCmd();
                    echo "La vie de " . $this->EnemyInfos . " est à " . $this->EnemyHp;
                    echo $this->EnemyMainId;
                    $this->Pass();
                    while ($this->PlayerHp >= 0) {
                        if ($this->EnemyHp <= 0) {
                            unset($this->BddVilain[$this->EnemyMainId]);
                            $this->CurrentEnemyChara = array();
                            $this->VilainSpawner();
                            $this->ReceiveEnemyInfos();
                            print_r($this->CurrentEnemyChara);
                        } else {

                        }
                        
                    break;
                    }
            }
            $this->Pass();
        }
        public function VilainPlayer() {
            $this->ReceivePlayerInfos();
            echo "Vous jouer " . $this->PlayerInfos . ", disposant de " . $this->PlayerHp . " points de vie (HP).\n";
            echo "Son attaque principale est " . $this->PlayerAttack . " qui effectuera " . $this->PlayerAttackDamage . " points de dégats\n";
            echo "Son attaque spéciale est " . $this->PlayerSpecAttack . " qui effectuera " . $this->PlayerSpecAttackDamage . " points de dégats\n";
            echo "Sa defense est " . $this->PlayerBlock . " qui effectuera " . $this->PlayerBlockDamage . " points de dégats en contrepartie\n";
            echo "Votre personnage est actuellement au niveau " . $this->PlayerLevel . ".\nBattez des ennemies et des boss pour obtenir des niveaux et en débloquer de nouveaux !";
            $this->Pass();
            print_r($this->BddHero);
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
<?php


    // CHARACTER ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


    class Character {
        public $CharaBdd = array(
            array(
                'CharaId' => 0,
                'CharaTypeState' => "h",
                'CharaInfos' => "Goku",
                'CharaHp' => 1000,
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
                'CharaHp' => 1000,
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
                'CharaHp' => 1250,
                'CharaAttack' => "Attack",
                'CharaAttackDamage' => 300,
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
                'CharaHp' => 1250,
                'CharaAttack' => "Attack",
                'CharaAttackDamage' => 300,
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
                'CharaHp' => 1250,
                'CharaAttack' => "Attack",
                'CharaAttackDamage' => 300,
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
            $Pass = strtolower(readline(""));
        }
        public function Input() {
            $this->PlayerSelection =  strtolower(readline("                                        Votre sélection > "));
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
        public $PlayerHpF;
        public $PlayerLevel;
        public $PlayerFinalType;
        public $PlayerInfos;
        public $PlayerAttack;
        public $PlayerAttackDamage;
        public $PlayerSpecAttack;
        public $PlayerSpecAttackDamage;
        public $PlayerBlock;
        public $PlayerBlockDamage;
        public $PlayerBlockState;
        public $EnemyLevel;
        public $EnemyId;
        public $EnemyMainId;
        public $EnemyHp;
        public $EnemyHpF;
        public $EnemyInfos;
        public $EnemyType;
        public $EnemyAttack;
        public $EnemyChoice;
        public $EnemyAttackDamage;
        public $EnemySpecAttack;
        public $EnemySpecAttackDamage;
        public $EnemyBlock;
        public $EnemyBlockDamage;
        public $EnemyBlockState;
        public $BddVilainNb;
        public $BddVilainNbArray = array();
        public $BddHeroNbArray = array();
        public $BddHeroNb;
        public $BddRand;
        public $LuckId;
        public $BddVilain = array();
        public $BddHero = array();
        public $CurrentPlayerChara = array();
        public $CurrentEnemyChara = array();
        public function __construct() {
        }
        public function PlayerSelection() {
            $this->CleanCmd();
                    echo "Souhaitez-vous jouer un héros ou un vilain ? (h/v) \n";
                    $this->PlayerType = strtolower(readline("> ")); 
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
                            $this->PlayerFinalType = "h";
                            $RandomNb = rand(0,$this->BddHeroNb-1);
                            $this->CurrentPlayerChara[] = $this->BddHero[$RandomNb];
                            $this->CleanCmd();
                            $this->HeroPlayer();
                            break;
                        case "v":
                            $this->PlayerFinalType = "h";
                            $RandomNb = rand(0,$this->BddVilainNb-1);
                            $this->CurrentPlayerChara[] = $this->BddVilain[$RandomNb];
                            $this->CleanCmd();
                            $this->VilainPlayer();
                            break;
                    }
        }
        public function HeroSpawner() {
            foreach ($this->BddHero as $element) {
                $Nb = $element['CharaId'];
                array_push($this->BddHeroNbArray,$Nb);
            }
            $Max = count($this->BddHeroNbArray);
            $this->BddRand = rand(0,$Max-1);
            $this->CleanCmd();
            $Id = $this->BddHeroNbArray[$this->BddRand];
            $this->CurrentEnemyChara[] = $this->BddHero[$Id];
            $this->ReceiveEnemyInfos();
            $this->EnemyIntro();
        }
        public function VilainSpawner() {
            foreach ($this->BddVilain as $element) {
                $Nb = $element['CharaId'];
                array_push($this->BddVilainNbArray,$Nb);
            }
            $Max = count($this->BddVilainNbArray);
            $this->BddRand = rand(0,$Max-1);
            $this->CleanCmd();
            $Id = $this->BddVilainNbArray[$this->BddRand];
            $this->CurrentEnemyChara[] = $this->BddVilain[$Id];
            $this->ReceiveEnemyInfos();
            $this->EnemyIntro();
        }
        public function EnemyIntro() {
            $this->CleanCmd();
            echo $this->EnemyInfos . " vient d'apparaitre !";
            $this->Pass();
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
            $this->EnemyIntro();
            $LuckNb = rand(0,1);
            switch ($LuckNb) {
                case 0:
                    $this->LuckId = 0;
                    $this->CleanCmd();
                    echo $this->EnemyInfos . " vous attaque avec " . $this->EnemyAttack . " et vous inflige " . $this->EnemyAttackDamage . " points de dégats."; 
                    $this->Pass();
                    $this->PlayerHpF = $this->PlayerHp - $this->EnemyAttackDamage;
                    $this->CleanCmd();
                    echo "Vous avez " . $this->PlayerHpF . " points de vie";
                    $this->PlayerHp = $this->PlayerHpF;
                    $this->Pass();
                    $this->VilainFightEngine();
                    break;
                case 1:
                    $this->LuckId = 1;
                    $this->CleanCmd();
                    echo "Vous attaquez " . $this->EnemyInfos . " avec " . $this->PlayerAttack . " et effectué " . $this->PlayerAttackDamage . " points de dégats";
                    $this->Pass();
                    $this->EnemyHpF = $this->EnemyHp - $this->PlayerAttackDamage;
                    $this->CleanCmd();
                    echo "La vie de " . $this->EnemyInfos . " est à " . $this->EnemyHpF;
                    $this->EnemyHp = $this->EnemyHpF;
                    $this->Pass();
                    echo $this->EnemyMainId;
                    $this->VilainFightEngine();
                    break;                    
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
            $RandomEnemy = rand(0,$this->BddHeroNb-1);
            $this->CurrentEnemyChara[] = $this->BddHero[$RandomEnemy];
            $this->ReceiveEnemyInfos();
            $this->EnemyIntro();
            $LuckNb = rand(0,1);
            switch ($LuckNb) {
                case 0:
                    $this->LuckId = 0;
                    $this->CleanCmd();
                    echo $this->EnemyInfos . " vous attaque avec " . $this->EnemyAttack . " et vous inflige " . $this->EnemyAttackDamage . " points de dégats."; 
                    $this->Pass();
                    $this->PlayerHpF = $this->PlayerHp - $this->EnemyAttackDamage;
                    $this->CleanCmd();
                    echo "Vous avez " . $this->PlayerHpF . " points de vie";
                    $this->PlayerHp = $this->PlayerHpF;
                    $this->Pass();
                    $this->HeroFightEngine();
                    break;
                case 1:
                    $this->LuckId = 1;
                    $this->CleanCmd();
                    echo "Vous attaquez " . $this->EnemyInfos . " avec " . $this->PlayerAttack . " et effectué " . $this->PlayerAttackDamage . " points de dégats";
                    $this->Pass();
                    $this->EnemyHpF = $this->EnemyHp - $this->PlayerAttackDamage;
                    $this->CleanCmd();
                    echo "La vie de " . $this->EnemyInfos . " est à " . $this->EnemyHpF;
                    $this->EnemyHp = $this->EnemyHpF;
                    $this->Pass();
                    echo $this->EnemyMainId;
                    $this->HeroFightEngine();
                    break;                    
                }
                $this->Pass();
        }
        public function Enemy() {
            $this->EnemyChoice = rand(0,2);
            $this->CleanCmd();
            echo "Au tour de l'ennemi : " . $this->EnemyInfos . "\nIl a " . $this->EnemyHp . " points de vie.\n";
            switch ($this->EnemyChoice) {
                case 0:
                    $this->EnemyBlockState = 0;
                    if ($this->PlayerHp <= 0) {
                        $this->PlayerDie();
                    } elseif ($this->PlayerBlockState = 0) {
                        $this->EnemyBlockState = 0;
                        echo $this->EnemyInfos . " vous attaque avec " . $this->EnemyAttack . " et vous inflige " . $this->EnemyAttackDamage . " points de dégats.\n";
                        $this->Pass();
                        $this->PlayerHp = $this->PlayerHp - $this->PlayerAttackDamage;
                        $this->Player();
                    } elseif ($this->PlayerBlockState == 1) {
                        echo $this->EnemyInfos . " a essayé de vous attaquer mais vous l'avez évité !";
                        $this->Pass();
                        $this->EnemyBlockState = 0;
                        $this->Player();
                    }
                    break;
                case 1:
                    $this->EnemyBlockState = 1;
                    if ($this->PlayerHp <= 0) {
                        $this->PlayerDie();
                    }
                    echo $this->EnemyInfos . " utilise la défense " . $this->EnemyBlock . " lors du prochain tour !";
                    $this->Pass();
                    $this->EnemyBlockState = 1;
                    $this->Player();
                    break;
                case 2:
                    $this->EnemyBlockState = 0;
                    if ($this->PlayerHp <= 0) {
                        $this->PlayerDie();
                    }
                    $this->EnemyBlockState = 0;
                    echo $this->EnemyInfos . " ne fait rien et passe son tour";
                    $this->Pass();
                    $this->Player();
                    break;
            }
        }
        public function Player() {
            $this->CleanCmd();
            echo "Au tour du joueur : " . $this->PlayerInfos;
            echo "\n Vous avez " . $this->PlayerHp . " points de vie.";
            echo "\nQue voulez-vous faire ? \n";
            echo "1. Attaque normale\n2. Attaque spéciale\n3. Défense";
            $PlayerChoice = readline("> "); // here we get the input of the player
            switch ($PlayerChoice) { // here we have the player's actions
                case 1:
                    $this->PlayerBlockState = 0;
                    if ($this->EnemyBlockState == 0) {
                        echo "\nVous utilisez votre attaque (" . $this->PlayerAttack . ") et infligez " . $this->PlayerAttackDamage . " points de dégats à " . $this->EnemyInfos;
                        $this->EnemyHpF = $this->EnemyHp - $this->PlayerAttackDamage;
                        $this->EnemyHp = $this->EnemyHpF;
                        $this->Pass();
                        if ($this->EnemyHp > 0) {
                            $this->Enemy();
                        } elseif ($this->EnemyHp <= 0){
                            echo "NEWWWW PERSO";
                            $this->Pass();
                            switch ($this->PlayerFinalType) {
                                case "h":
                                    $this->VilainSpawner();
                                    break;
                                case "v":
                                    $this->HeroSpawner();
                                    break;
                            };
                        }
                    } elseif ($this->EnemyBlockState == 1) {
                        echo $this->EnemyInfos . " a utilisé sa defense.";
                        $this->EnemyBlockState = 0;
                        $this->Pass();
                        $this->CleanCmd();
                        $this->Enemy();
                    }
                    break;
                case 2:
                    $this->PlayerBlockState = 0;
                    if ($this->EnemyBlockState == 0) {
                        echo "\nVous utilisez votre attaque spéciale (" . $this->PlayerSpecAttack . ") et infligez " . $this->PlayerSpecAttackDamage . " points de dégats à " . $this->EnemyInfos;
                        $this->EnemyHpF = $this->EnemyHp - $this->PlayerSpecAttackDamage;
                        $this->EnemyHp = $this->EnemyHpF;
                        $this->Pass();
                        if ($this->EnemyHp > 0) {
                            $this->Enemy();
                        } elseif ($this->EnemyHp <= 0){
                            echo "MORT";
                            $this->Pass();
                            switch ($this->PlayerFinalType) {
                                case "h":
                                    $this->VilainSpawner();
                                    break;
                                case "v":
                                    $this->HeroSpawner();
                                    break;
                            };
                        }
                    } elseif ($this->EnemyBlockState == 1) {
                        echo $this->EnemyInfos . " a utilisé sa defense.";
                        $this->EnemyBlockState = 0;
                        $this->Pass();
                        $this->CleanCmd();
                        $this->Enemy();
                    }
                    break;
                case 3:
                    $this->PlayerBlockState = 1;
                    if ($this->EnemyHp >= 0) {
                        $this->Enemy();
                    } else {
                        $this->CleanCmd();
                        echo "SPAWN";
                        $this->Pass();
                    }
                    break;
            }
        }
        public function VilainFightEngine() {
            switch ($this->LuckId) {
                case 0:
                    while ($this->PlayerHp >= 0) {
                        $this->Player();
                        $this->CleanCmd();
                        $this->Enemy();
                    }
                    break;
                case 1:
                    while ($this->PlayerHp >= 0) {
                        if ($this->EnemyHp <= 0) {
                            $this->CleanCmd();
                            echo "Vous avez battu " . $this->EnemyInfos . " !";
                            unset($this->BddVilain[$this->EnemyMainId]);
                            $this->Pass();
                            $this->CurrentEnemyChara = array();
                            $this->VilainSpawner();
                            $this->ReceiveEnemyInfos();
                            $this->EnemyIntro();
                        } else {
                            $this->CleanCmd();
                            $this->Enemy();
                        }
                        break;
                    }
                }
        }
        public function HeroFightEngine() {
            switch ($this->LuckId) {
                case 0:
                    while ($this->PlayerHp >= 0) {
                        $this->Player();
                        $this->CleanCmd();
                        $this->Enemy();
                    }
                    break;
                case 1:
                    while ($this->PlayerHp >= 0) {
                        if ($this->EnemyHp <= 0) {
                            $this->CleanCmd();
                            echo "Vous avez battu " . $this->EnemyInfos . " !";
                            unset($this->BddHero[$this->EnemyMainId]);
                            $this->Pass();
                            $this->CurrentEnemyChara = array();
                            $this->HeroSpawner();
                            $this->ReceiveEnemyInfos();
                            $this->EnemyIntro();
                        } else {
                            $this->CleanCmd();
                            $this->Enemy();
                        }
                        break;
                    }
                }
        }
        public function PlayerDie() {
            $this->CleanCmd();
            echo "VOUS ÊTES MORT !";
            $this->Pass();
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
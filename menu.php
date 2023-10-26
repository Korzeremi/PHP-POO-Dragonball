<?php
    Class Menu {
        public $UserSelection = 0;
        public $CharaState = 0;
        public $TempSavefile;
        public function __construct($UserSelection,$CharaState,$TempSavefile) {
            $this->UserSelection = $UserSelection;
            $this->CharaState = $CharaState;
            $this->TempSavefile = $TempSavefile;
        }
    }
?>
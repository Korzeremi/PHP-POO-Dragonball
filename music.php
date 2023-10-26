<?php
    function AudioManager() {
        $player = "New-Object System.Media.SoundPlayer";
        $MenuMusic = "music.mp3";
        $CMD = 'powershell -c cd \;';
        $MenuMusicCMD = 'powershell -c (' . $player . ' \Users\korze\Documents\Pro\IPSSI\BTC2-25.1\PROJETS\PHP-POO\BTC2-PHP-POO-Dragonball\menu.wav).PlaySync();';
        exec($CMD);
        exec($MenuMusicCMD);    
    }

    AudioManager();
?>
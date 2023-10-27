<?php
function Sauvegarde() {
  $file = fopen("PlayerTempSaveFile.txt", "w");
  fwrite($file, "test");
  fclose($file);
  echo "Sauvegarde effectuée";
}

Sauvegarde();
?>
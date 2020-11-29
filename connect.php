<?php
//Csatlakozád az adatbázishoz
$MySqliLink = mysqli_connect('localhost', 'root', '', 'eskuvo_db');

//Kapcsolat tesztelése
if (!$MySqliLink) {
    die('Kapcsolódási hiba (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
if (!mysqli_close($MySqliLink)) {echo "Nem sikerült bezárni a kapcsolatot.";}

// Kapcsolatinformációk tesztelése
echo ' Host infó: ' . mysqli_get_host_info($MySqliLink) . "n ";
$HostInfo = mysqli_get_host_info($MySqliLink);
if ($HostInfo > '') 
  {
  echo "Host infó: $HostInfo";
  }
else
  {
  echo die("Ez a kapcsolat bizony nem létezik.");
  }  
mysqli_close($link);
?>   
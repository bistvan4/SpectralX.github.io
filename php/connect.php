<?php
$link = mysqli_connect("127.0.0.1", "root", "", "kapcsolat");

if (!$link) {
    echo "Hiba: Nem csatlakoztatható az adatbázis!" . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Sikeres kapcsolat!." . PHP_EOL;
echo "Kiszolgáló információ: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>
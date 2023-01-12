<?php

    $file_with_ips  = 'ip.json';
    $ips = file_get_contents($file_with_ips);
    $contenido = json_decode(ips, true);

if ( isset($_GET["mostrar"])){
    echo "<p>IP: <b>".$contenido[$_GET["k"]] ."</b></p>";
}
else{
    $contenido[$_GET["k"]] = $_SERVER[REMOTE_ADDR];
    file_put_contents($file_with_ips, json_encode($contenido));
}
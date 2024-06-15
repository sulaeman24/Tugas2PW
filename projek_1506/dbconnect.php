<?php
    $server = '192.168.10.253:3306'; 
    $username = 'a122206818';
    $password = 'polke001';
    $namadb = 'a122206818';

   $k = new mysqli($server, $username, $password, $namadb);
   if($k->connect_errno)
   {
        echo "failed ", $k->connect_error;
        exit();
   }
<?php

try {
    $db=new PDO("mysql:host=localhost;dbname=ayar", 'root','');
    //echo "veri tabanı bağlantısı başarılı";
} catch (PDOExpception $e) 
{
   echo $e->getMessage();
}

?>



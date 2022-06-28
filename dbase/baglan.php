<?php
try{
        $db=new PDO("mysql:host=localhost;dbname=denemesitesi;",'root','12345678');
        // $db=new PDO("mysql:host=localhost;dbname=database name",'database username','database password')
     // echo "Veritabanı Baglantısı Başarılı";
}
catch (PDOException $e)
{
    echo $e->getMessage();
}
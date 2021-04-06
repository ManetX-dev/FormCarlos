<?php

try{

    $pdo = new PDO("pgsql:host=localhost;dbname=form_carlos", "postgres", "postgres"); 

} catch(PDOException $e){

    echo $e->getMessage();

}

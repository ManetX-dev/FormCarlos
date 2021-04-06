<?php 

require '../database/connect.php';

try
{

    $sqlQuery = $pdo->query("SELECT cidade FROM localidade WHERE uf = '".$_POST['uf']."'");

    if($sqlQuery->rowCount() > 0){

        echo json_encode($sqlQuery->fetchAll(PDO::FETCH_ASSOC));

    }

} catch(Exception $e){

    echo $e->getMessage();

}






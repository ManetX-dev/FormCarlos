<?php 

require '../database/connect.php';

try
{

    $sqlQuery = $pdo->query("SELECT ano FROM cargo_pre_candidatura WHERE id = '".$_POST['id']."'");

    if($sqlQuery->rowCount() > 0){

        echo json_encode($sqlQuery->fetchAll(PDO::FETCH_ASSOC));

    }

} catch(Exception $e){

    echo $e->getMessage();

}






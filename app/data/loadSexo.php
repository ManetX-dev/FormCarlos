<?php 

require '../database/connect.php';

try
{

    $sqlQuery = $pdo->query("SELECT * FROM sexo ORDER BY ordem ASC");

    if($sqlQuery->rowCount() > 0){

        echo json_encode($sqlQuery->fetchAll(PDO::FETCH_ASSOC));

    }

} catch(Exception $e){

    echo $e->getMessage();

}






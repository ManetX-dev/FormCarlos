<?php 

require '../database/connect.php';

try
{

    $sqlQuery = $pdo->query("SELECT * FROM deficiencias ORDER BY descricao ASC");

    if($sqlQuery->rowCount() > 0){

        echo json_encode($sqlQuery->fetchAll(PDO::FETCH_ASSOC));

    }

} catch(Exception $e){

    echo $e->getMessage();

}






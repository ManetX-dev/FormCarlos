<?php

if(isset($_POST['next'])){

    $_SESSION['dadosEleitorais'] = $_POST;

    header('Location:../../view/DadosPessoais.php');

}

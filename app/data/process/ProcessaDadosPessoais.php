<?php

if(isset($_POST['next'])){

    $_SESSION['dadosPessoais'] = $_POST;

    header('Location:../../view/Endereco.php');

}else if(isset($_POST['back'])){

    header('Location:../../view/DadosEleitorais.php');

}

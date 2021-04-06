<?php

if(isset($_POST['next'])){

    $_SESSION['dadosEndereco'] = $_POST;

    header('Location:../../view/Contatos.php');

}else if(isset($_POST['back'])){

    header('Location:../../view/DadosPessoais.php');

}

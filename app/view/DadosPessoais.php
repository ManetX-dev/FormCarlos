<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="../../layout/css/main.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8550e0fa2e.js" crossorigin="anonymous"></script>
    <script src="../../layout/js/main.js"></script>
    <script src="../../lib/jquery/jquery-3.6.0.min.js"></script>
    <script src="../../app/data/jquery/jquery-dados-pessoais.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <br>
    <br>
    <div class="container">
        <form class="row g-3" action="../data/process/ProcessaDadosPessoais.php" method="POST">
            <!-- <div class="col-md-12">
                <center>
                    <ul id="progressbar">
                        <li class="active">Personal Details</li>
                        <li>Social Profiles</li>
                        <li>Account Setup</li>
                    </ul>
                </center>
            </div> -->
            
            <div class="col-md-8">
                <h3><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Dados Pessoais</h3>
            </div>
            <div class="col-md-2">
                <button name="back" type="submit" class="btn btn-datavence-voltar" style="width: 100%;"><i class="fas fa-arrow-left">&nbsp;&nbsp;&nbsp;</i>VOLTAR</button>
            </div>
            <div class="col-md-2">
                <button name="next" type="submit" class="btn btn-datavence" style="width: 100%;">AVANÇAR&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></button>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <br>
            <div class="col-md-5">
                <label for="nome" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control" id="nome">
            </div>
            <div class="col-md-4">
                <label for="nomePolitico" class="form-label">Nome Político</label>
                <input name="nome_politico" type="text" class="form-control" id="nomePolitico">
            </div>
            <div class="col-md-3">
                <label for="sexo" class="form-label">Sexo</label>
                <select name="sexo" id="sexo" class="form-select" aria-label="Default select example">
                </select>
            </div>
            <div class="col-md-2">
                <label for="nascimento" class="form-label">Nascimento</label>
                <input name="nascimento" type="date" class="form-control" id="nascimento">
            </div>
            <div class="col-md-2">
                <label for="cpf" class="form-label">CPF</label>
                <input name="cpf" type="text" class="form-control" id="cpf" onInput="cpfFormat(this)">
            </div>
            <div class="col-md-2">
                <label for="rg" class="form-label">RG</label>
                <input name="rg" type="text" class="form-control" id="rg" onInput="onlyNumbers(this, 15)">
            </div>
            <div class="col-md-3">
                <label for="escolaridade" class="form-label">Escolaridade</label>
                <select name="escolaridade" id="escolaridade" class="form-select" aria-label="Default select example">
                </select>
            </div>
            <div class="col-md-3">
                <label for="naturalidade" class="form-label">Naturalidade</label>
                <select name="naturalidade" id="naturalidade" class="form-select" aria-label="Default select example">
                </select>
            </div>
            <div class="col-md-4">
                <label for="cor_raca" class="form-label">Cor/Raça</label>
                <select name="cor_raca" id="cor_raca" class="form-select" aria-label="Default select example">
                </select>
            </div>
            <div class="col-md-4">
                <label for="religiao" class="form-label">Religião</label>
                <select name="religiao" id="religiao" class="form-select" aria-label="Default select example">
                </select>
            </div>
            <div class="col-md-4">
                <label for="deficiencia" class="form-label">Possui alguma deficiência?</label>
                <select name="defifiencia" id="deficiencia" class="form-select" aria-label="Default select example">
                </select>
            </div>
            <div class="col-md-9">
                <label for="profissao" class="form-label">Profissão</label>
                <select name="profissao" id="profissao" class="form-select" aria-label="Default select example">
                </select>
            </div>
            <div class="col-md-3">
                <label for="pre_candidato" class="form-label">É pré-candidato?</label>
                <select name="pre_candidato" id="pre_candidato" class="form-select" aria-label="Default select example">
                    <option value="1">SIM</option>
                    <option value="2" selected>NÃO</option>
                </select>
            </div>
            <div class="col-md-10">
                <label id="cargo_label" for="cargo" class="form-label">Cargo</label>
                <select name="cargo" id="cargo" class="form-select" aria-label="Default select example">
                </select>
            </div>
            <div class="col-md-2">
                <label id="ano_label" for="ano" class="form-label">Ano</label>
                <input name="ano" type="text" id="ano" class="form-control" disabled>
                </input>
            </div>
            <div class="col-md-6">
                <label for="nome_pai" class="form-label">Nome do pai</label>
                <input name="nome_pai" type="text" class="form-control" id="nome_pai">
            </div>
            <div class="col-md-6">
                <label for="nome_mae" class="form-label">Nome da mãe</label>
                <input name="nome_mae" type="text" class="form-control" id="nome_mae">
            </div>
            <div id="secretarias-div" class="col-md-12">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
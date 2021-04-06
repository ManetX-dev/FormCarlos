<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="../../layout/css/main.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8550e0fa2e.js" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <br>
    <br>
    <div class="container container-form">
        <form class="row g-3" action="#" method="POST">
            <!-- <div class="col-md-12">
                <center>
                    <ul id="progressbar">
                        <li class="active">Personal Details</li>
                        <li>Social Profiles</li>
                        <li>Account Setup</li>
                    </ul>
                </center>
            </div> -->
            
            <div class="col-md-10">
                <h3><i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp;Confirmação</h3>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-datavence-voltar" style="width: 100%;"><i class="fas fa-arrow-left">&nbsp;&nbsp;&nbsp;</i>VOLTAR</button>
            </div>
            <!-- <div class="col-md-2">
                <button type="submit" class="btn btn-datavence" style="width: 100%;">AVANÇAR&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></button>
            </div> -->
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-12">
                <center><h4>Após analisar se todos os dados estão corretos, clique no botão confirmar para concluir a sua filiação </h4></center>
            </div>

            <!-- Dados Eleitorais -->
            <div class="col-md-10">
                <br>
                <h4><i class="fas fa-vote-yea"></i>&nbsp;&nbsp;&nbsp;Dados Eleitorais</h4>
            </div>
            <br>
            <div class="col-md-3">
                <label for="titulo" class="form-label">Titulo Eleitoral</label>
                <input type="text" class="form-control" id="titulo">
            </div>
            <div class="col-md-2">
                <label for="uf" class="form-label">UF</label>
                <select id="uf" class="form-select" aria-label="Default select example">
                    <option value="1">RN</option>
                    <option value="2">SP</option>
                    <option value="3">RJ</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="municipio" class="form-label">Município do Título</label>
                <input type="text" class="form-control" id="municipio">
            </div>
            <div class="col-md-2">
                <label for="zona" class="form-label">Zona</label>
                <input type="text" class="form-control" id="zona">
            </div>
            <div class="col-md-2">
                <label for="secao" class="form-label">Seção</label>
                <input type="text" class="form-control" id="secao">
            </div>
            <div class="col-md-12">
                <hr>
            </div>

            <!-- Dados Pessoais -->
            <div class="col-md-10">
                <br>
                <h4><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Dados Pessoais</h4>
            </div>
            <div class="col-md-5">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome">
            </div>
            <div class="col-md-4">
                <label for="nomePolitico" class="form-label">Nome Político</label>
                <input type="text" class="form-control" id="nomePolitico">
            </div>
            <div class="col-md-3">
                <label for="sexo" class="form-label">Sexo</label>
                <select id="sexo" class="form-select" aria-label="Default select example">
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                    <option value="3">Outro</option>
                    <option value="3">Não informado</option>

                </select>
            </div>
            <div class="col-md-2">
                <label for="nascimento" class="form-label">Nascimento</label>
                <input type="date" class="form-control" id="nascimento">
            </div>
            <div class="col-md-2">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf">
            </div>
            <div class="col-md-2">
                <label for="rg" class="form-label">RG</label>
                <input type="text" class="form-control" id="rg">
            </div>
            <div class="col-md-3">
                <label for="escolaridade" class="form-label">Escolaridade</label>
                <select id="escolaridade" class="form-select" aria-label="Default select example">
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                    <option value="3">Outro</option>
                    <option value="3">Não informado</option>

                </select>
            </div>
            <div class="col-md-3">
                <label for="naturalidade" class="form-label">Naturalidade</label>
                <select id="naturalidade" class="form-select" aria-label="Default select example">
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                    <option value="3">Outro</option>
                    <option value="3">Não informado</option>

                </select>
            </div>
            <div class="col-md-4">
                <label for="cor_raca" class="form-label">Cor/Raça</label>
                <select id="cor_raca" class="form-select" aria-label="Default select example">
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                    <option value="3">Outro</option>
                    <option value="3">Não informado</option>

                </select>
            </div>
            <div class="col-md-4">
                <label for="religiao" class="form-label">Religião</label>
                <select id="religiao" class="form-select" aria-label="Default select example">
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                    <option value="3">Outro</option>
                    <option value="3">Não informado</option>

                </select>
            </div>
            <div class="col-md-4">
                <label for="deficiencia" class="form-label">Possui alguma deficiência?</label>
                <select id="deficiencia" class="form-select" aria-label="Default select example">
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                    <option value="3">Outro</option>
                    <option value="3">Não informado</option>

                </select>
            </div>
            <div class="col-md-9">
                <label for="profissao" class="form-label">Profissão</label>
                <select id="profissao" class="form-select" aria-label="Default select example">
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                    <option value="3">Outro</option>
                    <option value="3">Não informado</option>

                </select>
            </div>
            <div class="col-md-3">
                <label for="pre_candidato" class="form-label">É pré-candidato?</label>
                <select id="pre_candidato" class="form-select" aria-label="Default select example">
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                    <option value="3">Outro</option>
                    <option value="3">Não informado</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="nome_pai" class="form-label">Nome do pai</label>
                <input type="text" class="form-control" id="nome_pai">
            </div>
            <div class="col-md-6">
                <label for="nome_mae" class="form-label">Nome da mãe</label>
                <input type="text" class="form-control" id="nome_mae">
            </div>
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">APOSENTADOS, PENSIONISTAS E IDOSOS</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">DESENVOLVIMENTO SUSTENTAVEL, MEIO AMBIENTE E AGRICULTURA FAMILIAR</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">IGUALDADE SOCIAL</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">JOVEM</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">MOVIMENTO SINDICAL</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">MULHER</label>
                </div> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">PESSOA COM DEFICIENCIA</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">PROTECAO AOS ANIMAIS</label>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>

            <!-- Endereco -->
            <div class="col-md-10">
                <br>
                <h4><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;Endereço</h4>
            </div>
            <div class="col-md-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep">
            </div>
            <div class="col-md-7">
                <label for="logradouro" class="form-label">Logradouro</label>
                <input type="text" class="form-control" id="logradouro">
            </div>
            <div class="col-md-2">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero">
            </div>
            <div class="col-md-4">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro">
            </div>
            <div class="col-md-3">
                <label for="complemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="complemento">
            </div>
            <div class="col-md-5">
                <label for="municipio" class="form-label">Município</label>
                <input type="text" class="form-control" id="municipio" disabled>
            </div>
            <div class="col-md-12">
                <hr>
            </div>

            <!-- Contatos -->
            <div class="col-md-10">
                <br>
                <h4><i class="fas fa-address-book"></i>&nbsp;&nbsp;&nbsp;Contatos</h4>
            </div>
            <div class="col-md-3">
                <label for="tipo_contato" class="form-label">Tipo de contato</label>
                <select id="tipo_contato" class="form-select" aria-label="Default select example">
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                    <option value="3">Outro</option>
                    <option value="3">Não informado</option>

                </select>
            </div>
            <div class="col-md-3">
                <label for="contato" class="form-label">Contato</label>
                <input type="text" class="form-control" id="contato">
            </div>
            <div class="col-md-4">
                <label for="observacao" class="form-label">Observação</label>
                <input type="text" class="form-control" id="observacao">
            </div>
            <div class="col-md-2">
                <label for="observacao" class="form-label">&nbsp;</label>
                <button type="submit" class="btn btn-datavence-voltar" style="width: 100%;">Incluir&nbsp;&nbsp;&nbsp;<i class="fas fa-plus-circle"></i></button>
            </div>
            <div class="col-md-12">
                <br>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Tipo Contato</th>
                        <th scope="col">Contato</th>
                        <th scope="col">Observação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>E-mail</td>
                        <td>manoelplneto456@gmail.com</td>
                        <td class="td-empty">-</td>
                        </tr>
                        <tr>
                        <td>Celular</td>
                        <td>84 99176-5174</td>
                        <td class="td-empty">-</td>
                        </tr>
                        <tr>
                        <td>Instagram</td>
                        <td>@manetx</td>
                        <td class="td-empty">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-8">
                <h3>&nbsp;</h3>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-datavence-voltar" style="width: 100%;">CANCELAR&nbsp;&nbsp;&nbsp;<i class="fas fa-times"></i></button>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-datavence" style="width: 100%;">CONFIRMAR&nbsp;&nbsp;&nbsp;<i class="fas fa-check"></i></button>
            </div>
        </form>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
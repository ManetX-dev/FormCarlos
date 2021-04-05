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
    <div class="container">
        <form class="row g-3" action="Confirmacao.php" method="POST">
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
                <h3><i class="fas fa-address-book"></i>&nbsp;&nbsp;&nbsp;Contatos</h3>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-datavence-voltar" style="width: 100%;"><i class="fas fa-arrow-left">&nbsp;&nbsp;&nbsp;</i>VOLTAR</button>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-datavence" style="width: 100%;">AVANÇAR&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></button>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <br>
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
        </form>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
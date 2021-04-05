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
        <form class="row g-3" action="DadosPessoais.php" method="POST">
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
                <h3><i class="fas fa-vote-yea"></i>&nbsp;&nbsp;&nbsp;Dados Eleitorais</h3>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-datavence" style="width: 100%;">AVANÇAR&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></button>
            </div>
            <div class="col-md-12">
                <hr>
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
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
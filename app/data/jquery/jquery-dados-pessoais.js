$(function(){

    $(document).ready(function(){

        //Carrega combo "Sexo"
        var url = '../data/loadSexo.php';

        var box_select = $('#sexo');

        $.ajax({
            dataType: 'json',
            url: url,
            type: "POST",
            success: function(response){
                if(response){


                    box_select.html('');

                    $.each(response, function(i, val){
                        // Append tem a função de inserir
                        box_select.append("<option value='"+val.id+"'>"+val.descricao+"</option>");
                    });
                }
                else{
                    box_select.html('');
                }
            },
            error: function(response, xhr, ajaxOptions, thrownError){

                alert('Erro ao carregar sexos.');
            }
        });

     });

     $(document).ready(function(){

        //Carrega combo "Escolaridade"

        var url = '../data/loadEscolaridade.php';

        var box_select = $('#escolaridade');

        $.ajax({
            dataType: 'json',
            url: url,
            type: "POST",
            success: function(response){
                if(response){


                    box_select.html('');

                    $.each(response, function(i, val){
                        // Append tem a função de inserir
                        box_select.append("<option value='"+val.id+"'>"+val.descricao+"</option>");
                    });
                }
                else{
                    box_select.html('');
                }
            },
            error: function(response, xhr, ajaxOptions, thrownError){

                alert('Erro ao carregar escolaridades.');
            }
        });

     });

     $(document).ready(function(){

        //Carrega combo "Naturalidade"
        var url = '../data/loadNaturalidade.php';

        var box_select = $('#naturalidade');

        $.ajax({
            dataType: 'json',
            url: url,
            type: "POST",
            success: function(response){
                if(response){


                    box_select.html('');

                    $.each(response, function(i, val){
                        // Append tem a função de inserir
                        box_select.append("<option value='"+val.id+"'>"+val.descricao+"</option>");
                    });
                }
                else{
                    box_select.html('');
                }
            },
            error: function(response, xhr, ajaxOptions, thrownError){

                alert('Erro ao carregar naturalidades.');
            }
        });

     });

     $(document).ready(function(){

        //Carrega combo "Cor/Raca"
        var url = '../data/loadCorRaca.php';

        var box_select = $('#cor_raca');

        $.ajax({
            dataType: 'json',
            url: url,
            type: "POST",
            success: function(response){
                if(response){


                    box_select.html('');

                    $.each(response, function(i, val){
                        // Append tem a função de inserir
                        box_select.append("<option value='"+val.id+"'>"+val.descricao+"</option>");
                    });
                }
                else{
                    box_select.html('');
                }
            },
            error: function(response, xhr, ajaxOptions, thrownError){

                alert('Erro ao carregar raças.');
            }
        });

     });

     $(document).ready(function(){

        //Carrega combo "Religiao"
        var url = '../data/loadReligiao.php';

        var box_select = $('#religiao');

        $.ajax({
            dataType: 'json',
            url: url,
            type: "POST",
            success: function(response){
                if(response){


                    box_select.html('');

                    $.each(response, function(i, val){
                        // Append tem a função de inserir
                        box_select.append("<option value='"+val.id+"'>"+val.descricao+"</option>");
                    });
                }
                else{
                    box_select.html('');
                }
            },
            error: function(response, xhr, ajaxOptions, thrownError){

                alert('Erro ao carregar religiões.');
            }
        });

     });

     $(document).ready(function(){

        //Carrega combo "Deficiências"
        var url = '../data/loadDeficiencia.php';

        var box_select = $('#deficiencia');

        $.ajax({
            dataType: 'json',
            url: url,
            type: "POST",
            success: function(response){
                if(response){


                    box_select.html('');

                    $.each(response, function(i, val){
                        // Append tem a função de inserir
                        box_select.append("<option value='"+val.id+"'>"+val.descricao+"</option>");
                    });
                }
                else{
                    box_select.html('');
                }
            },
            error: function(response, xhr, ajaxOptions, thrownError){

                alert('Erro ao carregar deficiências.');
            }
        });

     });

     $(document).ready(function(){

        //Carrega combo "Profissão"
        var url = '../data/loadProfissao.php';

        var box_select = $('#profissao');

        $.ajax({
            dataType: 'json',
            url: url,
            type: "POST",
            success: function(response){
                if(response){


                    box_select.html('');

                    $.each(response, function(i, val){
                        // Append tem a função de inserir
                        box_select.append("<option value='"+val.id+"'>"+val.nome+"</option>");
                    });
                }
                else{
                    box_select.html('');
                }
            },
            error: function(response, xhr, ajaxOptions, thrownError){

                alert('Erro ao carregar profissões.');
            }
        });

     });

     $(document).ready(function(){

        //Carrega combo "Cargo"
        var url = '../data/loadCargo.php';

        var box_select = $('#cargo');

        $.ajax({
            dataType: 'json',
            url: url,
            type: "POST",
            success: function(response){
                if(response){


                    box_select.html('');

                    $.each(response, function(i, val){
                        // Append tem a função de inserir
                        box_select.append("<option value='"+val.id+"'>"+val.descricao+"</option>");
                    });
                }
                else{
                    box_select.html('');
                }
            },
            error: function(response, xhr, ajaxOptions, thrownError){

                alert('Erro ao carregar cargos.');
            }
        });

     });

     $(document).ready(function(){

        //Carrega checkbox "Secretarias"
        var url = '../data/loadSecretarias.php';

        var box_select = $('#secretarias-div');

        $.ajax({
            dataType: 'json',
            url: url,
            type: "POST",
            success: function(response){
                if(response){


                    box_select.html('');

                    $.each(response, function(i, val){
                        // Append tem a função de inserir
                        box_select.append('<div idclass="form-check"><input class="form-check-input" type="checkbox" value="'+val.id+'" id="secretaria"'+val.id+'" name="secretaria"'+val.id+'">&nbsp;&nbsp;&nbsp;<label class="form-check-label" for="secretaria'+val.id+'">'+val.descricao+'</label></div>');
                        // box_select.append('');

                    });
                }
                else{
                    box_select.html('');
                }
            },
            error: function(response, xhr, ajaxOptions, thrownError){

                alert('Erro ao carregar secretarias.');
            }
        });

     });
     
     $("#pre_candidato").on("change", function(){

        // console.log($("#pre_candidato :selected").val());

        var value = $("#pre_candidato :selected").val();

        if(value == '1'){

            $("#cargo_label").show();
            $("#cargo").show();
            $("#ano_label").show();
            $("#ano").show();

        } else if(value == 2){

            $("#cargo_label").hide();
            $("#cargo").hide();
            $("#ano_label").hide();
            $("#ano").hide();
        }
        

     })

     $("#cargo").on("change", function(){

        //Carrega combo "Ano -> Cargo"
        var cargo = $('#cargo :selected').val();

        var url = '../data/loadAnoCargo.php';

        var input = $('#ano');

        $.ajax({
            dataType: 'json',
            url: url,
            type: "POST",
            data: { id : cargo},
            success: function(response){
                if(response){

                    $.each(response, function(i, val){
                        // Append tem a função de inserir
                        input.val(val.ano);

                    });
                }
                else{
                    box_select.html('');
                }
            },
            error: function(response, xhr, ajaxOptions, thrownError){

                alert('Erro ao carregar anos dos cargos.');
            }
        });
        

     })
     
    
})


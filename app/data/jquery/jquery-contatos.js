$(function(){

    $(document).ready(function(){

        //Carrega combo "Tipo contato"
        var url = '../data/loadTipoContato.php';

        var box_select = $('#tipo_contato');

        $.ajax({
            dataType: 'json',
            url: url,
            type: "POST",
            success: function(response){
                if(response){

                    box_select.html('');

                    $.each(response, function(i, val){

                        box_select.append("<option value='"+val.id+"'>"+val.descricao+"</option>");
                    });
                }
                else{
                    box_select.html('');
                }
            },
            error: function(response, xhr, ajaxOptions, thrownError){

                alert('Erro ao carregar tipos de contato.');
            }
        });

     });

    $("#tipo_contato").on("change", function(){

        $("#contato").val("");

    });

     $("#contato").on("input", function(){

        var tipo_contato_id = $('#tipo_contato').val();

        if(tipo_contato_id == 1 || tipo_contato_id == 4 || tipo_contato_id == 8 || tipo_contato_id == 11){

            // num.setAttribute("maxlength", "14");

            var num = $("#contato").val();
            var v = $("#contato").val();
            
            if(isNaN(v[v.length-1])){

                $("#contato").val(v.substring(0, v.length-1));
                return;

            }

            if (v.length == 1) $("#contato").val("("+$("#contato").val());
            if (v.length == 3) $("#contato").val($("#contato").val()+")");
            if (v.length == 9) $("#contato").val($("#contato").val()+"-");

            // if (v.length == 4) $("#contato").val($("#contato").val()+);

            }

     });


})
    
    
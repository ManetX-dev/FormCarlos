$(function(){

    $("#uf").on("change", function(){

        var uf = $('#uf :selected').text();
        var url = '../data/load.php';
        // console.log(uf);

        var box_select = $('#municipio');

        uf = uf.trim();

        $.ajax({
            dataType: 'json',
            url: url,
            type: "POST",
            data: { uf: uf },
            success: function(response){
                if(uf != ''){
                    box_select.html('');
    
                    $.each(response, function(i, val){
                        // Append tem a função de inserir
                        box_select.append("<option value='"+val.cidade+"'>"+val.cidade+"</option>");
                    });
                }
                else{
                    box_select.html('');
                }
            },
            error: function(response, xhr, ajaxOptions, thrownError){

                alert('Erro ao carregar cidades.');
            }
        });

    })

    
})


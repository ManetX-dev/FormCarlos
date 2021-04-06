$(function(){

    $("#cep").on("blur", function(){

        var cep = $('#cep').val();
        cep = cep.replace("-", "")
        cep = cep.trim();
        var url = "https://viacep.com.br/ws/"+cep+"/json/";
    
        $.ajax({
            url: url,
            type: "GET",
            success: function(response){
    
                $('#logradouro').val(response.logradouro);
                $('#bairro').val(response.bairro);
                $('#municipio').val(response.localidade+", "+response.uf);
                $('#numero').val(response.numero);
                $('#complemento').val(response.complemento);
    
            }
        });

    })

})
    
    
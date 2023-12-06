
$(document).ready(function(){
    $('#cadastrar').click(function(){
        var nome = $('#nome').val();
        var email = $('#email').val();
        var turno = $('#turno').val();
        $.ajax({
            url: 'FormPDO.php',
            type: 'POST',
            data: {
                nome: nome,
                email: email,
                turno: turno
            },
            success: function(data){
                alert("Usuário Cadastrado com sucesso!");
            }
        })
    })
    $('#consultar').click(function(){
        $.ajax({
            url: 'TabelaPDO.php',
            success: function(data){
                $('#resultado').html(data);
            }
        })
    })
})

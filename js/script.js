$(document).ready(function () {
    $("#contato").click(function () {

        var nome = $("#nomeContato").val();
        var fone = $("#foneContato").val();
        var email = $("#emailContato").val();
        $.post('php/bd_comn.php', {name: nome, phone: fone, mail: email, mode:"contato"}, function (retorno) {
            $(".alerta").addClass("alerta-transform");
            $("#resposta").prepend(retorno);
        });
    });
    
    $("#cadastro").click(function () {

        var nome = $("#nome").val();
        var sobrenome = $("#sobrenome").val();
        var fone = $("#fone").val();
        var email = $("#email").val();
        var usuario = $("#usuario").val();
        var senha = $("#senha").val();
        var repetir = $("#repetir").val();
        
        $.post('php/bd_comn.php', {name: nome, lastName: sobrenome, phone: fone, mail: email, user: usuario, password: senha, repeat: repetir, mode:"cadastro"}, function (retorno) {
            $(".alerta").addClass("alerta-transform");
            $("#resposta").prepend(retorno);
        });
    });

    $("#okMsg").click(function () {
        $(".alerta").removeClass("alerta-transform");
        $("#resposta").html("");
    });
});
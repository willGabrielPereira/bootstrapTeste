$(document).ready(function () {
    $("#contato").click(function () {

        var nome = $("#nomeContato").val();
        var fone = $("#foneContato").val();
        var email = $("#emailContato").val();
        $.post('php/bd_comn.php', {name: nome, phone: fone, mail: email}, function (retorno) {
            $(".alerta").addClass("alerta-transform");
            $("#resposta").prepend(retorno);
        });
    });

    $("#okMsg").click(function () {
        $(".alerta").removeClass("alerta-transform");
        $("#resposta").html("");
    });
});
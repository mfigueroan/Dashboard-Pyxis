$(document).ready(function () {
    $("#vRegistros").click(function () {
        $("#main").load("registros.php");
    });
});
$(document).ready(function () {
    $("#inicio").click(function () {
        document.location.href = "/";
    });
});
$(document).ready(function () {
    $("#registros").click(function () {
        $("#main").load("registros.php");
    });
});

function myFunction(datos) {

    var servNomb = $('#' + datos + 'nombreServ').val();
    var maqNomb = $('#' + datos + 'nombreMaq').val();
    var estado = $('#' + datos + 'estado').val();
    var pacientReg = $('#' + datos + 'pacientes').val();
    var pacientIng = $('#' + datos + 'ingresados').val();
    var pacientEgr = $('#' + datos + 'egresados').val();
    $("#nombreServicio").text(servNomb);
    $("#nombreMaquina").text(maqNomb);
    $("#nombreEstado").text(estado);
    $("#pacienteRegistrados").text(pacientReg);
    $("#PacientesIngresados").text(pacientIng);
    $("#PacienteEgresados").text(pacientEgr);
    $('#modalservice').modal('toggle');
}

$(document).ready(function () {
    $('#tablaRegistros').DataTable();
});
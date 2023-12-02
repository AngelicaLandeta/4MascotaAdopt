$(document).ready(function() {
    // Realiza una solicitud AJAX para obtener los datos de la base de datos
    $.get('obtener_datos.php', function(data) {
        // Parsea los datos JSON recibidos
        var datos = JSON.parse(data);

        // Itera a través de los datos y agrega filas a la tabla
        var tbody = $('table tbody');
        $.each(datos, function(index, dato) {
            var fila = '<tr>';
            fila += '<td>' + dato.id + '</td>';
            fila += '<td>' + dato.nombre + '</td>';
            fila += '<td>' + dato.pais + '</td>';
            fila += '<td>' + dato.correo + '</td>';
            fila += '</tr>';
            tbody.append(fila);
        });
    });
});

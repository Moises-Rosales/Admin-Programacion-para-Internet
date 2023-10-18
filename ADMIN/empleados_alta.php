<!DOCTYPE html>
<html>

<head>
    <title>Alta de Empleados</title>

    Alta de Empleados<br>

    <a href="empleados_lista.php">Regresar al Listado</a><br><br>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
        function validarCampos() {
            

            var nombre = document.Alta.nombre.value;
            var apellidos =document.Alta.apellidos.value;
            var correo = document.Alta.correo.value;
            var pass = document.Alta.pass.value;
            var rol = document.Alta.rol.value;

            if (nombre && apellidos && correo && pass && rol > 0) {
                ///alert("Campos llenos");
                document.Alta.method ='post';
                document.Alta.action ='empleados_salva.php';
                document.Alta.submit();
                
            } else {
                $('#mensaje').html('Error: Faltan campos por llenar');
                setTimeout("$('#mensaje').html('');",5000)
            }
        }
        function entra(){
            $('#mensaje').html('Entraste al campo');
                setTimeout("$('#mensaje').html('');",5000)
        }
        function sale(){
            $('#correo')
            $('#mensajeCorreo').html('El correo ya Existe');
                setTimeout("$('#mensaje').html('');",5000)
        }
    </script>
</head>

<body>
    <form name="Alta" id="Alta">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" /> <br>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" /> <br>
        <input onfocus="entra();" onblur="sale();" type="text" name="correo" id="correo" placeholder="Correo" /> <br>
        <input type="text" name="pass" id="pass" placeholder="Escribe tu password" /><br>
        <select name="rol" id="rol"> <br>
            <option value="0">Selecciona</option>
            <option value="1">Gerente</option>
            <option value="2">Ejecutivo</option>
        </select><br>
        <input type="submit" value="Salvar" onclick="validarCampos();return false;" />
        <div id=Mensaje></div>


    </form>


</body>

</html>
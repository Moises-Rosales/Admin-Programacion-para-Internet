<html>
    <head>
        <title>Lista de Empleados</title>
    </head>
    <body>
        Alta de Empleados<br>

        <a href="empleados_alta.php">Nuevo Empleado</a><br><br>
        <?php
        //empleados_listaphp

        require "Funciones/conecta.php";
        $con = conecta();

        $sql = "SELECT * FROM empleados 
        WHERE status = 1 AND eliminado = 0";

        $res = $con->query($sql);

        while($row = $res->fetch_array()){

            $id = $row["id"];
            $nombre = $row["nombre"];
            $apellidos = $row["apellidos"];

            echo "$id $nombre $apellidos ";
            echo "<a href=\"empleados_elimina.php?id=$id\">Eliminar</a><br>";
        }
        ?>
    </body>
</html>
<!-- Autor: Carolina Godinez Santana 5°PM a:21/10/2022 vividos
Codigo para extrayendo los daotos ingresados anteriormente -->
<?php
    $columna=$_GET['columna'];
    $renglon=$_GET['renglon'];

    echo "<center>","La tabla generada es con $columna columnas y $renglon renglones...","</center>";
    echo "<br>";

    if( $renglon&& $columna && isset($_GET['columna'])) {
        echo"<table align='center' border='2px' background=purple>";

        for($ren=1; $ren<=$_GET['renglon']; $ren++){
            echo "<tr>";//creando un nuevo renglon
            for($col=1; $col<=$_GET['columna']; $col++){
                echo "<td>";//creando una columna
                echo "$ren$col";
                echo"</td>";//cerrar la columna
            }
        echo "<tr>";//cerrar renglon
        }
        echo "</table>";//cerrar tabla
    }
?>
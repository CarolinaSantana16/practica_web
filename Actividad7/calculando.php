<!-- Autor: Carolina Godinez Santana 5°PM a:21/10/2022 vividos
Codigo para extrayendo los daotos ingresados anteriormente -->
<?php
    $edad=$_GET['edad'];
    if(isset($_GET['edad'])) {
        $edad=$edad*365;
        echo "<h3 style='text-align:center;'>Los días vividos son $edad</h3>";
    }
?>
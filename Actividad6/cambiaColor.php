<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4</title>
</head>
<body>
    <h1 id="header">Soy una simple página!!! =(=(=(</h1>
    <button id="btnRojo" style="background-color: red;" onmouseover="rojo()"> Red</button>
    <button id="btnAzul" style="background-color: blue;" onmouseover="azul()">Blue</button>
    <button id="btnVioleta" style="background-color: violet;" onmouseover="violeta()">Violet</button>


    <script>
        function rojo(){
            //alert("Outchh Soy Rojo");
            document.getElementById("header").style.backgroundColor="red";
        }
        function azul(){
           // alert("Outchh Soy Azul");
            document.getElementById("header").style.backgroundColor="blue";
        }
        function violeta(){
            //alert("Outchh Soy Violeta");
            document.getElementById("header").style.backgroundColor="violet";
        }
    </script>
</body>
</html>
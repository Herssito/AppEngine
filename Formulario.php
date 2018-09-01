<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario en App Engine</title>
    <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">

    <style type="text/css">
        * {
            margin:0px;
            padding:0px;
        }
        body{
            background: #2b2b2a;
            background-position:center;
        }
        form{
            background: #333333;
            width: 360px;
            border:1px solid #4e4d4d;
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius:3px;
            box-shadow:inset 0 0 10px #000;
            margin: 100px auto;
        }
        form h1{
            text-align:center;
            color: #fff;
            font-weight:normal;
            font-size:25pt;
            margin: 30px 0px;
            font-family: 'Pinyon Script', cursive;
        }
        form input {
            width:280px;
            height: 35px;
            padding: 0px 10px;
            margin: 10px 30px;
            color: #6d6d6d;
            text-align:center;
        }
        form button {
            width: 135px;
            margin: 20px 110px;
            height: 50px;
            color: #fff;
            background: #3c3c3c; /* Old browsers */
            background: -moz-linear-gradient(top, #3c3c3c 2%, #2989d8 50%, #207cca 51%, #2a2828 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(top, #3c3c3c 2%,#2989d8 50%,#207cca 51%,#2a2828 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to bottom, #3c3c3c 2%,#2989d8 50%,#207cca 51%,#2a2828 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3c3c3c', endColorstr='#2a2828',GradientType=0 ); /* IE6-9 */
            border:1px solid #232323;
            box-shadow: 0px 2px 0px #000;
            -moz-box-shadow: 0px 2px 0px #000;
            -webkit-box-shadow: 0px 2px 0px #000;
            border-radius:3px;
            -moz-border-radius:3px;
            -webkit-border-radius:3px;
        }
        form button:hover {
            background:#3a3a3a;
        }
    </style>
</head>
<body>
<form >
    <h1>FormularioAppEngine</h1>
    <input  type = "text" max-length = "50" name = "nombre" placeholder = "Ingrese su Nombre"/>
    <input name = "apellido" type = "text" max-length = "50" placeholder = "Ingrese su Apellido"/>
    <input name ="tel" type = "text" max-length = "50" placeholder = "Ingrese su Telefono"/>
    <input name ="direc" type = "text" max-length = "50" placeholder = "Ingrese su Direccion"/>
    <button type = "submit">Enviar Informacion</button>



</form>

</body>
</html>


<?php
$to = "frank123rebolledo@gmail.com"; // Coloca aquí tu dirección de correo electrónico
$subject = "Formulario de contacto de la página web";

// Obtener valores del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Construir mensaje
$body = "Nombre: " . $name . "\n";
$body .= "Correo electrónico: " . $email . "\n";
$body .= "Mensaje: \n" . $message;

// Enviar correo electrónico
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
mail($to, $subject, $body, $headers);

// Redirigir a una página de confirmación
header("Location: confirmacion.html");
?>


<!DOCTYPE html>
<html lang="es">
{% load static %}

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link style="width: 16px; height: 16px;" rel="shortcut icon" href="https://res.cloudinary.com/dwqfvkoq7/image/upload/v1699125287/store/agqskmtew2mxkysriqup.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <title>Contacto</title>
</head>

<body>
    <!-- INICIO DE NAVBAR -->
    <header class="navbar-login">
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <img src="https://res.cloudinary.com/dwqfvkoq7/image/upload/v1699135976/store/x2nha41fgpivxmleddsg.svg" alt="" width="50px" height="100%">
                <span style="color: #0cf; font-family: 'Agbalumo'; text-shadow: 0.3px 0.3px 0.3px #fff; min-height: 10px;">FunStore</span>
                <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{% url 'home'%}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> -None-</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{% url 'contact' %}"> Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
            <div class="col-md-6 d-none d-md-block">
                <div id="carrusel-contenido">
                    <div id="carrusel-caja">
                        <div class="carrusel-elemento">
                            <img class="imagenes" src="https://res.cloudinary.com/dwqfvkoq7/image/upload/v1679534935/Support_v2_mumb38.svg" height="auto" width="auto" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5">
                <div id="contact-form">
                    <h2>¿Necesitas ayuda?</h2>
                    <form action="enviar_formulario.php" method="post">
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje:</label>
                            <textarea name="message" class="form-control" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            direction: ltr;
            line-height: 1.4286;
            margin: 0;
            padding: 0;
            background: #000000;
            color: #a7a7a7;
        }

        .navbar {
            min-height: 10px;
            font-family: "Poppins", sans-serif;
        }

        #navbar {
            background: white;
            position: sticky;
            z-index: 10;
            top: 0;
        }

        #navbarSupportedContent li a {
            color: black !important;
            text-shadow: 0px 1px 0px #333;
        }

        :root::-webkit-scrollbar {
            display: none;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .imagenes {
            height: 500px;
            width: 100%;
            border-radius: 8px;
            border: 3px solid #0cf;
        }

        #contact-form {
            background: transparent;
            clear: left;
            font: 14px Helvetica, Arial, sans-serif;
        }

        #contact-form h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea.form-control {
            height: 150px;
        }

        .btn {
            background-color: #0cf;
            color: #000;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #000080;
            color: #FFF;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
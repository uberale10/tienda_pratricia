<?php
require('./ini_sesion.php');
// redireciona a login si no ha iniciado sesion
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/pie_pagina.css">

    <!-- para usar los iconos -->
    <script src="https://kit.fontawesome.com/e10be12ced.js" crossorigin="anonymous"></script> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pie de pagina</title>
</head>
<br>

<body>

    <footer class="footer-distributed">

        <div class="footer-left">
            <h3>Tienda <span>Patricia</span></h3>
            <p class="footer-company-name">Company: Tecsirvo.com © 2020</p>
            <p class="footer-company-name">Autor: Uber Alejandro</p>
            <span><a href="https://tecsirvo.com/">Tecsirvo.com</a></span>

            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>

        </div>

        <div class="footer-right">

            <p>Contactanos</p>

            <form action="#" method="post">
                <input type="text" name="email" placeholder="Email">
                <textarea name="message" placeholder="Message"></textarea>
                <button>Enviar</button>

            </form>

        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
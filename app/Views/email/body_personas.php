<!DOCTYPE html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Formulario de Contacto</title>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </head>

    <body>
        <div class="img-container" style="display: flex; justify-content: center;">
            <img src="http://innomedic.metjetsac.com/public/assets/images/logo.png?v=<?php echo rand();?>" alt="Logo Innomedic">
        </div>


        <div class="body-container" style="width: 100%; font-size: 1rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <div>
                <div class="first-message" style="text-align: center; margin: 10px;">No dejar de pasar una opotunidad, el cliente espera que lo respondas más rápido de lo que puedas, suerte en todo</div>
            </div>

            <div>
                <h2 class="display-4 text-justify">PAQUETES PREVENTIVOS</h2>
            </div>

            <div>
                <h2 class="display-4 text-justify " style="color:red;"><?php echo $paquete; ?></h2>
            </div>

            <div class="text-center">
                <div class="h1 text-danger">El usuario a responder es : <?php echo $name.' - '. $identification_number; ?></p>
            </div>

            <div class="datos-cliente" style="text-align: center;">
                <div>
                    <label for="" class="font-weight-bold ">Nombres:</label>
                    <span><?php echo $name;?></span>
                </div>
                <div class="">
                    <label for="" class="font-weight-bold">DNI:</label>
                    <span><?php echo $identification_number;?></span>
                </div>
                <div class="">
                    <label for="" class="font-weight-bold">Fecha de Envio:</label>
                    <span><?php echo $fecha_envio;?></span>
                </div>
                <div class="">
                    <label for="" class="font-weight-bold">Celular:</label>
                    <span><?php echo $phone;?></span>
                </div>
                <div class="">
                    <label for="" class="font-weight-bold">Email:</label>
                    <span><?php echo $email;?></span>
                </div>
                <div class="">
                    <label for="" class="font-weight-bold">Mensaje: </label>
                    <span><?php echo $message;?></span>
                </div>
            </div>
        </div>

    </body>

    <!-- Footer -->
    <footer>
        <div class="footer" style="bottom: 0; z-index: -1; width: 100%; color: #fff; font-size: 1rem; background: #46C0EE;">
            <div class="wrapper" style="margin: auto; width: 100%;">
                <h1 style="font-size: 150%; line-height: 2; text-align: center;">Innomedic International E.I.R.L</h1>
                <p class="footer-text" style="text-align: center;">Este e-mail se ha generado por un sistema automático. Por favor, no respondas a este e-mail directamente. Si tienes alguna duda o necesitas ayuda contacta con nosotros.
                    <div style="display: flex; justify-content:center; align-items:center;">
                        <a style="color: #ffffff;" href="<?php echo base_url();?>">www.innomedic.pe</a>
                    </div>
                </p>
            </div>
        </div>
        

        <p class="final-message" style="text-align: center;">Realizado por: <a target="_blank">Area de Sistemas - Innomedic</a></p>
    </footer>    
</html>
        

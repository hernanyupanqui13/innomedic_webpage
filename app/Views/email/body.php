<div style="width: 100%; font-size: 1rem;" class="container ">

    <div>
        <p class="display-4 text-justify">No dejar de pasar una opotunidad, el cliente espera que lo respondas mas rapido de lo que puedas, suerte en todo</p>
    </div>

    <div>
        <h2 class="display-4 text-justify">PAQUETES PREVENTIVOS</h2>
    </div>

    <div>
        <h2 class="display-4 text-justify " style="color:red;"><?php echo $nombre_paquete ?></h2>
    </div>

    <div class="text-center">
        <p class="h1 text-danger">Empresa a responder es : <?php echo $reponder ?></p>
    </div>

    <div class="row">
        <div class="col-md-4">
            <label for="" class="font-weight-bold ">Nombres:</label>
            <span><?php echo $nombres_completos?></span>
        </div>
        <div class="col-md-4">
            <label for="" class="font-weight-bold">DNI:</label>
            <span><?php echo $ruc?></span>
        </div>
        <div class="col-md-4">
            <label for="" class="font-weight-bold">Fecha de Envio:</label>
            <span><?php echo $fecha_envio?></span>
        </div>
        <div class="col-md-4">
            <label for="" class="font-weight-bold">Celular:</label>
            <span><?php echo $celular?></span>
        </div>
        <div class="col-md-4">
            <label for="" class="font-weight-bold">Email:</label>
            <span><?php echo $email?></span>
        </div>
        <div class="col-md-12">
            <label for="" class="font-weight-bold">Mensaje: </label>
            <span><?php echo $mensaje?></span>
        </div>
    </div>
    
</div>
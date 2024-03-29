<?php
?>
<div class="container justify-content-md-center">
    <div align="center">
        <div class="card" style="width: 12%;">
            <img src="<?php echo URL?>Public/imagenes/user.png" class="card-img-top">
        </div>
    </div>
    <div class="text-center">
        <h2>Agregar Usuario</h2>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-5 order-md-1">
            <form class="was-validated"  method="POST" action="<?php echo URL?>Usuario/agregar" enctype="multipart/form-data" autocomplete="off">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="Nombre">Nickname</label>
                        <input type="text" class="form-control" id="nickname" name="nickname" required>
                        <div class="invalid-feedback">
                            Ingresa un nickname
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Nombre">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="invalid-feedback">
                            Ingresa un email
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <button  class="btn btn-primary " id="enviar"  type="submit">Registrar</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
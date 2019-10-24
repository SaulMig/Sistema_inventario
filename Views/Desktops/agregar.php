<?php
?>
<div class="container justify-content-md-center">
    <div align="center">
        <div class="card" style="width: 12%;">
            <img src="<?php echo URL?>Public/imagenes/user.png" class="card-img-top">
        </div>
    </div>
    <div class="text-center">
        <h2>Agrega un Desktop</h2>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-5 order-md-1">
            <form class="was-validated"  method="POST" action="<?php echo URL?>Desktops/agregar" enctype="multipart/form-data" autocomplete="off">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="service_tag">Service Tag</label>
                        <input type="text" class="form-control" id="service_tag" name="service_tag" required>
                        <div class="invalid-feedback">
                            Ingresa el modelo
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="garantia">Garantia</label>
                        <input type="date" class="form-control " id="garantia" name="garantia" required>
                        <div class="invalid-feedback">
                            Ingresa una marca
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="id_modelo" name="id_modelo" required>
                        <div class="invalid-feedback">
                            Ingresa una marca
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tipo_pc">Tipo de Computadora</label>
                        <input type="text" class="form-control" id="id_tipo_pc" name="id_tipo_pc" required>
                        <div class="invalid-feedback">
                            Ingresa una marca
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
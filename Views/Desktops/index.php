<?php
?>

<div class="container">
    <div class="row">
        <main role="main" class="col-md-12">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Desktops</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a class="btn btn-primary btn-circle" href="<?php echo URL ?>Descktops/agregar">+</a>
                    </div>
                </div>
            </div>

            <table class="responsive-table" id="tabla_content">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th>Usuario</th>
                        <th>Service Tag</th>
                        <th>Modelo</th>
                        <th>Garantia</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody id="body_table">
                    <?php
                    require_once ("tabla.php");
                    ?>
                    </tbody>
                </table>
        </main>
    </div>
</div>




<div class="modal fade" id="mimodalagregar" tabindex="-1" role="dialog" aria-labelledby="mimodalagregar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container justify-content-md-center col-md-12 order-md-1">
                    <form class="was-validated"  method="POST" action="<?php echo URL?>Desktops/agregar" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-group">
                            <label for="Modelo">Modelo</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                            <div class="invalid-feedback">
                                Llena el campo
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="marca">Marca</label>
                            <input type="text" class="form-control" id="id_marca" name="id_marca" required>
                            <div class="invalid-feedback">
                                Llena el campo
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button  class="btn btn-primary " id="enviar" type="submit">Agregar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

</div>
<div class="modal fade" id="modal_eliminar" tabindex="-1" role="dialog" aria-labelledby="mimodaleliminar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro de eliminar el registro?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button"  id="eliminar_ok" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#body_table").on("click","a#elimina",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>Modelo/eliminar/'+id;
            $("#eliminar_ok").attr("url",url);
            $("#modal_eliminar").modal("show");
        });
        $("#eliminar_ok").click(function(){
            $.get($(this).attr("url"),function(res){
                $("#body_table").empty().append(res);
            });
        });
    });
</script>

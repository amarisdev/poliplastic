<?php
if (isset($_SESSION)) {
    $Usuario = UsuarioModel::GetByDocumento($_SESSION['noDocumento']);
    if($Usuario->idTipoUsuario==1){
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <br > <br>
                <h5><i class="fa fa-address-card"></i> Datos personales</h5>
                <hr>
                <?php
                $estado_usuario = ComplementModel::GetAllEstadoUsuario();
                $tipo_usuario = ComplementModel::GetAllTipoUsuario();

                if (($estado_usuario) && ($tipo_usuario)) {
                ?>
                    <form class="form-horizontal" id="add_usuario" action="./?view=add_usuario" method="POST" role="form">
                        <br />
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="control-label"><b>Estado usuario *</b></label>
                                    <select class="form-control" name="idEstadoUsuario" id="idEstadoUsuario" required>
                                        <option value="">Selecione una opcion</option>
                                        <?php
                                        foreach ($estado_usuario as $estado_usuario) {
                                        ?>
                                            <option value="<?php echo $estado_usuario->id; ?> ">
                                                <?php echo $estado_usuario->nombre; ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="control-label"><b>Estado usuario *</b></label>
                                    <select class="form-control" name="idTipoUsuario" id="idTipoUsuario" required>
                                        <option value="">Selecione una opcion</option>
                                        <?php
                                        foreach ($tipo_usuario as $tipo_usuario) {
                                        ?>
                                            <option value="<?php echo $tipo_usuario->id; ?> ">
                                                <?php echo $tipo_usuario->nombre; ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="control-label"><b>Numero de documento *</b></label>
                                    <input class="form-control" name="noDocumento" id="noDocumento" type="number" placeholder="Numero de documento" required />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="control-label"><b>Nombre * </b></label>
                                    <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombres" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label class="control-label"><b>Apellidos * </b></label>
                                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellidos" required />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label"><b>Teléfono Movil * </b></label>
                                    <input class="form-control" name="movil" id="movil" type="number" placeholder="300 000 0000" required />
                                </div>

                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label"><b> Email *</b></label>
                                    <input class="form-control" name="email" id="email" type="email"  required />
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="category">* Campo Requerido</div>
                                <div class="card-footer bg-transparent text-right">
                                    <button type="submit" class="btn bg-nav text-light btn-fill btn-wd">Guardar</button>
                                    <input class="btn btn-secondary" type="reset" value="Limpiar">
                                </div>
                            </div>
                        </div>
                    </form>
                <?php } else { ?>
                    <div class="alert alert-danger">
                        <span>
                            <b>Error de base de datos.Hay datos vacios</b>
                        </span>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
    </div>
</section>
<?php } else { ?>
    <div class="alert alert-danger">
        <span>
            <b>No tiene autorizacion para visualizar el modulo</b>
        </span>
    </div>
<?php } }else{ ?>
    <div class="alert alert-danger">
        <span>
            <b>No tiene autorizacion para visualizar el modulo</b>
        </span>
    </div>
<?php } ?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>idReclamo</th>
                            <th>Nombre Usuario</th>
                            <th>Cuenta</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($arrayDetalle) > 0) {
                            foreach ($arrayDetalle as $c => $value) {
                                ?>
                                <tr>
                                    <td style="text-align: center"><?php echo ($c + 1); ?></td>
                                    <td><?php echo $value['nombre']; ?></td>
                                    <td><?php echo $value['cuenta']; ?></td>
                                    <td><label class="label <?php echo $value['estado']=='ACTIVO'?'label-primary':'label-success'?>"><?php echo $value['estado']; ?> </label></td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="4" style="text-align: center">
                                    <div class="alert alert-danger" role="alert">
                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <span class="sr-only">Error:</span>
                                        No existen Datos
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                        ?> 
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
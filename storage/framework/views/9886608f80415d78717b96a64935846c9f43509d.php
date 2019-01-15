<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 ">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Reporte Tip Ventas FaceBook</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" data-page-length='25'>
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Sin Num</th>
                            <th>Gestionado Otro Call</th>
                            <th>Linea Inactiva</th>
                            <th>Movistar</th>
                            <th>No le Interesa</th>
                            <th>Plan de renta</th>
                            <th>Reagenda</th>
                            <th>Buzon</th>
                            <th>CAC</th>
                            <th>Sin Estatus</th>
                            <th>Venta</th>
                            <th>Llamar</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($datos as $datosValue): ?>
                        <tr >
                            <td class="center"><?php echo e($datosValue->fecha); ?></td>
                            <td><?php echo e($datosValue->numero); ?></td>
                            <td><?php echo e($datosValue->ges); ?></td>
                            <td><?php echo e($datosValue->linea_inactiva); ?></td>
                            <td><?php echo e($datosValue->movistar); ?></td>
                            <td><?php echo e($datosValue->interesa); ?></td>
                            <td><?php echo e($datosValue->renta); ?></td>
                            <td><?php echo e($datosValue->reagenda); ?></td>
                            <td><?php echo e($datosValue->buzon); ?></td>
                            <td><?php echo e($datosValue->cac); ?></td>
                            <td><?php echo e($datosValue->sin_estatus); ?></td>
                            <td><?php echo e($datosValue->venta); ?></td>
                            <td><?php echo e($datosValue->llamar); ?></td>
                            <td><?php echo e($datosValue->total); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-12 ">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Reporte numero de Telefono</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover" data-page-length='25'>
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Sin Num</th>
                            <th>Con numero</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($sin_con as $datosValue): ?>
                        <tr >
                            <td class="center"><?php echo e($datosValue->fecha); ?></td>
                            <td><?php echo e($datosValue->sin_numero); ?></td>
                            <td><?php echo e($datosValue->numero); ?></td>
                            <td><?php echo e($datosValue->total); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>






















<?php $__env->stopSection(); ?>
<?php $__env->startSection('content2'); ?>
        <script src="//code.jquery.com/jquery-1.12.3.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($menu, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
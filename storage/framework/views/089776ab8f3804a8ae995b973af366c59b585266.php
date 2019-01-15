<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Edición Ventas Inbursa Soluciones</h3>
            </div>
            <div class="panel-body">


                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Numero</th>
                            <th>RVT</th>
                            <th>Teléfono</th>
                            <th>Fecha</th>
                            <th>Estatus</th>
                            <th> Editado </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $num =0; ?>
                    <?php foreach ($datos as $key => $value): ?>
                        <?php if(!$value -> subido): ?>
                            <tr >
                                <td><?php echo e($num+=1); ?> </td>
                                <td><?php echo e($value -> rvt); ?> </td>
                                <td> <a href="<?php echo e(url('edicionSoluciones3/'.$value -> telefono.'/'.$value -> fecha_capt.'/'.$value -> id.'/'.$value->estatusSubido )); ?>"><?php echo e($value -> telefono); ?> </a></td>
                                <td> <?php echo e($value -> fecha_capt); ?> </td>
                                <td> <?php echo e($value -> estatus_people_2); ?> </td>

                                <td>
                                    <?php if( !$value -> subido): ?>
                                        No
                                    <?php else: ?>
                                        Si
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php else: ?> 
                        
                        <?php endif; ?>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.inbursaSoluciones.edicion.edicion', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
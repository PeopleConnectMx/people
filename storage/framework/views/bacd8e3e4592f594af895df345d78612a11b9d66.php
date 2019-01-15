<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Reporte de incidencias</h3>
            </div>
            <div class="panel-body">
              <?php echo e(Form::open(['action' => 'IncidenciasController@DatosAgente',
                              'method' => 'post',
                              'class'=>"form-horizontal",
                              'accept-charset'=>"UTF-8",
                              'enctype'=>"multipart/form-data"
                          ])); ?>

                <div class="form-group">
                  <?php echo e(Form::label('No. empleado *','',array('class'=>"col-sm-2 control-label"))); ?>

                  <div class="col-sm-10">
                    <?php echo e(Form::text('usuario',NULL,array('class'=>"form-control", 'placeholder'=>"",'id'=>'no_emp','maxlength'=>'10','required'))); ?>

                  </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <?php echo e(Form::submit('Enviar',['class'=>"btn btn-default"])); ?>

                    </div>
                </div>
                  <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.Incidencias.incidencias', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
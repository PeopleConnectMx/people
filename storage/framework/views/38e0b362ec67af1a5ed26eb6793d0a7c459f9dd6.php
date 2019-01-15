<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Descarga de audios. Número: <?php echo e($telefono); ?> Folio: <?php echo e($id); ?></h3>
            </div>
            <div class="panel-body">

    <?php echo e(Form::open(array(
         'url'=>'/upload',
         'method' => 'post',
         'enctype'=>'multipart/form-data',
         'class'=>"form-horizontal"
    ) )); ?>



                <?php $anio = substr($fecha_capt, 0, 4)  ?>
                <?php $mes = substr($fecha_capt, 5, 2)  ?>
                <?php $dia = substr($fecha_capt, 8, 2)  ?>

                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th> Fecha</th>
                            <th> Hora</th>
                            <th> Escuchar</th>
                            <th> Descargar</th>

                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach($audios as $key => $value): ?>

                      <?php $out = substr($value, 0, 2 ) ?>
                        <?php if($out === "ou"): ?>
                            <?php $hora = substr($value, 30, 2) ?>
                            <?php $minuto = substr($value, 32, 2) ?>
                            <?php $segundo = substr($value, 34, 2) ?>
                        <?php elseif($out === "q-"): ?>
                            <?php $hora = substr($value, 29, 2) ?>
                            <?php $minuto = substr($value, 31, 2) ?>
                            <?php $segundo = substr($value, 33, 2) ?>
                        <?php else: ?>
                            <?php $hora = substr($value, 22, 2) ?>
                            <?php $minuto = substr($value, 24, 2) ?>
                            <?php $segundo = substr($value, 26, 2) ?>
                        <?php endif; ?>

                        <tr >
                            <td><?php echo e($fecha_capt); ?></td>
                            <td><?php echo e($hora); ?>:<?php echo e($minuto); ?>:<?php echo e($segundo); ?></td>
                            <td>
                                <source src="http://13.85.24.249/Grabaciones_Vidatel/Vidatel/<?php echo e($anio); ?>/<?php echo e($mes); ?>/<?php echo e($dia); ?>/<?php echo e($value); ?>" type="audio/wav"/>
                                <div>
                                    <a type="button" class="btn btn-default" target="_blank" href="http://13.85.24.249/Grabaciones_Vidatel/Vidatel/<?php echo e($anio); ?>/<?php echo e($mes); ?>/<?php echo e($dia); ?>/<?php echo e($value); ?>" ;>
                                        <span class="glyphicon glyphicon-play"></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                               <a href="http://13.85.24.249/Grabaciones_Vidatel/Vidatel/<?php echo e($anio); ?>/<?php echo e($mes); ?>/<?php echo e($dia); ?>/<?php echo e($value); ?>" type="button" class="btn btn-default" download="audio.wav">
                                   <span class="glyphicon glyphicon-download-alt"></span>
                               </a>
                            </td>
                        </tr>

                      <?php endforeach; ?>

                        <tr>
                          <td>  </td>
                          <td colspan="2" align="center">
                            <div class="form-group">
                                <?php echo e(Form::label('Estatus','',array('class'=>"col-sm-2 control-label"))); ?>

                                <div class="col-sm-10">
                                    <?php echo e(Form::select('estatus', [
                                    'Aceptada' => 'Aceptada',
                                    'Rechazada'=>'Rechazada',
                                    'NoEncontrado'=>'Audio no encontrado'],
                                null, ['class'=>"form-control", 'placeholder'=>"",'required' => 'required']  )); ?>

                                </div>
                            </div>
                          </td>
                          <td>  </td>
                        </tr>
                        <tr>
                          <td>  </td>
                          <td colspan="2" align="center">
                            <div class="form-group">
                                <?php echo e(Form::label('Motivo','',array('class'=>"col-sm-2 control-label"))); ?>

                                <div class="col-sm-10">
                                    <?php echo e(Form::select('tipoReporte', [
                                    'Script' => 'Script',
                                    'Audio dañado'=>'Audio dañado',
                                    'Error en tipificación del DN'=>'Error en tipificación del DN',
                                    'Sin si' => 'Sin si',
                                    'Sin fecha de nacimeinto' => 'Sin fecha de nacimiento',
                                    'Sin cierre' => 'Sin cierre'],
                                    '', ['class'=>"form-control", 'placeholder'=>""]  )); ?>

                                </div>
                            </div>
                          </td>
                          <td>  </td>
                        </tr>
                    </tbody>
                </table>

                <p align="center">
                  Audio1:
                 <?php echo Form::file('audio'); ?>

                </p>
                    <div class="form-group" style="display: none">
                        <div class="col-sm-10">

                            <?php echo e(Form::text('fecha',$anio,array('required' => 'required', 'class'=>"form-control", 'placeholder'=>"", 'readonly'=>'readonly'))); ?>

                            <?php echo e(Form::text('mes',$mes,array('required' => 'required', 'class'=>"form-control", 'placeholder'=>"", 'readonly'=>'readonly'))); ?>

                            <?php echo e(Form::text('id',$id,array('required' => 'required', 'class'=>"form-control", 'placeholder'=>"", 'readonly'=>'readonly'))); ?>

                            <?php echo e(Form::text('dia',$dia,array('required' => 'required', 'class'=>"form-control", 'placeholder'=>"", 'readonly'=>'readonly'))); ?>

                            <?php echo e(Form::text('telefono',$telefono,array('required' => 'required', 'class'=>"form-control", 'placeholder'=>"", 'readonly'=>'readonly'))); ?>

                        </div>
                    </div>
                    <p align="center">
                        <?php echo e(Form::submit('Subir')); ?>

                    </p>

                <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>

</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.edicion.edicion', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
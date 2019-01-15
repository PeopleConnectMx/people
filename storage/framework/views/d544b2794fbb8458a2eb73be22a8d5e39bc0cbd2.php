<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Reporte RVT </h3>
            </div>
            <div class="panel-body">

              <?php echo e(Form::open(['action' => 'ReportesController@resultadosRV',
                              'method' => 'post',
                              'class'=>"form-horizontal",
                              'accept-charset'=>"UTF-8",
                              'enctype'=>"multipart/form-data"
                          ])); ?>



                <div class="form-group">
                    <?php echo e(Form::label('Fecha Inicio','',array('class'=>"col-sm-2 control-label"))); ?>

                    <div class="col-sm-10">
                        <?php echo e(Form::date('fecha_i','',array('required' => 'required', 'class'=>"form-control", 'placeholder'=>"********"))); ?>

                    </div>
                </div>

                <div class="form-group">
                    <?php echo e(Form::label('Fecha Fin','',array('class'=>"col-sm-2 control-label"))); ?>

                    <div class="col-sm-10">
                        <?php echo e(Form::date('fecha_f','',array('required' => 'required', 'class'=>"form-control", 'placeholder'=>"********"))); ?>

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

<!--
<script src="//code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
-->

<!--alertify -->
<!--
<link rel="stylesheet" href="http://blog.reaccionestudio.com/ejemplos/alertify_js/themes/alertify.core.css">
<link rel="stylesheet" href="http://blog.reaccionestudio.com/ejemplos/alertify_js/themes/alertify.default.css">
<script src="http://blog.reaccionestudio.com/ejemplos/alertify_js/lib/alertify.js"></script>
-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make( $menu , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
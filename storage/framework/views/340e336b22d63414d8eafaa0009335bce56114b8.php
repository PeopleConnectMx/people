<?php $__env->startSection('content'); ?>

            <div class="row">
                <div class="">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Proceso 1 de BO</h3>
                        </div>
                        <div class="panel-body">

                     <table class="table table-striped table-bordered table-hover" id="dataTables-example" data-page-length='10'>
                                <thead>
                                    <tr>
                                        <th>DN</th>
                                        <th>Nombre Cliente</th>
                                        <th>Ref1</th>
                                        <th>Ref2</th>
                                        <th>Estatus BO</th>
                                        <th>Fecha Venta</th>
                                        <th>Actualización BO</th>
                                        <th>Estatus</th>
                                        <th>Invitacion A:</th>
                                        <th>Observaciones</th>
                                    </tr>
                                </thead>
<form method="POST" action="<?php echo e(url('bo/nuevos/guardar')); ?>">

                                <?php foreach($news as $user => $value): ?>
                                <tbody>

                                        <tr>
                                        <td><?php echo e(Form::text('dn'.$user,$value->dn1,array('class'=>"form-control",
                                  'placeholder'=>"", 'readonly'=>''))); ?></td>
                                        <td><?php echo e($value->nombre_cliente2); ?></td>
                                        <td><?php echo e($value->ctel12); ?></td>
                                        <td><?php echo e($value->ctel22); ?></td>
                                        <td><?php echo e($value->st_interno1); ?></td>
                                        <td><?php echo e($value->actualizacion1); ?></td>
                                        <td><?php echo e($value->ac_interno1); ?></td>
                                        <td><div class="form-group">
                                              <div class="col-sm-10">
                                                  <?php echo e(Form::select('estatus'.$user, [
                                                  'Invitación a CAC' => 'Invitación a CAC',
                                                  'Queja Venta' => 'Queja Venta', 
                                                  'Queja CAC' => 'Queja CAC',
                                                  'No contacto' => 'No contacto'],
                                              '', ['required' => 'required', 'class'=>"form-control", 'placeholder'=>""]  )); ?>

                                              </div>
                                          </div>
                                        </td>
                                        <td><div class="form-group">
                                            <div class="col-sm-10">
                                              <?php echo e(Form::select('invitacion'.$user, [
                                                'DN' => 'DN',
                                                'Ref1' => 'Ref1',
                                                'Ref2' => 'Ref2',
                                                'DN+Ref1+Ref2'=>'DN+Ref1+Ref2'],
                                                '', ['required' => 'required', 'class'=>"form-control", 'placeholder'=>""]  )); ?>

                                            </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo e(Form::textarea('observaciones'.$user,$value->obs,array('class'=>"form-control", 'rows'=>2, 'cols'=>10, 'placeholder'=>""))); ?>

                                        </td>
                                        </tr>                                   
                                    
                                </tbody>
                            
                                <?php endforeach; ?>
                                
                            

                            </table>
<?php echo e(Form::submit('Enviar',['class'=>"btn btn-default"])); ?>

</form>
                        </div>

                    </div>
                </div>
            </div>
asdfghfd
        </div>


        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('content2'); ?>

        <script src="//code.jquery.com/jquery-1.12.3.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>


        <script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

                <script>
            /*
$(document).ready(function () {
    $('#dataTables-example').DataTable({
        responsive: true,
        "order": [[ 3, 'desc' ]]
    });
});

*/

  jQuery(function($) {
        //initiate dataTables plugin
        var myTable = 
        $('#dataTables-example')
        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
        .DataTable( {
            bAutoWidth: false,
            "aoColumns": [
                null,
                null,
                null
            ],
            "aaSorting": [],
            
            
            //"bProcessing": true,
            //"bServerSide": true,
            //"sAjaxSource": "http://127.0.0.1/table.php"   ,
    
            //,
            //"sScrollY": "200px",
            //"bPaginate": false,
    
            //"sScrollX": "100%",
            //"sScrollXInner": "120%",
            //"bScrollCollapse": true,
            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
            //you may want to wrap the table inside a "div.dataTables_borderWrap" element
    
            //"iDisplayLength": 50
    
    
                select: {
                    style: 'multi'
                }
            });
        });
 </script>



    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.bo.lista', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
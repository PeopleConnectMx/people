@extends('layout.inbursaSoluciones.agente.agente')
@section('content')

<?php
$value = Session::all();
// dd($value);


$hora=date('H:i:s');
?>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Llamada en curso...</h4>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label class="control-label" for="focusedInput">Nombre</label>
            <input class="form-control" id="nombre-asterisk" type="text" value="" disabled="" >
          </div>

          <div class="form-group">
            <label class="control-label" for="focusedInput">Teléfono</label>
            <input class="form-control" id="telefono-asterisk" type="text" value="" disabled="" >
          </div>

          <div class="form-group">
            <label class="control-label" for="focusedInput">Dirección</label>
            <input class="form-control" id="direccion-asterisk" type="text" value="" disabled="" >
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>



<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                  <button type="button" class="btn btn-info" onclick="datosastriskSoluciones()" data-toggle="modal" data-target="#myModal">Obtener datos</button>
                  {{$value['nombre_completo']}}</h3>
            </div>
            <div class="panel-body">
              {{ Form::open(['action' => 'InbursaSolucionesController@FromularioInbSoluciones',
                              'method' => 'post',
                              'class'=>"form-horizontal",
                              'accept-charset'=>"UTF-8",
                              'enctype'=>"multipart/form-data",
                              'name' => "formulario",
                              'onsubmit'=>'return validar()'
                                ]) }}

                                <div class="form-group">
                                    {{ Form::label('telefono','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('telefono','',array('class'=>"form-control",'id'=>'telefono','maxlength'=>'10','minlength'=>'10','required' => 'required')) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('Estatus','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::select('estatus', [
                                        'Contacto' => 'Contacto',
                                        'Nocontacto' => 'No contacto'],
                                    '', ['class'=>"form-control", 'placeholder'=>"",'onchange'=>'LlenarSelect()']  ) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('Motivo','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::select('motivo', [],
                                    '', ['class'=>"form-control", 'placeholder'=>"",'id'=>'motivo','onchange'=>'motivoval()']  ) }}
                                    </div>
                                </div>


  <div id='divPass' style='display: none;'>
    <div class="form-group">
        {{ Form::label('Contraseña','',array('class'=>"col-sm-3 control-label")) }}
        <div class="col-sm-8">
            {{ Form::password('contrasena',array('class'=>"form-control",'id'=>'contra','placeholder'=>'Introdusca una contraseña valida para continuar')) }}
        </div>
    </div>
  </div>
<div id='contenido' style='display: none;'>

                                <div class="form-group">
                                    {{ Form::label('apellido paterno','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('ap_paterno','',array('class'=>"form-control",'id'=>'ap_paterno')) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('apellido materno','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('ap_materno','',array('class'=>"form-control",'id'=>'ap_materno')) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('nombre','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('nombre','',array('class'=>"form-control",'id'=>'nombre')) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('fecha nacimiento','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::date('fecnacaseg','',array('class'=>"form-control",'id'=>'fecnacaseg')) }}
                                    </div>
                                </div>


                                <div class="form-group">
                                    {{ Form::label('Sexo','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::select('sexo', [
                                        'M' => 'Masculino',
                                        'F' => 'Femenino'],
                                    '', ['class'=>"form-control", 'placeholder'=>"",'id'=>'sexo']  ) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('Edo. civil','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::select('edocivil', [
                                        'NOAPLICA' => 'No aplica'
                                        ],
                                    '', ['class'=>"form-control", 'placeholder'=>"",'id'=>'edocivil']  ) }}
                                    </div>
                                </div>



                               <!-- 
                                <div class="form-group">
                                    {{ Form::label('Nombre conyuge','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('nomconyuge','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'nombconyuge')) }}
                                    </div>
                                </div>

                                  <div class="form-group">
                                    {{ Form::label('Fecha nacimiento conyuge','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::date('fechconyuge','',array('class'=>"form-control",'id'=>'fechconyuge')) }}
                                    </div>
                                </div>

                              -->

    														<div class="form-group">
                                    {{ Form::label('Nombre de la persona que autoriza el seguro','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('autoriza','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'autoriza')) }}
                                    </div>
                                </div>


                                <div class="form-group">
                                  {{ Form::label('Parentesco','',array('class'=>"col-sm-3 control-label")) }}
                                  <div class="col-sm-8">
                                      {{ Form::select('parentesco', [
                                      'ARRENDATARIO' => 'ARRENDATARIO',
                                      'ESPOSA'=>'ESPOSA',
                                      'ESPOSO'=>'ESPOSO',
                                      'HERMANA'=>'HERMANA',
                                      'HERMANO'=>'HERMANO',
                                      'HIJA'=>'HIJA',
                                      'HIJO'=>'HIJO',
                                      'MADRE'=>'MADRE',
                                      'PADRE'=>'PADRE',
                                      'TITULAR' => 'TITULAR',
                                      'NINGUNO' => 'NINGUNO'
                                      ],
                                  '', ['class'=>"form-control", 'placeholder'=>"",'id'=>'parentesco']  ) }}
                                  </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('Correo Electrónico','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::email('correo','',array('class'=>"form-control",'id'=>'correo')) }}
                                    </div>
                               </div>

                               <!--
                               <div class="form-group">
                                   {{ Form::label('Nombre Campaña','',array('class'=>"col-sm-3 control-label")) }}
                                   <div class="col-sm-8">
                                       {{ Form::text('orig_alta','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'orig_alta')) }}
                                   </div>
                               </div>

                             -->

																<!--
                                <div class="form-group">
	                                   {{ Form::label('Estatus Movimiento','',array('class'=>"col-sm-3 control-label")) }}
	                                   <div class="col-sm-8">
	                                       {{ Form::select('estatus_movimiento', [
	                                       'ESTATUS1'=>'Estatus1',
	                                       'ESTATUS2'=>'Estatus2',
	                                       'ESTATUS3'=>'Estatus3',
	                                       'ESTATUS4'=>'Estatus4',],
	                                   '', [ 'class'=>"form-control", 'placeholder'=>"",'id'=>'estatus_movimiento']  ) }}
	                                   </div>
	                              </div>

                              -->

                               <div class="form-group">
                                   {{ Form::label('Fecha en que se hizo el movimiento','',array('class'=>"col-sm-3 control-label")) }}
                                   <div class="col-sm-8">
                                       {{ Form::date('fecha_capt',date('Y-m-d'),array('class'=>"form-control", 'placeholder'=>"",'readonly'=>'readonly','id'=>'fecha_capt')) }}
                                   </div>
                               </div>

                               <div class="form-group">
                                   {{ Form::label('Dirección','',array('class'=>"col-sm-3 control-label")) }}
                                   <div class="col-sm-8">
                                       {{ Form::text('direccion','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'direccion')) }}
                                   </div>
                               </div>

                               <!--
                               <div class="form-group">
                                   {{ Form::label('Número exterior','',array('class'=>"col-sm-3 control-label")) }}
                                   <div class="col-sm-8">
                                       {{ Form::text('num_ext','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'num_ext')) }}
                                   </div>
                                </div>

                              -->

                               <div class="form-group">
                                   {{ Form::label('Vialidad','',array('class'=>"col-sm-3 control-label")) }}
                                   <div class="col-sm-8">
                                       {{ Form::select('vialidad', [
                                        'AND '=>'ANDADOR',
                                        'AUT '=>'AUTOPISTA',
                                        'AV '=>'AVENIDA',
                                        'BJD '=>'BAJADA',
                                        'BLV '=>'BOULEVARD',
                                        'CALZ '=>'CALZADA',
                                        'CALLE  (SIN ABREVIATURA)'=>'CALLE',
                                        'CJON '=>'CALLEJON',
                                        'CAM '=>'CAMINO',
                                        'CARR '=>'CARRETERA',
                                        'CDA '=>'CERRADA',
                                        'CTO '=>'CIRCUITO',
                                        'CVLN'=>'CIRCUNVALACION',
                                        'CRO '=>'CRUCERO',
                                        'CUCH '=>'CUCHILLA',
                                        'DIAG '=>'DIAGONAL',
                                        'EJE '=>'EJE',
                                        'GTA '=>'GLORIETA',
                                        'JDN '=>'JARDIN',
                                        'LIB '=>'LIBRAMIENTO',
                                        'PRJ '=>'PARAJE',
                                        'PARQ '=>'PARQUE',
                                        'PSJ '=>'PASAJE',
                                        'PSO '=>'PASEO',
                                        'PERIF '=>'PERIFERICO',
                                        'PZA '=>'PLAZA',
                                        'PRIV '=>'PRIVADA',
                                        'PROL '=>'PROLONGACION',
                                        'RML '=>'RAMAL',
                                        'RET '=>'RETORNO',
                                        'RCDA '=>'RINCONADA',
                                        'VDA '=>'VEREDA',
                                        'VIA '=>'VIA',
                                        'VDTO '=>'VIADUCTO',
                                        ],
                                   '', ['class'=>"form-control", 'placeholder'=>"",'id'=>'vialidad']  ) }}
                                   </div>
                                 </div>

                                 <div class="form-group">
                                   {{ Form::label('Vivienda','',array('class'=>"col-sm-3 control-label")) }}
                                   <div class="col-sm-8">
                                       {{ Form::select('vivienda', [
                                       'NEG' => 'NEGOCIO'],
                                   '', [ 'class'=>"form-control", 'placeholder'=>"",'id'=>'vivienda']  ) }}
                                   </div>
                                 </div>

                                 <div class="form-group">
                                     {{ Form::label('Número interior','',array('class'=>"col-sm-3 control-label")) }}
                                     <div class="col-sm-8">
                                         {{ Form::text('numint','',array('class'=>"form-control", 'placeholder'=>"Escribe 0 si no tiene numero interior",'id'=>'numint')) }}
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     {{ Form::label('Piso','',array('class'=>"col-sm-3 control-label")) }}
                                     <div class="col-sm-8">
                                         {{ Form::text('piso','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'piso')) }}
                                     </div>
                                  </div>

                                  <div class="form-group">
                                      {{ Form::label('Tipo de asentamiento','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::select('asentamien', [
                                          'AMPL' => 'Ampliacion',
                                          'APTO' => 'Aeropuerto',
                                          'BO'=> 'Barrio',
                                          'CAMP'=>'Campamento',
                                          'CD'=>'Ciudad',
                                          'CGOLF'=>'Club de Golf',
                                          'CHAB'=>'Conjunto Habitacional',
                                          'CI'=>'Conjunto Industrial',
                                          'CNGR'=>'Congregacion',
                                          'COL'=>'Colonia',
                                          'COND'=>'Centro',
                                          'CURB'=>'Centro Urbano',
                                          'EJ'=>'Ejido',
                                          'EST'=>'Estacion',
                                          'EXHDA'=>'Ex Hacienda',
                                          'FINCA'=>'Finca',
                                          'FRAC'=>'Fraccion',
                                          'FRACC'=>'Fraccionamiento',
                                          'GRNJA'=>'Granja',
                                          'GU'=>'Gran Usuario',
                                          'HDA'=>'Hacienda',
                                          'PBO'=>'Pueblo',
                                          'PCOM'=>'Poblado Comunal',
                                          'PIND'=>'Parque Industrial',
                                          'PTO'=>'Puerto',
                                          'RCHO'=>'Rancho o Rancheria',
                                          'RES'=>'Residencial',
                                          'UHAB'=>'Unidad Habitacional',
                                          'UNID'=>'Unidad',
                                          'VILLA'=>'Villla',
                                          'ZFED'=>'Zona Federal',
                                          'ZIND'=>'Zona Industrial',
                                          'ZRUR'=>'Zona Rural',
                                          'ZURB'=>'Zona Urbana'],
                                      '', ['class'=>"form-control", 'placeholder'=>"",'id'=>'asentamien']  ) }}
                                      </div>
                                    </div>


                                    <div class="form-group">
                                        {{ Form::label('Estado *','',array('class'=>"col-sm-3 control-label")) }}
                                        <div class="col-sm-8">
                                             {{Form::select('state',$states->prepend(''),'',['id'=>'state','class'=>'form-control','placeholder'=>'Selecciona un estado'])}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('Delegación/Municipio *','',array('class'=>"col-sm-3 control-label")) }}
                                        <div class="col-sm-8">
                                             {{Form::select('town',[],'',['id'=>'town','class'=>'form-control','placeholder'=>'Selecciona una delegacion o municipio'])}}
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        {{ Form::label('Colonia *','',array('class'=>"col-sm-3 control-label")) }}
                                        <div class="col-sm-8">
                                             {{Form::select('col',[],'',['id'=>'col','class'=>'form-control','placeholder'=>'Selecciona una colonia'])}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('Código Postal *','',array('class'=>"col-sm-3 control-label")) }}
                                        <div class="col-sm-8">
                                             {{Form::select('cp',[],'',['id'=>'cp','class'=>'form-control','placeholder'=>'Selecciona una colonia'])}}
                                        </div>
                                    </div>

																		<div class="form-group">
                                       {{ Form::label('Calle_1','',array('class'=>"col-sm-3 control-label")) }}
                                       <div class="col-sm-8">
                                           {{ Form::text('Calle_1','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'calle1','maxlength'=>'50','minlength'=>'0')) }}
                                       </div>
                                    </div>

																		<div class="form-group">
                                       {{ Form::label('Calle_2','',array('class'=>"col-sm-3 control-label")) }}
                                       <div class="col-sm-8">
                                           {{ Form::text('Calle_2','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'calle2','maxlength'=>'50','minlength'=>'0')) }}
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       {{ Form::label('Ref 1','',array('class'=>"col-sm-3 control-label")) }}
                                       <div class="col-sm-8">
                                           {{ Form::text('ref_1','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'ref1','maxlength'=>'50','minlength'=>'0')) }}
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       {{ Form::label('Ref 2','',array('class'=>"col-sm-3 control-label")) }}
                                       <div class="col-sm-8">
                                           {{ Form::text('ref_2','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'ref2','maxlength'=>'50','minlength'=>'0')) }}
                                       </div>
                                    </div>

                                    <div class="form-group" >
                                      {{ Form::label('RVT','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::text('rvtname',$value['nombre_completo'],array('class'=>"form-control", 'placeholder'=>"",'readonly'=>'readonly','id'=>'aceptaventa')) }}
                                      </div>
                                    </div>

                                    <!-- <div class="form-group" style='display:none;'>
                                            <div class="col-sm-8">
                                                {{ Form::text('rvt',$value['user'],array('class'=>"form-control", 'placeholder'=>"",'readonly'=>'readonly','id'=>'aceptaventa2')) }}
                                            </div>
                                    </div> -->

                                   <div class="form-group">
                                           {{ Form::label('turno','',array('class'=>"col-sm-3 control-label")) }}
                                           <div class="col-sm-8">
                                             {{ Form::select('turno', [
                                             'M' => 'MATUTINO',
                                             'V'=> 'VESPERTINO'],
                                         '', ['class'=>"form-control", 'placeholder'=>"",'id'=>'turno']  ) }}
                                           </div>
                                    </div>

                                    <div class="form-group">
                                            {{ Form::label('Hora de inicio de la llamada de venta','',array('class'=>"col-sm-3 control-label")) }}
                                            <div class="col-sm-8">
                                                {{ Form::time('hora_ini',$hora,array('class'=>"form-control", 'placeholder'=>"",'readonly'=>'readonly')) }}
                                            </div>
                                    </div>

                                    <!--
                                    <div class="form-group">
										                    {{ Form::label('Hora de fin de la llamada de venta','',array('class'=>"col-sm-3 control-label")) }}
										                    <div class="col-sm-8">
										                        {{ Form::time('hora_fin',null,array('class'=>"form-control", 'placeholder'=>"")) }}
										                    </div>
										                </div>

                                  -->

                                    <div class="form-group">
                                          {{ Form::label('# de pisos de la construcción','',array('class'=>"col-sm-3 control-label")) }}
                                          <div class="col-sm-8">
                                              {{ Form::text('num_pisos','',array('class'=>"form-control", 'placeholder'=>"No puede ser mayor al valor en el Capo Piso",'id'=>'num_pisos')) }}
                                          </div>
                                    </div>

																		<div class="form-group">
                                       {{ Form::label('Cubierta','',array('class'=>"col-sm-3 control-label")) }}
                                       <div class="col-sm-8">
                                           {{ Form::select('cubierta', [
                                             '1' => 'CUBIERTA PESADA',
                                             '2'=> 'CUBIERTA LIGERA SIN DISEÑO',
                                             '3' => 'CUBIERTA LIGERA CON DISEÑO GENERICO',
                                             '4' => 'CUBIERTA LIGERA CON DISEÑO ESPECIFICO'],
                                         '', ['class'=>"form-control", 'placeholder'=>"",'id'=>'cubierta']  ) }}
 
                                       </div>
                                    </div>

                                    <!--
                                    <div class="form-group">
                                       {{ Form::label('Tipo fuente','',array('class'=>"col-sm-3 control-label")) }}
                                       <div class="col-sm-8">
                                           {{ Form::text('tipo_fuente','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'tipo_fiente',)) }}
                                       </div>
                                    </div>
                                  -->

                                    <!--
                                    <div class="form-group">
                                       {{ Form::label('Linea marcacion','',array('class'=>"col-sm-3 control-label")) }}
                                       <div class="col-sm-8">
                                           {{ Form::text('linea_mar','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'linea_mar')) }}
                                       </div>
                                    </div>
                                    -->

                                    <div class="form-group">
                                           {{ Form::label('Numero celular','',array('class'=>"col-sm-3 control-label")) }}
                                           <div class="col-sm-8">
                                             {{ Form::text('num_cel','',array('class'=>"form-control",'maxlength'=>'10', 'placeholder'=>"",'id'=>'num_cel')) }}
                                             <br>
                                             
                                             <label>Compañia</label>
                                             {{ Form::select('ref_1_tel', [
                                             'TELCEL' => 'TELCEL',
                                             'IUSACELL' => 'IUSACELL',
                                             'TELEFONICA_MOVISTAR' => 'TELEFONICA MOVISTAR',
                                             'UNEFON' => 'UNEFON',
                                             'OTRO' => 'OTRO',
                                             'ATT' => 'AT&amp;T',
                                             'NEXTEL' => 'NEXTEL',
                                             'VIRGIN' => 'VIRGIN'],
                                         '', ['class'=>"form-control", 'placeholder'=>"",'id'=>'comp_cel','onchange'=>'compval()']  ) }}
                                         <br>
                                         <label>Otra compañia</label>
                                         {{ Form::text('otra_comp_cel','',array('class'=>"form-control",'placeholder'=>"Nombre de la otra compañia telefonica",'id'=>'otra_comp_cel')) }}
                                          </div>
                                        </div>

                                        
                                        <!--
                                        <div class="form-group">
                                       		{{ Form::label('Validador','',array('class'=>"col-sm-3 control-label")) }}
                                       		<div class="col-sm-8">
                                           {{ Form::text('validador','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'validador')) }}
                                       		</div>
                                    		</div>
                                      -->


                                        <div class="form-group">
                                            {{ Form::label('Validador','',array('class'=>"col-sm-3 control-label")) }}
                                            <div class="col-sm-8">
                                                {{ Form::select('validador', $validadores,
                                                    null, [ 'class'=>"form-control", 'placeholder'=>"",'id'=>'validador']  ) }}
                                            </div>
                                        </div>




                                    		<div class="form-group">
                                       		{{ Form::label('Nombre empresa','',array('class'=>"col-sm-3 control-label")) }}
                                       		<div class="col-sm-8">
                                           {{ Form::text('nombre_empresa','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'nombre_empresa')) }}
                                       		</div>
                                    		</div>


                                        <div class="form-group">
                                           {{ Form::label('Giro Comercial','',array('class'=>"col-sm-3 control-label")) }}
                                           <div class="col-sm-8">
                                             {{ Form::select('giro', [
                                              'A2' => 'ABONOS Y/O FERTILIZANTES, BODEGA Y/O EXPENDIO',
                                              'A3' => 'ACEITE DE PESCADO, FABRICA DE',
                                              'A4' => 'ACEITE VEGETAL, FABRICA DE',
                                              'A5' => 'ACEITE, HIDROGENADOR',
                                              'A6' => 'ACEITE, REFINADOR',
                                              'A7' => 'ACEITES ESENCIALES Y/O AROMATIZANTES, FABRICA DE',
                                              'A8' => 'ACEITES, GRASAS Y LUBRICANTES, BODEGA Y/O EXPENDIO',
                                              'A9' => 'ACEITES, GRASAS Y LUBRICANTES, FABRICA',
                                              'A10' => 'ACERO Y/O FIERRO, BODEGA Y/O EXPENDIO',
                                              'A11' => 'ACUARIOS, ACCESORIOS, BODEGA Y/O EXPENDIO',
                                              'A12' => 'ACUMULADORES, BODEGA Y/O EXPENDIO',
                                              'A13' => 'ACUMULADORES, FABRICA DE',
                                              'A14' => 'ADUANA AGENCIA, BODEGAS',
                                              'A15' => 'AEROBICS',
                                              'A16' => 'AEROPUERTO',
                                              'A17' => 'AFILADURIA',
                                              'A18' => 'AGENCIA ADUANAL ,OFICINAS',
                                              'A19' => 'AGENCIA DE AUTOMOVILES',
                                              'A20' => 'AGENCIA DE INHUMACIONES',
                                              'A21' => 'AGENCIA DE PUBLICIDAD',
                                              'A22' => 'AGENCIA DE VIAJES',
                                              'A23' => 'AGUA EMBOTELLADA, BODEGA',
                                              'A24' => 'AGUA EMBOTELLADA, EXPENDIO',
                                              'A25' => 'AGUA MINERAL O GASEOSA, BODEGA',
                                              'A26' => 'AGUA MINERAL O GASEOSA, EXPENDIO',
                                              'A27' => 'AGUA MINERAL O GASEOSA, PLANTA DE ENVASADO',
                                              'A28' => 'AGUA, ESTACION DE BOMBEO',
                                              'A29' => 'AGUA, PLANTA DE TRATAMIENTO DE',
                                              'A30' => 'AGUA, PURIFICACION Y ENVASADO DE',
                                              'A31' => 'AGUA, TANQUE ELEVADO',
                                              'A32' => 'AGUA, TORRE DE ENFRIAMIENTO',
                                              'A33' => 'AGUARDIENTE, BODEGA Y/O EXPENDIO',
                                              'A34' => 'AGUARDIENTE, FABRICA DE',
                                              'A35' => 'AGUARRAS, BODEGA Y/O EXPENDIO',
                                              'A36' => 'AGUARRAS, FABRICA DE',
                                              'A37' => 'ALAMBRE, FABRICACION DE',
                                              'A38' => 'ALBERCAS, EQUIPOS PARA, BODEGA Y/O EXPENDIO',
                                              'A39' => 'ALCOHOL, BODEGA Y/O EXPENDIO',
                                              'A40' => 'ALCOHOL, FABRICA DE',
                                              'A41' => 'ALFARERIA Y/O ARTESANIAS, BODEGA Y/O EXPENDIO',
                                              'A42' => 'ALFARERIA Y/O ARTESANIAS, FABRICA Y/O TALLER',
                                              'A43' => 'ALFOMBRAS, TAPETES Y/O TAPICES, BODEGA Y/O EXPENDIO',
                                              'A44' => 'ALFOMBRAS, TAPETES Y/O TAPICES, FABRICA DE',
                                              'A45' => 'ALIMENTO PARA ANIMALES, BODEGA Y/O EXP. S.PASTOS',
                                              'A46' => 'ALIMENTO PARA ANIMALES, FABRICA DE, CON PASTOS SEC.',
                                              'A47' => 'ALIMENTO PARA ANIMALES,FABRICA DE, SIN PASTOS SEC.',
                                              'A48' => 'ALMACEN GENERAL DE DEPOSITO, CONCESION FEDERAL',
                                              'A49' => 'ANIMALES, ESTABLO Y/O GANADO EN PIE',
                                              'A50' => 'ANIMALES, GRANJA AVICOLA Y/O INCUBADORA Y/O SELEC.',
                                              'A51' => 'ANTIGUEDADES, BAZAR Y/O CURIOSIDADES EXPENDIO',
                                              'A52' => 'ANUNCIOS DE NEON, BODEGA Y/O EXPENDIO',
                                              'A53' => 'ANUNCIOS LUMINOSOS, FABRICA Y/O TALLER DE',
                                              'A54' => 'APARATOS CIENTIFICOS, BODEGA Y/O EXPENDIO',
                                              'A55' => 'APARATOS CIENTIFICOS, FABRICA DE',
                                              'A56' => 'APARATOS ELECTRICOS, BODEGA Y/O EXPENDIO',
                                              'A57' => 'APARATOS ELECTRICOS, FABRICA Y/O TALLER DE',
                                              'A58' => 'APARATOS ELECTRONICOS, BODEGA Y/O EXPENDIO',
                                              'A59' => 'APARATOS ELECTRONICOS, FABRICA Y/O TALLER DE',
                                              'A60' => 'ARMAS DE FUEGO Y CARTUCHOS, EXPENDIO',
                                              'A61' => 'ARROZ, BENEFICIO DE',
                                              'A62' => 'ASBESTO, BODEGA Y/O EXPENDIO DE ARTICULOS DE',
                                              'A63' => 'ASBESTO, FABRICA DE ARTICULOS',
                                              'A64' => 'ASERRADERO',
                                              'A65' => 'ASTILLERO, PARA ARMAR CASCOS DE ACERO',
                                              'A66' => 'ASTILLERO, PARA ARMAR CASCOS DE MADERA',
                                              'A67' => 'AUTOMOVILES Y/O CAMIONES, FABRICACION Y/O ARMADO',
                                              'A68' => 'AUTOPARTES, FABRICACION DE',
                                              'A69' => 'AZUCAR, BODEGA Y/O EXPENDIO',
                                              'A70' => 'AZUCAR, FABRICA DE, SIN OBTENCION DE AGUARDIENTE',
                                              'A71' => 'AZUCAR, INGENIO',
                                              'A72' => 'AZUFRE, BODEGA Y/O EXPENDIO',
                                              'A73' => 'AZUFRE, PLANTA EXTRACTORA DE',
                                              'A74' => 'AZULEJOS Y/O MOSAICOS, BODEGA Y/O EXPENDIO',
                                              'A75' => 'AZULEJOS Y/O MOSAICOS, FABRICA Y/O TALLER DE',
                                              'B1' => 'BANCO Y/O CASA DE CAMBIO',
                                              'B2' => 'BAÑO PUBLICO',
                                              'B3' => 'BARNICES Y/O PINTURAS, FABRICA',
                                              'B4' => 'BASURA, PLATA DE APROVECHAMIENTO DE',
                                              'B5' => 'BAULES Y PETACAS, BODEGA Y/O EXPENDIO',
                                              'B6' => 'BIBLIOTECA PUBLICA',
                                              'B7' => 'BICICLETAS Y ACCESORIOS, BODEGA Y/O EXPENDIO',
                                              'B8' => 'BICICLETAS, FABRICACION, TALLER Y/O ARMADO',
                                              'B9' => 'BILLAR Y/O BOLICHE SALON DE',
                                              'B10' => 'BONETERIA Y/O MERCERIA, BODEGA Y/O EXPENDIO',
                                              'B11' => 'BORRA, ESTOPA Y/O GUATA, FABRICA DE',
                                              'B12' => 'BROCHAS Y PINCELES, FABRICA DE',
                                              'C1' => 'CAFE, BENEFICIADORA DE',
                                              'C2' => 'CAFE, BODEGA Y/O EXPENDIO',
                                              'C3' => 'CAFE, MOLINO Y TOSTADOR DE',
                                              'C4' => 'CAFETERIA, CON JUEGOS ELECTRONICOS',
                                              'C5' => 'CAJA POPULAR',
                                              'C6' => 'CAL, FABRICA DE',
                                              'C7' => 'CARNES FRIAS Y/O CREMERIA, BODEGA Y/O EXPENDIO',
                                              'C8' => 'CARPINTERIA Y/O EBANISTERIA, TALLER DE',
                                              'C9' => 'CARTUCHOS, FABRICA DE, POLVORA 2KG. POR MAQUINA',
                                              'C10' => 'CARTUCHOS,FCA.DE,POLVORA MAS DE 2KG.POR MAQUINA',
                                              'C11' => 'CASA DE BOLSA',
                                              'C12' => 'CASA DE EMPEÑO',
                                              'C13' => 'CASA DE HUESPEDES Y/O MOTEL',
                                              'C14' => 'CELULARES Y ACCESORIOS, BODEGA Y/O EXP. Y/O TALLER',
                                              'C15' => 'CELULOSA, FABRICA DE',
                                              'C16' => 'CEMENTO, FABRICA DE',
                                              'C17' => 'CENTRO COMERCIAL Y/O TIENDA DEPARTAMENTAL',
                                              'C18' => 'CERAS Y PASTAS PARA LIMPIAR METALES, FABRICA DE',
                                              'C19' => 'CEREALES, GRANOS Y SEMILLAS, BENEFICIADORA',
                                              'C20' => 'CEREALES, GRANOS Y SEMILLAS, BODEGA Y/O EXPENDIO',
                                              'C21' => 'CEREALES, GRANOS Y SEMILLAS, MOLINO DE',
                                              'C22' => 'CERILLOS, FABRICA DE',
                                              'C23' => 'CERVEZA Y MALTA, FABRICA DE',
                                              'C24' => 'CERVEZA, BODEGA Y/O EXPENDIO',
                                              'C25' => 'CIGARROS Y/O PUROS Y/O CERILLOS, BODEGA Y/O EXP.',
                                              'C26' => 'CIGARROS, FABRICACION DE',
                                              'C27' => 'CINTAS MAGNETOFONICAS, CENTRO DE GRABACION DE',
                                              'C28' => 'COCOA Y/O CHOCOLATE DE MESA, ELABORACION DE',
                                              'C29' => 'COLCHONES, BODEGA Y/O EXPENDIO',
                                              'C30' => 'COLCHONES, FABRICA DE',
                                              'C31' => 'CONCRETO, ELEMENTOS PREFABRICADOS',
                                              'C32' => 'CONSERVAS ALIMENTICIAS, FABRICA',
                                              'C33' => 'CONSULTORIO MEDICO Y/O DENTAL',
                                              'C34' => 'COPRA, BODEGA',
                                              'C35' => 'COSMETICOS Y SIMILARES, FABRICA DE',
                                              'C36' => 'CUEROS Y/O PIELES, BODEGA Y/O EXPENDIO',
                                              'C37' => 'CUEROS Y/O PIELES, FABRICACION DE ARTICULOS DE',
                                              'C38' => 'CULTIVOS EN PIE',
                                              'C39' => 'CURTIDURIA Y/O TENERIA',
                                              'D1' => 'DENTRIFICOS, FABRICACION DE',
                                              'D2' => 'DEPORTES, ARTICULOS DE BODEGA Y/O EXPENDIO',
                                              'D3' => 'DEPORTIVO',
                                              'D4' => 'DESHIDRATADORA, PLANTA',
                                              'D5' => 'DETERGENTES Y JABONES, FABRICA DE',
                                              'D6' => 'DISCOS MAGNETICOS, FABRICACION DE',
                                              'D7' => 'DISCOS Y/O CASETTES MUSICALES, BODEGA Y/O EXPENDIO',
                                              'D8' => 'DISCOTEQUE Y/O SALON DE BAILE',
                                              'D9' => 'DULCES, CHOCOLATES Y/O CAJETAS, BODEGA Y/O EXPENDIO',
                                              'D10' => 'DULCES,CHOCOLATES Y/O CAJETAS, FABRICA DE',
                                              'E1' => 'EDIFICIO DESOCUPADO Y/O DESHABITADO',
                                              'E2' => 'ELECTRICIDAD, ARTICULOS PARA, BODEGA Y/O EXPENDIO',
                                              'E3' => 'ELECTRICIDAD, FABRICA DE ARTICULOS PARA',
                                              'E4' => 'ELECTRICIDAD, PLANTA GENERADORA Y/O DISTRIBUIDORA',
                                              'E5' => 'EMPACADORA DE FRUTAS Y LEGUMBRES',
                                              'E6' => 'EMPACADORA DE PRODUCTOS DEL MAR',
                                              'E7' => 'EMPAQUES DE YUTE O LINO, BODEGA Y/O EXPENDIO',
                                              'E8' => 'EMPAQUES DE YUTE O LINO, FABRICA DE',
                                              'E9' => 'ENCUADERNACION, TALLER DE',
                                              'E10' => 'EQPO. E INSTRUMENTAL MEDICO, BODEGA Y/O EXPENDIO',
                                              'E11' => 'ESCOBAS Y SIMILARES, BODEGA Y/O EXPENDIO',
                                              'E12' => 'ESCOBAS Y SIMILARES, FABRICA DE',
                                              'E13' => 'ESCUELA, COLEGIO Y/O INSTITUTO DE ENSEÑANZA',
                                              'E14' => 'ESPECIAS, BODEGA Y/O EXPENDIO',
                                              'E15' => 'ESPECIAS, SECADORA',
                                              'E16' => 'ESPECTACULO PUBLICO AL AIRE LIBRE',
                                              'E17' => 'ESPECTACULO PUBLICO CUBIERTO',
                                              'E18' => 'ESTACIONAMIENTO PUBLICO',
                                              'E19' => 'ESTETICA, PELUQUERIA Y/O SALON DE BELLEZA',
                                              'E20' => 'ESTUDIOS CINEMATOGRAFICOS, LOCAL DE FILMACION',
                                              'F1' => 'FARMACEUTICOS, FABRICACION DE PRODUCTOS',
                                              'F2' => 'FARMACIA',
                                              'F3' => 'FERRETERIA Y/O TLAPALERIA BODEGA Y/O EXPENDIO',
                                              'F4' => 'FERTILIZANTES Y/O ABONOS, FABRICA DE',
                                              'F5' => 'FIBRAS VEGETALES, BODEGA Y/O EXPENDIO',
                                              'F6' => 'FIBRAS VEGETALES, FABRICA, ARTICULOS DE',
                                              'F7' => 'FLORERIA',
                                              'F8' => 'FOTOCOPIADO Y/O FOTOGRABADO, TALLER DE',
                                              'F9' => 'FOTOGRAFIA, FABRICA DE MATERIALES PARA',
                                              'F10' => 'FOTOGRAFIA, TALLER DE REVELADO, ESTUDIO, BOD. Y/O EXP',
                                              'F11' => 'FRITURAS, BODEGA Y/O EXPENDIO',
                                              'F12' => 'FRITURAS, FABRICA DE',
                                              'F13' => 'FRUTAS Y LEGUMBRES, BODEGA Y/O EXPENDIO',
                                              'F14' => 'FUNERARIA, AGENCIA O VELATORIO',
                                              'G1' => 'GALERIA DE ARTE',
                                              'G2' => 'GALLETAS, BODEGA Y/O EXPENDIO',
                                              'G3' => 'GALLETAS, FABRICA',
                                              'G4' => 'GASERIA, COMBUSTIBLE DE VEHICULOS',
                                              'G5' => 'GASES PROPANO O BUTANO',
                                              'G6' => 'GASOLINERIA Y/O DIESEL, EXPENDIO',
                                              'H1' => 'HARINAS DE ORIGEN ANIMAL, FABRICA DE',
                                              'H2' => 'HARINAS VEGETALES, FABRICA DE',
                                              'H3' => 'HELADOS, NIEVES Y PALETAS, BODEGA Y/O EXPENDIO',
                                              'H4' => 'HELADOS, NIEVES Y PALETAS, FABRICA',
                                              'H5' => 'HERRERIA, TALLER Y/O EXPENDIO DE',
                                              'H6' => 'HIELO, EXPENDIO Y/O BODEGA',
                                              'H7' => 'HIELO, FABRICA DE',
                                              'H8' => 'HOJALATERIA, TALLER DE',
                                              'H9' => 'HOSPITAL Y/O SANATORIO',
                                              'H10' => 'HOTEL',
                                              'H11' => 'HUEVO, BODEGA Y/O EXPENDIO',
                                              'H12' => 'HULE ARTICULOS DE, BODEGA Y/O EXPENDIO',
                                              'H13' => 'HULE FABRICA DE',
                                              'I1' => 'IGLESIA Y/O TEMPLO Y/O CONVENTO',
                                              'I2' => 'IMPERMEABILIZANTES, FABRICACION DE',
                                              'I3' => 'IMPRENTA Y/O LITOGRAFIA',
                                              'I4' => 'INSECTICIDAS, PLANTA MEZCLADORA',
                                              'I5' => 'INSTRUMENTOS MUSICALES, BODEGA Y/O EXPENDIO',
                                              'I6' => 'INSTRUMENTOS MUSICALES, FABRICA',
                                              'I7' => 'INVERNADERO',
                                              'J1' => 'JARCIERIA',
                                              'J2' => 'JOYERIA Y/O RELOJERIA, BODEGA Y/O EXPENDIO',
                                              'J3' => 'JOYERIA Y/O RELOJERIA, FABRICA Y/O TALLER',
                                              'J4' => 'JUGUETERIA, BODEGA Y/O EXPENDIO',
                                              'J5' => 'JUGUETERIA, FABRICACION DE',
                                              'L1' => 'LABORATORIO',
                                              'L2' => 'LADRILLOS Y TEJAS, FABRICA DE',
                                              'L3' => 'LAVANDERIA',
                                              'L4' => 'LECHE Y SUS DERIVADOS, BODEGA Y/O EXPENDIO',
                                              'L5' => 'LECHE Y SUS DERIVADOS, FABRICA DE',
                                              'L6' => 'LEVADURAS, FABRICACION',
                                              'L7' => 'LIBRERIA',
                                              'L8' => 'LLANTAS Y CAMARAS, BODEGA Y/O EXPENDIO',
                                              'L9' => 'LLANTAS, FABRICACION DE',
                                              'M1' => 'MADERA, BODEGA Y/O EXPENDIO',
                                              'M2' => 'MADERA, FABRICA DE ARTICULOS DE',
                                              'M3' => 'MAQUINARIA AGRICOLA INDUST.REFACC.ACC.EXPENDIO',
                                              'M4' => 'MAQUINARIA AGRICOLA TRABAJANDO EN EL CAMPO',
                                              'M5' => 'MAQUINARIA, BODEGA Y/O EXPENDIO',
                                              'M6' => 'MAQUINARIA, FABRICACION Y/O ARMADO',
                                              'M7' => 'MAQUINARIA, TALLER DE REPARACION',
                                              'M8' => 'MAQUINAS PARA COSER Y ESCRIBIR, BODEGA Y/O EXPENDIO',
                                              'M9' => 'MATERIAL PARA LA CONST. ACABADOS, BOD. Y/O EXP.',
                                              'M10' => 'MATERIAL PARA LA CONST. OBRA NEGRA, BOD. Y/O EXP.',
                                              'M11' => 'MATERIAS PRIMAS PARA REPOSTERIA, BODEGA Y/O EXP.',
                                              'M12' => 'MATERIAS PRIMAS PARA REPOSTERIA, FABRICA',
                                              'M13' => 'MEDICINAS, BODEGA',
                                              'M14' => 'MERCADO PUBLICO',
                                              'M15' => 'METALES, BODEGA Y/O EXPENDIO',
                                              'M16' => 'METALES, FABRICA CON FUNDICION',
                                              'M17' => 'METALES, FABRICA SIN FUNDICION',
                                              'M18' => 'METALES, GALVANOPLASTIA',
                                              'M19' => 'MINERALES COMBUSTIBLES, BODEGA Y/O EXPENDIO',
                                              'M20' => 'MINERALES COMBUSTIBLES, MINA Y/O BENEFICIO DE',
                                              'M21' => 'MINERALES NO COMBUSTIBLES, BODEGA Y/O EXPENDIO',
                                              'M22' => 'MINERALES NO COMBUSTIBLES, MINA Y/O BENEFICIO DE',
                                              'M23' => 'MOLINO PARA MAIZ .NIXTAMAL.',
                                              'M24' => 'MOTOCICLETAS Y ACCESORIOS, BODEGA Y/O EXPENDIO',
                                              'M25' => 'MOTOCICLETAS, FABRICACION Y/O ARMADO Y/O TALLER',
                                              'M26' => 'MOTORES, BODEGA Y/O EXPENDIO',
                                              'M27' => 'MOTORES, FABRICA DE',
                                              'M28' => 'MUEBLERIA, BODEGA Y/O EXP. CON APARATOS ELECTRICOS',
                                              'M29' => 'MUEBLERIA, BODEGA Y/O EXP. SIN APARATOS ELECTRICOS',
                                              'M30' => 'MUEBLES DE MADERA, FABRICACION DE',
                                              'M31' => 'MUEBLES, FABRICACION DE .EXCEPTO MADERA.',
                                              'M32' => 'MUSEO',
                                              'O1' => 'OFICINAS GUBERNAMENTALES',
                                              'O2' => 'OFICINAS PARTICULARES',
                                              'O3' => 'OLEAGINOSAS, BODEGA Y/O EXPENDIO',
                                              'O4' => 'OLEAGINOSAS, MOLINO DE PASTA O DESCASCARADOR',
                                              'O5' => 'OLEAGINOSAS, TOSTADOR DE',
                                              'O6' => 'OPTICA, ARTICULOS DE, EXPENDIO',
                                              'O7' => 'OPTICA, ARTICULOS DE, FABRICA',
                                              'P1' => 'PAN, EXPENDIO',
                                              'P2' => 'PAN, FABRICACION DE',
                                              'P3' => 'PAÑALES DESECHABLES, BODEGA Y/O EXPENDIO',
                                              'P4' => 'PAÑALES DESECHABLES, FABRICA DE',
                                              'P5' => 'PAPEL Y/O CARTON DE DESPERDICIO, BODEGA',
                                              'P6' => 'PAPEL Y/O CARTON IMPERMEABILIZADO, BODEGA',
                                              'P7' => 'PAPEL Y/O CARTON, BODEGA',
                                              'P8' => 'PAPEL Y/O CARTON, FCA. DE, CON IMPERMEABILIZACION',
                                              'P9' => 'PAPEL Y/O CARTON, FCA. DE, SIN IMPERMEABILIZACION',
                                              'P10' => 'PAPEL Y/O CARTON, SELECCIONADORA DE',
                                              'P11' => 'PAPELERIA',
                                              'P12' => 'PASTAS ALIMENTICIAS, BODEGA Y/O EXPENDIO',
                                              'P13' => 'PASTAS ALIMENTICIAS, FABRICA DE',
                                              'P14' => 'PASTOS SECOS, BODEGA Y/O EXPENDIO',
                                              'P15' => 'PEGAMENTOS, BODEGA Y/O EXPENDIO',
                                              'P16' => 'PEGAMENTOS, FABRICA DE',
                                              'P17' => 'PERFUMES, BODEGA Y/O EXPENDIO',
                                              'P18' => 'PERFUMES, FABRICACION DE',
                                              'P19' => 'PERIODICOS Y REVISTAS, BODEGA Y/O EXPENDIO',
                                              'P20' => 'PERIODICOS Y REVISTAS, EDITORA DE',
                                              'P21' => 'PESCADOS Y/O MARISCOS, BODEGA Y/O EXPENDIO',
                                              'P22' => 'PILONCILLO, ELABORACION DE',
                                              'P23' => 'PINTURAS DE ACEITE, FABRICA DE',
                                              'P24' => 'PINTURAS VINILICAS, FABRICA DE',
                                              'P25' => 'PINTURAS, TALLER ARTISTICO',
                                              'P26' => 'PINTURAS, TINTAS, LACAS Y/O BARNICES BOD. Y/O EXP.',
                                              'P27' => 'PISTA DE HIELO PARA PATINAJE',
                                              'P28' => 'PIZZERIA',
                                              'P29' => 'PLANTA DE ASFALTO',
                                              'P30' => 'PLASTICOS, ARTICULOS DE, BODEGA Y/O EXPENDIO',
                                              'P31' => 'PLASTICOS, ARTICULOS DE, FABRICA',
                                              'P32' => 'POLLERIAS, BODEGA Y/O EXPENDIO',
                                              'P33' => 'PULQUERIA',
                                              'P34' => 'PUROS, FABRICACION DE',
                                              'R1' => 'RADIODIFUSORA',
                                              'R2' => 'RADIODIFUSORA, ANTENAS PARA, SEPARADAS',
                                              'R3' => 'RANCHO',
                                              'R4' => 'RASTRO U OBRADOR',
                                              'R5' => 'RECLUSORIO',
                                              'R6' => 'REFACCIONES Y ACCESORIOS PARA AUTOMOTORES',
                                              'R7' => 'REFACCIONES Y ACCESORIOS PARA MAQUINARIA',
                                              'R8' => 'REFRIGERADORA, PLANTA',
                                              'R9' => 'RESINAS, FABRICACION DE',
                                              'R10' => 'RESTAURANTE Y/O BAR',
                                              'R11' => 'ROPA, BODEGA Y/O EXPENDIO Y/O RENTA',
                                              'R12' => 'ROPA, TALLER Y/O CONFECCION',
                                              'R13' => 'ROSTICERIA',
                                              'S1' => 'SAL, BODEGA Y/O EXPENDIO',
                                              'S2' => 'SAL, PLANTA EXTRACTORA Y/O REFINADORA',
                                              'S3' => 'SOMBREROS, BODEGA Y/O EXPENDIO',
                                              'S4' => 'SOMBREROS, FABRICA DE, MATERIALES NO VEGETALES',
                                              'T1' => 'TABACO, GALERAS DE',
                                              'T2' => 'TABACO, SELECCIONADORA Y/O SECADORA',
                                              'T3' => 'TALLER MECANICO Y/O ELECTRICO',
                                              'T4' => 'TAMALES, EXPENDIO',
                                              'T5' => 'TAPICERIA, TALLER DE',
                                              'T6' => 'TAQUERIA Y/O TORTERIA',
                                              'T7' => 'TE, ENVASADO DE',
                                              'T8' => 'TELAS, BODEGA Y/O EXPENDIO',
                                              'T9' => 'TELEVISION, ANTENAS PARA, SEPARADAS',
                                              'T10' => 'TELEVISION, DIFUSORA Y/O REPETIDORA',
                                              'T11' => 'TERMINAL DE TRANSPORTE DE PASAJEROS',
                                              'T12' => 'TEXTIL, FABRICA, CON ROMPEDORAS',
                                              'T13' => 'TEXTIL, FABRICA, SIN ROMPEDORAS',
                                              'T14' => 'TINTORERIA Y/O PLANCHADURIA',
                                              'T15' => 'TORNERIA',
                                              'T16' => 'TORNILLERIA',
                                              'T17' => 'TORTILLERIA',
                                              'T18' => 'TRITURADORA DE PIEDRA, PLANTA',
                                              'V1' => 'VELAS, BODEGA Y/O EXPENDIO',
                                              'V2' => 'VELAS, FABRICA DE',
                                              'V3' => 'VETERINARIA Y/O ESTETICA PARA ANIMALES',
                                              'V4' => 'VIDEO JUEGOS, SALON DE',
                                              'V5' => 'VIDEOCLUB',
                                              'V6' => 'VIDRIO Y/O CRISTAL, BODEGA Y/O EXPENDIO',
                                              'V7' => 'VIDRIO Y/O CRISTAL, FABRICA DE',
                                              'V8' => 'VIDRIO, FIBRA DE, EXPENDIO Y/O TALLER',
                                              'V9' => 'VIDRIO, FIBRA DE, FABRICA',
                                              'V10' => 'VINAGRE, ELABORACION DE',
                                              'V11' => 'VINOS Y LICORES, BODEGA Y/O EXPENDIO',
                                              'V12' => 'VINOS Y LICORES, FABRICA DE',
                                              'V13' => 'VULCANIZADORA',
                                              'Z1' => 'ZAPATERIA DE PIEL, FABRICA DE',
                                              'Z2' => 'ZAPATERIA PLASTICO Y/O TELA, FABRICA DE',
                                              'Z3' => 'ZAPATERIA, BODEGA Y/O EXPENDIO'
                                             ],
                                         '', ['class'=>"form-control", 'placeholder'=>"",'id'=>'giro']  ) }}
                                           </div>
                                        </div>


                                    		<div class="form-group">
                                       		{{ Form::label('RFC','',array('class'=>"col-sm-3 control-label")) }}
                                       		<div class="col-sm-8">
                                           {{ Form::text('rfc','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'rfc', 'maxlength'=>'14','minlength'=>'12')) }}
                                       		</div>
                                    		</div>



                                    <!--  esto o se para que sirve
                                    <div class="form-group">
                                           {{ Form::label('ref 1','',array('class'=>"col-sm-3 control-label")) }}
                                           <div class="col-sm-8">
                                               {{ Form::text('ref_1','',array('class'=>"form-control", 'placeholder'=>"",'id'=>'ref_2')) }}
                                           </div>
                                        </div> -->                                     


</div>
                                       <div class="form-group">
                                           <div class="col-sm-offset-6 col-sm-1">
                                               {{ Form::submit('Enviar',['class'=>"btn btn-default",'id'=>'submit']) }}
                                           </div>
                                       </div>

               {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('/assets/js/jquery-3_2_1.min.js')}}" ></script>
<script type="text/javascript">

function validar() {
    if($('#motivo').val() == 'Mascarilla no venta' || $('#motivo').val() == 'Mascarilla venta'){
    if($('#contra').val() != '71028102'){
      return false;
    }
  }
}

$("#fecnacaseg").blur(function () {
  // alert($( this ).val().substr(0,4));
  var mes = parseInt($( this ).val().substr(5,2));
  var dia = parseInt($( this ).val().substr(8,2));
  var ano = parseInt($( this ).val().substr(0,4));
  // alert('Dia: ' + dia + ' Mes: ' + mes +  ' Año: ' + ano);
  fecha_hoy = new Date();
  ahora_ano = fecha_hoy.getYear();
  ahora_mes = fecha_hoy.getMonth();
  ahora_dia = fecha_hoy.getDate();
  edad = (ahora_ano + 1900) - ano;

  if ( ahora_mes < (mes - 1)){
    edad--;
  }
  if (((mes - 1) == ahora_mes) && (ahora_dia < dia)){
    edad--;
  }
  if (edad > 1900){
    edad -= 1900;
  }
  if(edad < 18 || edad > 64 ){
      alert("Edad no permitida: " + edad + " años!");
      $( this ).val('')
  }


});

$("#telefono").change(function () {
  var url="{{URL('/InbursaSoluciones/buscar/venta/')}}" + "/" + $( this ).val();

  $.get( url, function( data ) {
    if (data>0) {
      alert("El número ya esta en la base de ventas");
      $("#telefono").val('');
    }
  });

});

</script>
<script type="text/javascript">

function datosastriskSoluciones() {
  var url="{{URL('/inbursaSoluciones/llamadas/datos')}}";
  $.get( url, function( data ) {
    $("#nombre-asterisk").val(data.nombre);
    $("#telefono-asterisk").val(data.numero);
    $("#direccion-asterisk").val(data.direccion);
  });

}

function compval() {
	//compañia celular
   //console.log($('#ref_1_num').val());
  // console.log($('#ref_1_tel').val());
  console.log($('#comp_cel').val());

  if ($('#comp_cel').val()=="OTRO") {
    $('#otra_comp_cel').prop('required',true);
    $('#otra_comp_cel').prop('readonly',false);
  }
  else {
    $('#otra_comp_cel').prop('required',false);
    $('#otra_comp_cel').prop('readonly',true);
  }
}



function motivoval() {
 console.log($('#motivo').val());
if ($('#motivo').val()=="Mascarilla venta" || $('#motivo').val()=="Mascarilla no venta") {
  $('#divPass').attr("style",'');
  $('#contra').prop('required',true);

  $('#contenido').attr("style",'display:none');
  $("#aceptaventa").prop('disabled', true);

  $('#ap_paterno').prop('required',false);
  $('#ap_materno').prop('required',false);
  $('#nombre').prop('required',false);
  $('#fecnacaseg').prop('required',false);
  $('#sexo').prop('required',false);
  $('#autoriza').prop('required',false);
  $('#parentesco').prop('required',false);
  $('#direccion').prop('required',false);
  $('#vialidad').prop('required',false);
  $('#vivienda').prop('required',false);
  $('#asentamien').prop('required',false);
  $('#piso').prop('required',false);
  $('#state').prop('required',false);
  $('#town').prop('required',false);
  $('#col').prop('required',false);
  $('#cp').prop('required',false);
  $('#ref_2').prop('required',false);
  $('#turno').prop('required',false);
  $('#num_pisos').prop('required',false);
  $('#ref_1_num').prop('required',false);
  $('#ref_1_tel').prop('required',false);
}
  else if ($('#motivo').val()=="Venta") {
     console.log('Si Venta');
    $('#divPass').attr("style",'display:none');
    $('#contra').prop('required',false);

    $('#contenido').attr("style",'');
    // $('#contenido').prop('required',true);
    $('#ap_paterno').prop('required',true);
    $('#ap_materno').prop('required',true);
    $('#nombre').prop('required',true);
    $('#fecnacaseg').prop('required',true);
    $('#sexo').prop('required',true);
    $('#autoriza').prop('required',true);
    $('#parentesco').prop('required',true);
    $('#direccion').prop('required',true);
    // $('#num_ext').prop('required',true);
    $('#vialidad').prop('required',true);
    $('#vivienda').prop('required',true);
    // $('#numint').prop('required',true);
    $('#asentamien').prop('required',true);
    $('#piso').prop('required',true);
    $('#state').prop('required',true);
    $('#town').prop('required',true);
    $('#col').prop('required',true);
    $('#cp').prop('required',true);
    // $('#calle_1').prop('required',true);
    // $('#calle_2').prop('required',true);
    $('#ref_2').prop('required',true);
    $('#turno').prop('required',true);
    $('#num_pisos').prop('required',true);
    $('#ref_1_num').prop('required',true);
    $('#ref_1_tel').prop('required',true);

  }
  else {

    $('#divPass').attr("style",'display:none');
    $('#contra').prop('required',false);

    // console.log('No Venta');
    $('#contenido').attr("style",'display:none');
    $("#aceptaventa").prop('disabled', true);

    $('#ap_paterno').prop('required',false);
    $('#ap_materno').prop('required',false);
    $('#nombre').prop('required',false);
    $('#fecnacaseg').prop('required',false);
    $('#sexo').prop('required',false);
    $('#autoriza').prop('required',false);
    $('#parentesco').prop('required',false);
    $('#direccion').prop('required',false);
    $('#vialidad').prop('required',false);
    $('#vivienda').prop('required',false);
    $('#asentamien').prop('required',false);
    $('#piso').prop('required',false);
    $('#state').prop('required',false);
    $('#town').prop('required',false);
    $('#col').prop('required',false);
    $('#cp').prop('required',false);
    $('#ref_2').prop('required',false);
    $('#turno').prop('required',false);
    $('#num_pisos').prop('required',false);
    $('#ref_1_num').prop('required',false);
    $('#ref_1_tel').prop('required',false);

  }

}

</script>
<script type="text/javascript">



function LlenarSelect()
      {
      	
        var listdesp  = document.forms.formulario.estatus.selectedIndex;
        //alert(list)
				console.log(listdesp);

        formulario.motivo.length=0;
				
        if(listdesp==1) ListaDes1();
        
        if(listdesp==2) ListaDes2();

      }

      function ListaDes1(){

        opcion0=new Option("No le interesa","No le interesa","defauldSelected");
        opcion1=new Option("Cuelga","Cuelga");
        opcion2=new Option("No cubre requisitos","No cubre requisitos");
        opcion3=new Option("Cliente molesto","Cliente molesto");
        opcion4=new Option("Lo pensara","Lo pensara");
        opcion5=new Option("Pide no volver a llamar","Pide no volver a llamar");
        opcion6=new Option("Venta caida","Venta caida");
        opcion7=new Option("Venta","Venta");
        opcion8=new Option("Mascarilla venta","Mascarilla venta");
        opcion9=new Option("Mascarilla no venta","Mascarilla no venta");


        document.forms.formulario.motivo.options[0]=opcion0;
        document.forms.formulario.motivo.options[1]=opcion1;
        document.forms.formulario.motivo.options[2]=opcion2;
        document.forms.formulario.motivo.options[3]=opcion3;
        document.forms.formulario.motivo.options[4]=opcion4;
        document.forms.formulario.motivo.options[5]=opcion5;
        document.forms.formulario.motivo.options[6]=opcion6;
        document.forms.formulario.motivo.options[7]=opcion7;
        document.forms.formulario.motivo.options[8]=opcion8;
        document.forms.formulario.motivo.options[9]=opcion9;
      }

      function ListaDes2(){
        opcion0=new Option("Buzón","Buzón","defauldSelected");
        opcion1=new Option("Numero inexistente","Numero inexistente");
        opcion2=new Option("No contesta","No contesta");
        opcion3=new Option("Fax","Fax");
        opcion4=new Option("Ya cuenta con el servicio","Ya cuenta con el servicio");
        opcion5=new Option("Remarcación","Remarcación");

        document.forms.formulario.motivo.options[0]=opcion0;
        document.forms.formulario.motivo.options[1]=opcion1;
        document.forms.formulario.motivo.options[2]=opcion2;
        document.forms.formulario.motivo.options[3]=opcion3;
        document.forms.formulario.motivo.options[4]=opcion4;
        document.forms.formulario.motivo.options[5]=opcion5;
      }



</script>
@stop

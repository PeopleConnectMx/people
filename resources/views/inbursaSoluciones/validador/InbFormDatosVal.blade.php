@extends('layout.inbursaSoluciones.validador.validador')
@section('content')
<?php
$value = Session::all();
?>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Validacion Inbursa  | {{$value['nombre_completo']}}</h3>
            </div>
            <div class="panel-body">

            {{ Form::open(['action' => 'InbursaSolucionesController@UpdateFromularioInbSoluciones',
                                'method' => 'post',
                                'class'=>"form-horizontal",
                                'accept-charset'=>"UTF-8",
                                'enctype'=>"multipart/form-data",
                                'name' => "formulario"
                            ]) }}

                            <div class="form-group">
                                  {{ Form::label('Folio','',array('class'=>"col-sm-3 control-label")) }}
                                  <div class="col-sm-8">
                                      {{ Form::text('id',$datos[0]->id,array( 'class'=>"form-control", 'placeholder'=>"", 'readonly'=>'readonly')) }}
                                  </div>
                              </div>

                              <div class="form-group">
                                  {{ Form::label('Telefono','',array('class'=>"col-sm-3 control-label")) }}
                                  <div class="col-sm-8">
                                      {{ Form::text('telefono',$datos[0]->telefono,array('class'=>"form-control", 'placeholder'=>"",'id'=>'telefono','maxlength'=>'10','minlength'=>'10')) }}
                                  </div>
                              </div>

                              <div class="form-group">
                                  {{ Form::label('apellido paterno','',array('class'=>"col-sm-3 control-label")) }}
                                  <div class="col-sm-8">
                                      {{ Form::text('ap_paterno',$datos[0]->ap_paterno,array('class'=>"form-control",'id'=>'ap_paterno')) }}
                                  </div>
                              </div>

                              <div class="form-group">
                                  {{ Form::label('apellido materno','',array('class'=>"col-sm-3 control-label")) }}
                                  <div class="col-sm-8">
                                      {{ Form::text('ap_materno',$datos[0]->ap_materno,array('class'=>"form-control",'id'=>'ap_materno')) }}
                                  </div>
                              </div>

                              <div class="form-group">
                                  {{ Form::label('nombre','',array('class'=>"col-sm-3 control-label")) }}
                                  <div class="col-sm-8">
                                      {{ Form::text('nombre',$datos[0]->nombre,array('class'=>"form-control",'id'=>'nombre')) }}
                                  </div>
                              </div>

                              <div class="form-group">
                                  {{ Form::label('fecha nacimiento','',array('class'=>"col-sm-3 control-label")) }}
                                  <div class="col-sm-8">
                                      {{ Form::date('fecnacaseg',$datos[0]->fech_nac,array('class'=>"form-control",'id'=>'fech_nac')) }}
                                  </div>
                              </div>

                              <div class="form-group">
                                  {{ Form::label('Sexo','',array('class'=>"col-sm-3 control-label")) }}
                                  <div class="col-sm-8">
                                      {{ Form::select('sexo', [
                                      'M' => 'Masculino',
                                      'F' => 'Femenino'],$datos[0]->sexo, ['class'=>"form-control", 'placeholder'=>"",'id'=>'sexo']  ) }}
                                  </div>
                              </div>

                              <div class="form-group">
                                  {{ Form::label('Nombre de la persona que autoriza el seguro','',array('class'=>"col-sm-3 control-label")) }}
                                  <div class="col-sm-8">
                                      {{ Form::text('autoriza',$datos[0]->autoriza,array('class'=>"form-control", 'placeholder'=>"",'id'=>'autoriza')) }}
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
                                    ],$datos[0]->parentesco, ['class'=>"form-control", 'placeholder'=>"",'id'=>'parentesco']  ) }}
                                </div>
                              </div>

                              <div class="form-group">
                                  {{ Form::label('Correo Electrónico','',array('class'=>"col-sm-3 control-label")) }}
                                  <div class="col-sm-8">
                                      {{ Form::email('correo',$datos[0]->correo,array('class'=>"form-control",'id'=>'correo')) }}
                                  </div>
                              </div>

                              <div class="form-group">
                                  {{ Form::label('Fecha en que se hizo el movimiento','',array('class'=>"col-sm-3 control-label")) }}
                                  <div class="col-sm-8">
                                      {{ Form::date('fecha_capt',$datos[0]->fecha_capt,array('class'=>"form-control", 'placeholder'=>"",'id'=>'fecha_capt','readonly'=>'readonly')) }}
                                  </div>
                              </div>

                              <div class="form-group">
                                  {{ Form::label('Dirección','',array('class'=>"col-sm-3 control-label")) }}
                                  <div class="col-sm-8">
                                      {{ Form::text('direccion',$datos[0]->direccion,array( 'class'=>"form-control", 'placeholder'=>"",'id'=>'direccion')) }}
                                  </div>
                              </div>


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
                                        'VDTO '=>'VIADUCTO'
                                        ],
                                  $datos[0]->vialidad, [ 'class'=>"form-control", 'placeholder'=>"",'id'=>'vialidad']  ) }}
                                  </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('Vivienda','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::select('vivienda', [
                                          'NEG' => 'NEGOCIO'
                                        ],
                                    $datos[0]->vivienda, [ 'class'=>"form-control", 'placeholder'=>"",'id'=>'vivienda']  ) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('Número interior','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('num_int',$datos[0]->num_int,array('class'=>"form-control", 'placeholder'=>"",'id'=>'num_int')) }}
                                    </div>
                                </div>


                                <div class="form-group">
                                    {{ Form::label('Piso','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('piso',$datos[0]->piso,array( 'class'=>"form-control", 'placeholder'=>"",'id'=>'piso')) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('Tipo de asentamiento','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::select('asentamiento', [
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
                                          'ZURB'=>'Zona Urbana'
                                        ],
                                    $datos[0]->asentamiento, [ 'class'=>"form-control", 'placeholder'=>"",'id'=>'asentamiento']  ) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('Estado','',array('class'=>"col-sm-3 control-label")) }}
                                    <div class="col-sm-8">
                                        {{ Form::select('estado', [
                                        'AGS' => 'AGS',
                                        'BC' => 'BC',
                                        'BCS'=> 'BCS',
                                        'CAMP'=>'CAMP',
                                        'COAH'=>'COAH',
                                        'COL'=>'COL',
                                        'CHIS'=>'CHIS',
                                        'CHIH'=>'CHIH',
                                        'DF'=>'DF',
                                        'DGO'=>'DGO',
                                        'GTO'=>'GTO',
                                        'GRO'=>'GRO',
                                        'HGO'=>'HGO',
                                        'JAL'=>'JAL',
                                        'MEX'=>'MEX',
                                        'MICH'=>'MICH',
                                        'MOR'=>'MOR',
                                        'NAY'=>'NAY',
                                        'NL'=>'NL',
                                        'OAX'=>'OAX',
                                        'PUE'=>'PUE',
                                        'QRO'=>'QRO',
                                        'QROO'=>'QROO',
                                        'SLP'=>'SLP',
                                        'SIN'=>'SIN',
                                        'SON'=>'SON',
                                        'TAB'=>'TAB',
                                        'TAM'=>'TAM',
                                        'TLAX'=>'TLAX',
                                        'VER'=>'VER',
                                        'YUC'=>'YUC',
                                        'ZAC'=>'ZAC'],
                                    $datos[0]->estado, [ 'class'=>"form-control", 'placeholder'=>"",'id'=>'estado']  ) }}
                                    </div>
                                  </div>

                                  <div class="form-group">
                                      {{ Form::label('Delegación/Municipio','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::text('ciudad',$datos[0]->ciudad,array( 'class'=>"form-control", 'placeholder'=>"",'id'=>'ciudad')) }}
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      {{ Form::label('Colonia','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::text('colonia',$datos[0]->colonia,array( 'class'=>"form-control", 'placeholder'=>"",'id'=>'col')) }}
                                      </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('Codigo Postal','',array('class'=>"col-sm-3 control-label")) }}
                                        <div class="col-sm-8">
                                            {{ Form::text('cp',$datos[0]->cp,array( 'class'=>"form-control", 'placeholder'=>"",'id'=>'cp')) }}
                                        </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-sm-10" style='text-align: center;'>
                                      {{ Form::label('Entr� calles','',array('class'=>"control-label")) }}
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      {{ Form::label('Calle 1','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::text('calle_1',$datos[0]->calle_1,array( 'class'=>"form-control", 'placeholder'=>"",'id'=>'calle_1')) }}
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      {{ Form::label('Calle 2','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::text('calle_2',$datos[0]->calle_2,array( 'class'=>"form-control", 'placeholder'=>"",'id'=>'calle_2')) }}
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-sm-10" style='text-align: center;'>
                                      {{ Form::label('Referencias Principales del Domicilio Asegurado','',array('class'=>"control-label")) }}
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      {{ Form::label('Referencia 1','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::text('ref_1',$datos[0]->ref_1,array( 'class'=>"form-control", 'placeholder'=>"",'id'=>'ref_1')) }}
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      {{ Form::label('Referencia 2','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::text('ref_2',$datos[0]->ref_2,array( 'class'=>"form-control", 'placeholder'=>"",'id'=>'ref_2')) }}
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      {{ Form::label('RVT','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::text('rvt',$datos[0]->rvt,array( 'class'=>"form-control", 'placeholder'=>"",'readonly'=>'readonly')) }}
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      {{ Form::label('Validador','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::text('validador',$value['user'],array( 'class'=>"form-control", 'placeholder'=>"", 'readonly'=>'readonly')) }}
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      {{ Form::label('# de pisos de la construcción','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::text('num_pisos',$datos[0]->num_pisos,array( 'class'=>"form-control", 'placeholder'=>"",'title'=>'La planta baja cuenta como Piso 1','id'=>'pisos')) }}
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      {{ Form::label('Número celular','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::text('num_cel',$datos[0]->num_cel,array('maxlength'=>'10', 'class'=>"form-control", 'placeholder'=>"",'title'=>'La planta baja cuenta como Piso 1','id'=>'pisos')) }}
                                      </div>
                                  </div>


                                  <div class="form-group">
                                      {{ Form::label('Compañia celular','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                        {{ Form::select('num_cel', [
                                             'TELCEL' => 'TELCEL',
                                             'IUSACELL' => 'IUSACELL',
                                             'TELEFONICA_MOVISTAR' => 'TELEFONICA MOVISTAR',
                                             'UNEFON' => 'UNEFON',
                                             'OTRO' => 'OTRO',
                                             'ATT' => 'AT&amp;T',
                                             'NEXTEL' => 'NEXTEL',
                                             'VIRGIN' => 'VIRGIN'],
                                              $datos[0]->comp_cel, ['class'=>"form-control", 'placeholder'=>"",'id'=>'num_cel','onchange'=>'compval()']  ) }}  
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      {{ Form::label('Otra compañia','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">                                      
                                         {{ Form::text('otra_comp_cel',$datos[0]->otra_comp_cel,array('class'=>"form-control",'placeholder'=>"Nombre de la otra compañia telefonica",'id'=>'otra_comp_cel')) }}
                                       </div>
                                  </div>

                                  <!-- <div class="form-group">
                                      {{ Form::label('Estatus interno','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::select('estatus', [
                                          '1' => 'VENTA',
                                          '2' => 'VENTA EN PROCESO',
                                          '3'=>'RECHAZO EN VALIDACION',
                                          '4'=>'RECUPERAR',
                                          '5'=>'RECUPERADA',
                                          '6'=>'RECUPERACION FALLIADA',
                                          '7'=>'CANCELADA'],
                                      '', ['class'=>"form-control", 'placeholder'=>""]  ) }}
                                      </div>
                                  </div> -->



                                  <div class="form-group">
                                          {{ Form::label('Nombre empresa','',array('class'=>"col-sm-3 control-label")) }}
                                          <div class="col-sm-8">
                                           {{ Form::text('nombre_empresa',$datos[0]->nomb_com,array('class'=>"form-control", 'placeholder'=>"",'id'=>'nombre_empresa')) }}
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
                                         $datos[0]->giro_com, ['class'=>"form-control", 'placeholder'=>"",'id'=>'giro']  ) }}
                                           </div>
                                        </div>


                                        <div class="form-group">
                                          {{ Form::label('RFC','',array('class'=>"col-sm-3 control-label")) }}
                                          <div class="col-sm-8">
                                           {{ Form::text('rfc',$datos[0]->rfc,array('class'=>"form-control", 'placeholder'=>"",'id'=>'rfc', 'maxlength'=>'14','minlength'=>'12')) }}
                                          </div>
                                        </div>


                                  <div class="form-group">
                                      {{ Form::label('Estatus interno','',array('class'=>"col-sm-3 control-label")) }}
                                      <div class="col-sm-8">
                                          {{ Form::select('estatus', [
                                          'Venta' => 'Venta',
                                          'Venta en proceso' => 'Venta en proceso',
                                          'Rechazo en validacion'=>'Rechazo en validacion',
                                          'Recuperar'=>'Recuperar',
                                          'Recuperada'=>'Recuperada',
                                          'Recuperacion fallida'=>'Recuperacion fallida',
                                          'Cancelada'=>'Cancelada'],
                                      $datos[0]->estatus_people_2, ['class'=>"form-control", 'placeholder'=>""]  ) }}
                                      </div>
                                  </div>


                                  <div class="form-group">
                                      <div class="col-sm-offset-5 col-sm-1">
                                          {{ Form::submit('Enviar',['class'=>"btn btn-default","onClick"=>'return valida()','id'=>'submit']) }}
                                      </div>
                                  </div>


                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>


<script src="{{asset('/assets/js/jquery-3_2_1.min.js')}}" ></script>
<script type="text/javascript">

function compval() {
  //compañia celular
   //console.log($('#ref_1_num').val());
  // console.log($('#ref_1_tel').val());
  console.log($('#num_cel').val());

  if ($('#num_cel').val()=="OTRO") {
    $('#otra_comp_cel').prop('required',true);
    $('#otra_comp_cel').prop('readonly',false);
  }
  else {
    $('#otra_comp_cel').prop('required',false);
    $('#otra_comp_cel').prop('readonly',true);
  }
}



</script>




@stop

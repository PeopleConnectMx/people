@extends('layout.VivaAnuncios.viva')
@section('content')


<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
            <div class="panel-body">
                {{ Form::open([
                              'method' => 'post',
                              'class'=>"form-horizontal",
                              'accept-charset'=>"UTF-8",
                              'enctype'=>"multipart/form-data",
                              'name' => "formulario"
                                ]) }}

                <div class="form-group">
                    {{ Form::label('Telefono','',array('class'=>"col-sm-3 control-label")) }}
                    <div class="col-sm-8">
                        {{ Form::text('telefono',$datos[0]->telefono,array('class'=>"form-control")) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('colonia','',array('class'=>"col-sm-3 control-label")) }}
                    <div class="col-sm-8">
                        {{ Form::text('telefono',$datos[0]->colonia,array('class'=>"form-control")) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('Ciudad','',array('class'=>"col-sm-3 control-label")) }}
                    <div class="col-sm-8">
                        {{ Form::text('telefono',$datos[0]->ciudad,array('class'=>"form-control")) }}
                    </div>
                </div>
                                
                <div class="form-group">
                    {{ Form::label('Estado','',array('class'=>"col-sm-3 control-label")) }}
                    <div class="col-sm-8">
                        {{ Form::text('estado',$datos[0]->estado,array('class'=>"form-control")) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('imagen','',array('class'=>"col-sm-3 control-label")) }}
                    <div class="col-sm-8">
                        {{ Form::text('telefono',$datos[0]->imagen,array('class'=>"form-control")) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('link','',array('class'=>"col-sm-3 control-label")) }}
                    <div class="col-sm-8">
                        {{ Form::text('link',$datos[0]->link,array('class'=>"form-control")) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('Marca','',array('class'=>"col-sm-3 control-label")) }}
                    <div class="col-sm-8">
                        {{ Form::text('marca',$datos[0]->marca,array('class'=>"form-control")) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('modelo','',array('class'=>"col-sm-3 control-label")) }}
                    <div class="col-sm-8">
                        {{ Form::text('modelo',$datos[0]->modelo,array('class'=>"form-control")) }}
                    </div>
                </div>
                                
                <div class="form-group">
                    {{ Form::label('Tipificacion','',array('class'=>"col-sm-3 control-label")) }}
                    <div class="col-sm-8">
                        {{ Form::text('tipificacion',$datos[0]->tipificacion,array('class'=>"form-control")) }}
                    </div>
                </div>
                                
                <div class="form-group">
                    {{ Form::label('Detalle','',array('class'=>"col-sm-3 control-label")) }}
                    <div class="col-sm-8">
                        {{ Form::text('Detalle',$datos[0]->detalle,array('class'=>"form-control")) }}
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

@stop

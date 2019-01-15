@extends('layout.error.error')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">

                {{ Form::open(['action' => 'NominaRealController@Calcula',
                                'method' => 'post',
                                'class'=>"form-horizontal",
                                'accept-charset'=>"UTF-8",
                                'enctype'=>"multipart/form-data",
                                'name' => "formulario"
                            ]) }}


                <div class="form-group">
                    {{ Form::label('No. Empleado','',array('class'=>"col-sm-2 control-label")) }}
                    <div class="col-sm-10">
                        {{ Form::text('id','',array('required' => 'required', 'class'=>"form-control", 'placeholder'=>"",'minlength'=>'10')) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {{ Form::submit('Enviar',['class'=>"btn btn-default"]) }}
                    </div>
                </div>

                {{ Form::close() }}

            </div>
        </div>
    </div>
</div>

@stop

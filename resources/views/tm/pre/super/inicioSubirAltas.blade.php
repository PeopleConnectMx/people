@extends($menu)
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Subir Altas</h3>
            </div>
            <div class="panel-body">

                {{ Form::open(['action' => 'SupervisorController@SubirAltas',
                                'method' => 'post',
                                'class'=>"form-horizontal",
                                'enctype'=>"multipart/form-data"
                            ]) }}


                <div class="form-group">
                    {{ Form::label('Selecciona tu archivo','',array('class'=>"col-sm-2 control-label")) }}
                    <div class="col-sm-10">
                        {!! Form::file('archivo') !!}
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

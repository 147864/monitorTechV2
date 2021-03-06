@extends('adminlte::page')

@section('content')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h3 style="text-align: center">Relatório Gerencial de Monitoramento</h3>
    {!! Form::open(['route'=>'monitoramentos.relMonitoramentos']) !!}

    <div class="form-group">
        {!! Form::label('veiculo_id', 'Veículo:') !!}
        {!! Form::select('veiculo_id',
                        \App\Veiculos::orderBy('nome')->pluck('nome', 'id')->toArray(),
                        null, ['class'=>'form-control', 'required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('dt_ini', 'Data Inicio:') !!}
        {!! Form::date('dt_ini', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dt_fim', 'Data Fim:') !!}
        {!! Form::date('dt_fim', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Gerar Relatório', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
@stop
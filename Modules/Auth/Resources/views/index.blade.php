@extends('auth::layouts.master')

<style>
    html, body {
        height: 100%;
        min-height: 100%;
    }
    .jumbotron {
        height: 95%;
        min-height: 25%;
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: center;
        align-items: center;
        -webkit-justify-content: center;
        justify-content: center;
    }
</style>

@section('content')
    <div class="section-one">
        <div class="container-fluid">
            <div class="jumbotron">

                {!! Form::open(['route' => 'auth.login', 'method' => 'POST']) !!}

                    {{ csrf_field() }}

                    <div class="form-group">

                        {!! Form::label('email', 'E-mail Address') !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail', 'autocomplete' => 'off']) !!}

                    </div>

                <div class="form-group">

                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}

                </div>

                <div class="form-group">
                    {!! Form::submit('Entrar', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('auth.register') }}" style="margin-left: 20px;">Criar conta</a>
                </div>

                {!! Form::close() !!}


            </div>
        </div>
    </div>
@stop

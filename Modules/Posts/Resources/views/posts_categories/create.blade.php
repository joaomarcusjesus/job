@extends('posts::layouts.master')


@section('content')

    <div class="container-fluid">
        <section class="col-md-offset-3">
            <header class="">
                <h2>Nova Categoria</h2>
            </header>

            <div class="">
                {!! Form::open(['route' => 'admin.posts_categories.store', 'method' => 'POST']) !!}

                {{ csrf_field() }}

                <div class="row">
                    <div class="form-group col-md-6 ">
                        {!! Form::label('name', 'Nome') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-3 ">
                        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>

                {!! Form::close() !!}

            </div>

        </section>
    </div>

@stop
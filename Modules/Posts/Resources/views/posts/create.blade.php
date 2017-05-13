@extends('posts::layouts.master')


@section('content')

    <div class="container-fluid">
        <section class="col-md-offset-3">
            <header class="">
                <h2>New Post</h2>
            </header>
            <div class="">
                {!! Form::open(['route' => 'admin.posts.store', 'method' => 'POST']) !!}

                {{ csrf_field() }}

                <div class="row">
                    <div class="form-group col-md-6 ">
                        {!! Form::label('title', 'Title') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 ">
                        {!! Form::label('category', 'Categoria') !!}
                        {!! Form::select('category_id', $allCategories, null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 ">
                        {!! Form::label('comments', 'Comentários') !!}
                        {!! Form::textarea('comments', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-3 ">
                        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>

                {!! Form::close() !!}

            </div>
        </section>
    </div>

@stop
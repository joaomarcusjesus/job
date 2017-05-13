@extends('posts::layouts.master')

<style>
    .weposts {
        width: 480px;
        height: 460px;
        margin: 10px;
        padding: 5px;
    }
    header {
        position: relative;
        margin: 20px;
    }
</style>

@section('content')
    <div class="container-fluid">

        <div class="weposts col-md-offset-3">
            <div class="pull-right">
                <a href="{{ route('admin.posts_categories.create') }}">Nova Categoria</a>
            </div>
            <header class="sidebar">
                <h2>Minhas categorias</h2>
            </header>
            <div class="lists-posts">
                <ul>
                    @foreach($myCategories as $category)
                        <li><a href="">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop

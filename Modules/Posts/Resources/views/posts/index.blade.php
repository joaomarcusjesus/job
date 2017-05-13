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
                <a href="{{ route('admin.posts.create') }}">Novo Post</a>
            </div>
            <header class="sidebar">
                <h2>Meus posts</h2>
            </header>
            <div class="lists-posts">
                <ul>
                    @foreach($myPosts as $post)
                        <li><a href="">{{ $post->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop

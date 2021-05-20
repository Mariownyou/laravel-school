@extends('layouts.new')

@section('title')
    Редактирование Публикации {{ $post->title }}
@endsection

@section('content')
    @include('components.post_form', ['post' => $post])
@endsection

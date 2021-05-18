@extends('layouts.new')

@section('title')
    Редактирование Публикации {{ $post->title }}
@endsection

@section('content')
    <div class="form-wrapper">
        @include('components.post_form', ['post' => $post])
    </div>
@endsection

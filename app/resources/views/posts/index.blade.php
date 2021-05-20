@extends('layouts.new')

@section('title')
    Родителям
@endsection

@section('content')
    @include('components.admin_panel')
    <div class="content" id="content">
        <h1 class="title-h1">Родителям</h1>
        <div class="menu">
            <div class="menu__item">Актуальная информация</div>
            <div class="menu__item menu__item-active">Экзамен</div>
            <div class="menu__item">Зачет</div>
            <div class="menu__item">Книги</div>
            <div class="menu__item">Видео</div>
        </div>
        @foreach($posts as $post)
            @include('components.post', ['post' => $post])
        @endforeach
    </div>
@endsection

@push('scripts')
@endpush

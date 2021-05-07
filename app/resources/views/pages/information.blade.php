@extends('layouts.new')

@section('title')
    — Информация для Родителей
@endsection

@section('content')
    <div class="content" id="content">
        <h1 class="title-h1">Для Родителей</h1>
        <div class="menu">
            <div class="menu__item">Актуальная информация</div>
            <div class="menu__item menu__item-active">Экзамен</div>
            <div class="menu__item">Зачет</div>
            <div class="menu__item">Книги</div>
            <div class="menu__item">Видео</div>
        </div>
        @include('components.post')
        @include('components.post')
    </div>
@endsection

@push('scripts')
    <script>
        const navbar = document.getElementById('navbar');
        const content = document.getElementById('content');

        function getClassWidth(selector) {
            let elClass = document.querySelector('.' + selector);

            return parseInt(getComputedStyle(elClass).width);
        };

        function calcContentPadding(width) {
            let navbarWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            console.log(navbarWidth, width);
            let padding = (navbarWidth - width) / 2;
            return padding - 40;
        };

        function setContentPadding(padding) {
            content.style.paddingLeft = padding + 'px';
        };

        window.addEventListener('resize', () => {
            console.log('changed');
            console.log(calcContentPadding(getClassWidth('navbar--grid')))
            setContentPadding(calcContentPadding(getClassWidth('navbar--grid')));
        });

        window.onload = () => {
            setContentPadding(calcContentPadding(getClassWidth('navbar--grid')));
        }
    </script>
@endpush

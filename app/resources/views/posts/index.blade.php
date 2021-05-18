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
            let margin = (navbarWidth - width) / 2;
            return margin + 185 - 15;
        };

        function setContentPadding(margin) {
            content.style.marginLeft = margin + 'px';
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
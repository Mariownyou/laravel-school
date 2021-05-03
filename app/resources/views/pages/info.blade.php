@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="l-container">
            <h1 class="l-h1">Для Родителей</h1>
            <div class="l-flex">
                <div class="l-menu">
                    <a href="" class="l-menu-item">Текущая Информация</a>
                    <a href="" class="l-menu-item">Экзамен</a>
                    <a href="" class="l-menu-item">Зачет</a>
                    <a href="" class="l-menu-item">Книги</a>
                    <a href="" class="l-menu-item">Видео</a>
                </div>
                <div class="l-select">
                    <span>Класс</span>
                    <select name="" id="">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                    </select>
                </div>
            </div>

            <div class="l-grid">
                @include('includes.posts_grid')
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .l-select {
            margin-left: 10px;
            font-size: 18px;
        }

        .l-flex {
            width: 100%;
            display: flex;
            align-items: center;
        }

        .l-container {
            padding: 15px;
            background: #E5E5E5;
        }

        .l-grid {
            margin: 8px 0;
            padding: 0 5px;
        }

        .l-h1 {
            text-transform: capitalize;
            font-style: normal;
            font-weight: normal;
            font-size: 30px;
            color: #058FBD;
            margin-bottom: 8px;
        }

        .l-menu {
            color: white;
            background: #274C6D;
            border-radius: 4px;
            padding: 13px 5px;
            margin: 8px 0;
            display: inline-block;
        }

        .l-menu-item {
            font-size: 18px;
            margin: 0 10px;
            color: inherit;
        }
    </style>
@endpush

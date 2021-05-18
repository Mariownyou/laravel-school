@extends('layouts.new')

@section('title')
    Новая Публикация
@endsection

@section('content')
    <div class="form-wrapper">
        @include('components.post_form')
    </div>
@endsection

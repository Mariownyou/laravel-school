@extends('layouts.site')

@section('title')

@endsection

@section('page-info')
    <div class="page-info">
        <h1 class="page-info__title">Questions and Answers</h1>
    </div>
@endsection

@section('content')
    @include('includes.question_form')
    <h1 class="about__title">All questions and answers</h1>
    <div class="questions">
        @foreach($questions as $q)
            @include('includes.question', ['q' => $q])
        @endforeach
    </div>
@endsection

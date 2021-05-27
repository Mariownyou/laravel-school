@extends('layouts.site')
@section('title')
@endsection

@section('page-info')
@endsection

@section('content')
    @include('includes.question', ['q' => $question, 'answer' => true])
    @include('includes.answer_form')
@endsection

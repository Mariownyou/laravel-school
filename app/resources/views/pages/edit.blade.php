@extends('layouts.site')

@section('title')
    Edit Post: {{ $post->title }}
@endsection

@section('content')
    @include('includes.form', ['post' => $post])
@endsection

@extends('layouts.site')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <div class="spacer"></div>
    @include('includes.post_card', ['post' => $post])
@endsection

@push('css')
    <style>
        .content > .spacer {
            margin-bottom: 32px;
        }
    </style>
@endpush

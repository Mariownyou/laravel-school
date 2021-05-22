@extends('layouts.site')

@section('title')
    News
@endsection

@section('page-info')

@endsection

@section('content')
    <div class="news">
        @foreach($posts as $day => $posts)
        <div class="day">
            <h2 class="day__date">{{ $day }}</h2>
            <div class="day__posts">
                @foreach($posts as $post)
                    @include('includes.news_card', ['post' => $post])
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
@endsection

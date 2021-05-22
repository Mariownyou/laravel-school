@extends('layouts.site')

@section('title')
    News
@endsection

@section('page-info')
    <div class="page-info">
        <h1 class="page-info__title">News</h1>
        <div class="page-info__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo justo et convallis eleifend.</div>
    </div>
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

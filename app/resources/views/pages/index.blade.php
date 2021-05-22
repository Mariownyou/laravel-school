@extends('layouts.site')

@section('title')
    News
@endsection

@section('page-info')
    @if($title == 'parents')
        <div class="page-info">
            <h1 class="page-info__title">For Parents</h1>
            <div class="page-info__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo justo et convallis eleifend.</div>
        </div>
    @elseif($title == 'students')
        <div class="page-info">
            <h1 class="page-info__title">For Students</h1>
            <div class="page-info__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo justo et convallis eleifend.</div>
        </div>
    @endif
@endsection

@section('content')
    <div class="news">
        <div class="day">
            <h2 class="day__date">Today</h2>
            <div class="day__posts">
                @foreach($posts as $post)
                    @include('includes.news_card', ['post' => $post])
                @endforeach
            </div>
        </div>
    </div>
@endsection

@extends('layouts.site', ['row' => 'includes.rows.class_row'])

@section('title')
    News
@endsection

@section('page-info')
    @if(@$title == 'parents')
        <div class="page-info">
            <h1 class="page-info__title">For Parents</h1>
            <div class="page-info__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo justo et convallis eleifend.</div>
        </div>
    @elseif(@$title == 'students')
        <div class="page-info">
            <h1 class="page-info__title">For Studentsn</h1>
            <div class="page-info__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo justo et convallis eleifend.</div>
        </div>
    @elseif(@$title == 'class')
        <div class="page-info">
            <h1 class="page-info__title">All Classes</h1>
            <div class="page-info__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo justo et convallis eleifend.</div>
        </div>
    @endif

    @if(@$class)
        <div class="page-info">
            <h1 class="page-info__title">{{ $class }} Class</h1>
            <div class="page-info__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo justo et convallis eleifend.</div>
        </div>
    @endif

@endsection

@section('content')
    <div class="news">
        <div class="day">
            <div class="day__posts">
                @foreach($posts as $post)
                    @include('includes.post_card', ['post' => $post])
                @endforeach
            </div>
        </div>
    </div>
@endsection

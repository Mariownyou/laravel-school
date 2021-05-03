@extends('layouts.app')

@section('content')
    <div class="bggrey pt40 pb40">
        <div class="container">
            <div class="row">
                <div class="col15-md-11 col15-md-offset-2 news-blocks">
                    <h1>Наши новости</h1>
                    <div class="row plr9">
                        @include('includes.news_post')
                        @include('includes.news_post')
                        @include('includes.news_post')
                        @include('includes.news_post')
                        @include('includes.news_post')
                        @include('includes.news_post')
                        @include('includes.news_post')
                        @include('includes.news_post')
                        @include('includes.news_post')
                        @include('includes.news_post')
                        @include('includes.news_post')
                        @include('includes.news_post')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

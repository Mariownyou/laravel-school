@extends('layouts.new')

@section('title')
    Родителям
@endsection

@section('content')
    @include('components.admin_panel')
    <div class="content" id="content">
        <h1 class="title-h1">Последние Новости</h1>
        @foreach($posts as $post)
            @include('components.post_news', ['post' => $post])
        @endforeach
    </div>
@endsection

@push('scripts')
@endpush

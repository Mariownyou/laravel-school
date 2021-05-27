<div class="post_card">
    <h3 class="post_card__title">
        <a class="news_card__link" href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
    </h3>
    <a class="edit-button" href="{{ route('posts.edit', $post->id) }}">
        <svg class="edit-icon" data-name="{{ $post->title }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 190"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>Edit</title><path class="cls-1" d="M93.49,74.72,70.28,70.34c.81-4.46,1.52-7.92,2-9.72,2.78-9.92,24.45-6.15,22.54,5.63C94.57,67.87,94.1,70.86,93.49,74.72ZM83.92,136,68.75,152.52l-8-21.48S65.42,98.74,69,77.48l23.33,4.4C89.06,102.9,83.92,136,83.92,136Z"/></svg>
    </a>
    <article class="post_card__text">
        {{ $post->text }}
    </article>
    <div class="news_card__info">
        <div class="time">{{ $post->created_at->diffForHumans() }}</div>
        <a href="" class="tag tag-primary">{{ $post->class }} класс</a>
        <a href="" class="tag">{{ $post->type }}</a>
    </div>
</div>

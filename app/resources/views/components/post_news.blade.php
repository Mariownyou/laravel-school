<div class="post">
    <div class="post__actions">
        <a class="edit-link" href="{{ route('posts.edit', $post->id) }}">
            <svg class="edit-icon" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 190"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>Монтажная область 4</title><path class="cls-1" d="M93.49,74.72,70.28,70.34c.81-4.46,1.52-7.92,2-9.72,2.78-9.92,24.45-6.15,22.54,5.63C94.57,67.87,94.1,70.86,93.49,74.72ZM83.92,136,68.75,152.52l-8-21.48S65.42,98.74,69,77.48l23.33,4.4C89.06,102.9,83.92,136,83.92,136Z"/></svg>
        </a>
    </div>
    <img class="post__avatar" src="http://school-shamir.ru/files/teachers/56e0a755332fb6065s.jpg" alt="Римма Яковлевна">
    <h1 class="post__title-big">{{ $post->title }}</h1>
    <div class="post__meta">
        <span><span class="post__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;{{ $post->views }}</span>
        &nbsp;&nbsp;
        <span title="{{ $post->created_at->format('Y.m.d H:i:s') }}">{{ $post->created_at->diffForHumans() }}</span>
    </div>

</div>

<div class="post">
    <div class="post__actions">
        <a class="edit-link" href="{{ route('posts.edit', $post->id) }}">
            <svg class="edit-icon" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 190"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>Монтажная область 4</title><path class="cls-1" d="M93.49,74.72,70.28,70.34c.81-4.46,1.52-7.92,2-9.72,2.78-9.92,24.45-6.15,22.54,5.63C94.57,67.87,94.1,70.86,93.49,74.72ZM83.92,136,68.75,152.52l-8-21.48S65.42,98.74,69,77.48l23.33,4.4C89.06,102.9,83.92,136,83.92,136Z"/></svg>
        </a>
    </div>
    <img class="post__avatar" src="http://school-shamir.ru/files/teachers/56e0a755332fb6065s.jpg" alt="Римма Яковлевна">
    <h2 class="post__title">{{ $post->title }}</h2>
    <div class="post__content">
        {{ $post->text }}
    </div>
    <div class="post__meta"></div>

</div>

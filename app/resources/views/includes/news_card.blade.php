<div class="news_card">
    <div class="news_card__info">
        <div class="time">{{ $post->created_at->format('h:i') }}</div>
        <a href="" class="tag tag-primary">{{ $post->class }} класс</a>
        <a href="" class="tag">{{ $post->type }}</a>
    </div>
    <h3 class="news_card__title">
        <a class="news_card__link" href="">{{ $post->title }}</a>
    </h3>
</div>

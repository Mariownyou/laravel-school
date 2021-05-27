<article class="answer">
    <div class="text__container">
        <div class="answer__text">{{ $a->text }}</div>
    </div>
    <div class="answer__info">
        <div class="answer__name">Римма Яковлевна</div>
        <div class="answer__time">{{ $a->created_at->diffForHumans() }}</div>
    </div>
{{--    <a href="{{ route('answer', $a->id) }}">Answer</a>--}}
</article>

<article class="question">
    <div class="question__info">
        <div class="question__name">{{ $q->email }}</div>
        <div class="question__time">{{ $q->created_at->diffForHumans() }}</div>
    </div>
    <div class="text__container">
        <div class="question__text">{{ $q->text }}</div>
    </div>
    @if(!@$answer and !$q->answered)
        <a class="link" href="{{ route('answer', $q->id) }}">Answer</a>
    @endif
</article>

@if($q->answer)
    @include('includes.answer', ['a' => $q->answer])
@endif

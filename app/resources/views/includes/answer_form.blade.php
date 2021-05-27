<form class="form form_q" action="{{ @$answer ? route('answer.update', $q_id) : route('answer.store', $q_id) }}" method="POST">
    @if(@$answer)
        @method('put')
    @else
        @method('post')
    @endif

    @csrf


    @if(@$answer)
        <div class="form__title-black">Edit Answer</div>
    @else
        <div class="form__title-black">Write an Answer</div>
    @endif

    <div class="form-control">
        <div class="form-control__label">Answer</div>
        <textarea placeholder="Type your very important answer here..." name="text" id="" cols="30" rows="10" class="textarea">{{ @$answer->text }}</textarea>
    </div>
    <div class="form-control_end">
        <button class="submit-button" type="submit">
            {{ @$answer ? 'Update' : 'Answer' }}
        </button>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>

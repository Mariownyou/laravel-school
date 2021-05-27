<form class="form form_q" action="{{ @$post ? route('questions.update', @$question->id) : route('questions.store') }}" method="POST">
    @if(@$question)
        @method('put')
    @else
        @method('post')
    @endif

    @csrf


    @if(@$post)
        <div class="form__title-black">Edit Question</div>
    @else
        <div class="form__title-black">New Question</div>
    @endif

    <div class="form-control">
        <div class="form-control__label">Email</div>
        <input type="email" class="input" name="email" value="{{ @$question->email }}">
    </div>
    <div class="form-control">
        <div class="form-control__label">Question</div>
        <textarea placeholder="Type your very important question here..." name="text" id="" cols="30" rows="10" class="textarea">{{ @$question->text }}</textarea>
    </div>
    <div class="form-control_end">
        <button class="submit-button" type="submit">
            {{ @$question ? 'Update' : 'Ask' }}
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


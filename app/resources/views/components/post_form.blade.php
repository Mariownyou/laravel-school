<form class="form" action="{{ @$post ? route('posts.update', @$post->id) : route('posts.store') }}" method="POST">
    @if(@$post)
        @method('put')
    @else
        @method('post')
    @endif

    @csrf
    <div class="form__title">Новая Публикация</div>
    <div class="form-control">
        <div class="form-control__label">Заголовок</div>
        <input type="text" class="input-big" name="title" value="{{ @$post->title }}">
    </div>
    <div class="form-control">
        <div class="form-control__label">Текст</div>
        <textarea name="text" id="" cols="30" rows="10" class="textarea">{{ @$post->text }}</textarea>
    </div>
    <div class="form-control">
        <div class="form-control__label">Класс</div>
        <div class="checkbox-group_horizontal">
            <label class="checkbox" for="">
                <input type="radio" class="checkbox" name="class" value="1"
                   @if(@$post->class == 1)checked @endif
                >
                1
            </label>
            <label class="checkbox" for="">
                <input type="radio" class="checkbox" name="class" value="2"
                       @if(@$post->class == 2)checked @endif
                >
                2
            </label>
            <label class="checkbox" for="">
                <input type="radio" class="checkbox" name="class" value="3"
                       @if(@$post->class == 3)checked @endif
                >
                3
            </label>
            <label class="checkbox" for="">
                <input type="radio" class="checkbox" name="class" value="4"
                       @if(@$post->class == 4)checked @endif
                >
                4
            </label>
            <label class="checkbox" for="">
                <input type="radio" class="checkbox" name="class" value="5"
                       @if(@$post->class == 5)checked @endif
                >
                5
            </label>
            <label class="checkbox" for="">
                <input type="radio" class="checkbox" name="class" value="6"
                       @if(@$post->class == 6)checked @endif
                >
                6
            </label>
            <label class="checkbox" for="">
                <input type="radio" class="checkbox" name="class" value="7"
                       @if(@$post->class == 7)checked @endif
                >
                7
            </label>
            <label class="checkbox" for="">
                <input type="radio" class="checkbox" name="class" value="8"
                       @if(@$post->class == 8)checked @endif
                >
                8
            </label>
            <label class="checkbox" for="">
                <input type="radio" class="checkbox" name="class" value="9"
                       @if(@$post->class == 9)checked @endif
                >
                9
            </label>
            <label class="checkbox" for="">
                <input type="radio" class="checkbox" name="class" value="10"
                       @if(@$post->class == 10)checked @endif
                >
                10
            </label>
            <label class="checkbox" for=""
                   @if(@$post->class == 11)checked @endif
                >
                <input type="radio" class="checkbox" name="class" value="11">
                11
            </label>
        </div>
    </div>
    <div class="form-control">
        <div class="form-control__title">Категория</div>
        <div class="checkbox-group">
            <label class="checkbox">
                <input type="radio" class="checkbox" name="category" value="info"
                       @if(@$post->type == 'info')checked @endif
                >
                Актуальная Информация
            </label>
            <label class="checkbox">
                <input type="radio" class="checkbox" name="category" value="exam"
                       @if(@$post->type == 'exam')checked @endif
                >
                Экзамен
            </label>
            <label class="checkbox">
                <input type="radio" class="checkbox" name="category" value="mock"
                       @if(@$post->type == 'mock')checked @endif
                >
                Зачет
            </label>
            <label class="checkbox">
                <input type="radio" class="checkbox" name="category" value="books"
                       @if(@$post->type == 'books')checked @endif
                >
                Книги
            </label>
        </div>
    </div>
    <div class="form-control">
        <div class="form-control__title">Это новость?</div>
        <div class="checkbox-group">
            <label class="checkbox">
                <input type="radio" class="checkbox" name="news" value="1"
                       @if(@$post->isNews == true)checked @endif
                >
                Да
            </label>
            <label class="checkbox">
                <input type="radio" class="checkbox" name="news" value="0"
                       @if(@$post->isNews == false)checked @endif
                >
                Нет
            </label>
        </div>
    </div>
    <div class="form-control">
        <div class="form-control__title">Для кого это?</div>
        <div class="checkbox-group">
            <label class="checkbox">
                <input type="radio" class="checkbox" name="parents" value="1"
                       @if(@$post->isParents == true)checked @endif
                >
                Родителям
            </label>
            <label class="checkbox">
                <input type="radio" class="checkbox" name="parents" value="0"
                       @if(@$post->isParents == false)checked @endif
                >
                Ученикам
            </label>
        </div>
    </div>
    <button class="submit-button" type="submit">
        {{ @$post ? 'Обновить' : 'Опубликовать' }}
    </button>
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

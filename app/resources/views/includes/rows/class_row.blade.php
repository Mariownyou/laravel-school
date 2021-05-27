<div class="links second_row">
    @for($i=1; $i<12; $i++)
        <a href="{{ route('classes', $i) }}" class="link {{ request()->is('class/'.$i) ? 'link-active' : '' }}">{{$i}} class</a>
    @endfor
</div>

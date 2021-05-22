<nav class="nav grid">
    <div class="logo">
{{--        <img class="logo" src="{{ asset('images/logo-sm.png') }}" alt="School Shamir">--}}
{{--        <img class="logo" src="{{ asset('images/logo.jpg') }}" alt="School Shamir">--}}
    </div>
    <div class="nav__links">
        <div class="links">
            <a class="link {{ request()->is('news*') ? 'link-active' : '' }}" href="{{ route('news') }}">News</a>
            <a class="link {{ request()->is('about') ? 'link-active' : '' }}" href="{{ route('about') }}">About School</a>
            <a class="link {{ request()->is('parents*') ? 'link-active' : '' }}" href="{{ route('parents') }}">For Parents</a>
            <a class="link {{ request()->is('students*') ? 'link-active' : '' }}" href="{{ route('students') }}">For Students</a>
            <a class="link" href="">Q&A</a>
        </div>
        <div class="buttons">
            <a href="{{ route('new') }}" class="link">New Post</a>
        </div>
    </div>

</nav>

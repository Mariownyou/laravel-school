<nav class="navbar">
    <div class="navbar__row">
        <div class="navbar__section">
            <a class="link {{ request()->is('news*') ? 'link-active' : '' }}" href="{{ route('news') }}">News</a>
            <a class="link {{ request()->is('about') ? 'link-active' : '' }}" href="{{ route('about') }}">About School</a>
        </div>
        <div class="navbar__section navbar__section-center">
            <img class="logo" src="{{ asset('images/logo-eng.png') }}" alt="School Shamir">
        </div>
        <div class="navbar__section">
            <a class="link {{ request()->is('class*') ? 'link-active' : '' }}" href="{{ route('class') }}">Classes</a>
            <a class="link {{ request()->is('questions*') ? 'link-active' : '' }}" href="{{ route('questions.index') }}">Q&A</a>
        </div>
    </div>
    @if(@$row)
        <div class="navbar__row">
            @include(@$row)
        </div>
    @else
        <div class="spacer"></div>
    @endif
    <div class="admin-buttons">
        <a href="{{ route('new') }}" class="admin-button {{ request()->is('new') ? 'admin-button_disabled' : '' }}"}>New Post</a>
        <a href="{{ route('about') }}" class="admin-button {{ request()->is('about') ? 'admin-button_disabled' : '' }}"}>Manage Site</a>
    </div>
</nav>

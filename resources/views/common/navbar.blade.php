<link rel="stylesheet" type="text/css" href="/css/navbar.css">
<nav class="navbar">
    <div class="max-width">
        <div class="name"><a href="/">Teodor <span>Ivanov</span></a></div>
        <ul class="nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
            <li class="{{ Request::is('profile') ? 'active' : '' }}"><a href="/profile">Profile</a></li>
            <li class="{{ Request::is('grades') ? 'active' : '' }}"><a href="{{route('grades.index')}}">Dashboard</a></li>
            <li class="{{ Request::is('posts') ? 'active' : '' }}"><a href="{{ route('posts.index') }}">Blog</a></li>
            <li class="{{ Request::is('faqs') ? 'active' : '' }}"><a href="{{ route('faqs.index') }}">FAQ</a></li>
            <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="/gallery">Gallery</a></li>
            <li class="{{ Request::is('people') ? 'active' : '' }}"><a href="{{ route('people.index') }}">People</a></li>
        </ul>
    </div>
</nav>

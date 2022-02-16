<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts and added files -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
<!-- Navigation bar and name on top left corner on all pages-->

    <nav class="navbar">
        <div class="max-width">
            <div class="name"><a href="/">Teodor <span>Ivanov</span></a></div>
            <ul class="nav">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                <li class="{{ Request::is('profile') ? 'active' : '' }}"><a href="/profile">Profile</a></li>
                <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="/dashboard">Dashboard</a></li>
                <li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="/blog">Blog</a></li>
                <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="/faq">FAQ</a></li>
                <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="/gallery">Gallery</a></li>
            </ul>
        </div>
    </nav>

    @yield('home-content')
    @yield('profile-content')
    @yield('dashboard-content')
    @yield('blog-content')
    @yield('create-new-article-content')
    @yield('faq-content')
    @yield('gallery-content')

<script src="js/animation.js"></script>
</body>

</html>

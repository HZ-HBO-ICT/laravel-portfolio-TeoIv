@extends('layout')

@section('blog-content')
<head>
    <title>Blog</title>
</head>
<body class="blogbody">
<div class="container2">
    <div class="blogheader">
        <p> <span> W</span>elcome to my <span>B</span>log</p>
    </div>
    <div class="midcol">
        @foreach($articles as $article)
            <div class="post">
                <h2>
                    <a href="/profile/{{$article->id}}">{{$article->title}}</a>
                </h2>
                <p>
                    <img src="{{$article->file_path}}">
                </p>
                <p>{{$article->first_lines}}</p>
            </div>
        @endforeach
    </div>
    <div class="rightcol1">
        <div class="crate_new_article">
            <a href="/blog/create">WRITE A NEW ARTICLE</a>
        </div>
    </div>
    <div class="rightcol2">
        <div class="blogautor">
            <h2>About the autor</h2>
            <h5> Sep 07, 2021</h5>
            <a href="profile"><img src="img/blogimage.jpg" class="blogimage" alt=""></a>
            <p>I am 21 years old and I am new to</p>
            <p> programming, but I love learning</p>
            <p> new things every day.</p>
        </div>
    </div>
    <div class="backgroundfade"></div>
</div>
</body>
@endsection

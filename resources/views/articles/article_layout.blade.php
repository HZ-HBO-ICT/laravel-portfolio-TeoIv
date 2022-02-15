@extends('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$article->title}}</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<style>
    .postback {
        transition: ease 0.5s;
        display: flex;
        width: 100%;
        float: left;
        height: 100vh;
        min-height: 500px;
        background: url(/img/blogmain-resized.png) center fixed no-repeat;
    }
</style>

<body class="postback">
<div class="backbutton">
    <a href="../../blog">
        <h3>Back</h3>
    </a>
</div>
<article class="article">
    <h2>{{$article->title}}</h2>
    <h4>By Teodor Ivanov</h4>
    <h5>Sep 11, 2021</h5>
    <section>
        <p>{{ $article->body }}</p>
    </section>
</article>
<footer>
</footer>
<script src="/js/animation.js"></script>
</body>

</html>
